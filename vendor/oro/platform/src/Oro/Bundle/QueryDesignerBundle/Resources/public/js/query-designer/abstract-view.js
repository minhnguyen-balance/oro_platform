/* global define */
define(['underscore', 'backbone', 'oro/translator', 'oro/query-designer/util', 'oro/form-validation', 'oro/delete-confirmation',
    'oro/query-designer/column-selector-view', 'jquery-outer-html'],
function(_, Backbone, __, util, FormValidation, DeleteConfirmation,
         ColumnSelectorView) {
    'use strict';

    var $ = Backbone.$;

    /**
     * @export  oro/query-designer/abstract-view
     * @class   oro.queryDesigner.AbstractView
     * @extends Backbone.View
     */
    return Backbone.View.extend({
        /** @property {Object} */
        options: {
            collection: null,
            entityName: null,
            itemTemplateSelector: null,
            itemFormSelector: null,
            columnChainTemplateSelector: null,
            fieldsLabel: null,
            relatedLabel: null,
            findEntity: null
        },

        /** @property {Object} */
        selectors: {
            itemContainer:  '.item-container',
            cancelButton:   '.cancel-button',
            saveButton:     '.save-button',
            addButton:      '.add-button',
            editButton:     '.edit-button',
            deleteButton:   '.delete-button',
            columnSelector: '[data-purpose="column-selector"]'
        },

        /** @property {jQuery} */
        form: null,

        /** @property {Array} */
        fieldNames: null,

        /** @property {oro.queryDesigner.ColumnSelectorView} */
        columnSelector: null,

        /** @property {Array} */
        fieldLabelGetters: null,

        /** @property */
        itemTemplate: null,

        initialize: function() {
            this.options.collection = this.options.collection || new this.collectionClass();
            this.fieldNames = _.without(_.keys((this.createNewModel()).attributes), 'id');

            this.itemTemplate = _.template($(this.options.itemTemplateSelector).html());

            this.initForm();

            // prepare field label getters
            this.addFieldLabelGetter(this.getSelectFieldLabel);
            this.addFieldLabelGetter(this.getColumnFieldLabel);

            // subscribe to collection events
            this.listenTo(this.getCollection(), 'add', this.onModelAdded);
            this.listenTo(this.getCollection(), 'change', this.onModelChanged);
            this.listenTo(this.getCollection(), 'remove', this.onModelDeleted);
            this.listenTo(this.getCollection(), 'reset', this.onResetCollection);
        },

        render: function() {
            this.getContainer().empty();
            this.getCollection().each(_.bind(function (model) {
                this.onModelAdded(model);
            }, this));

            return this;
        },

        initForm: function () {
            this.form = $(this.options.itemFormSelector);
            this.columnSelector = new ColumnSelectorView({
                el: this.form.find(this.selectors.columnSelector),
                columnChainTemplate: _.template($(this.options.columnChainTemplateSelector).html()),
                fieldsLabel: this.options.fieldsLabel,
                relatedLabel: this.options.relatedLabel,
                findEntity: this.options.findEntity
            });

            var onAdd = _.bind(function (e) {
                e.preventDefault();
                this.handleAddModel();
            }, this);
            this.$el.find(this.selectors.addButton).on('click', onAdd);

            var onSave = _.bind(function (e) {
                e.preventDefault();
                var id = $(e.currentTarget).data('id');
                this.handleSaveModel(id);
            }, this);
            this.$el.find(this.selectors.saveButton).on('click', onSave);

            var onCancel = _.bind(function (e) {
                e.preventDefault();
                this.handleCancelButton();
            }, this);
            this.$el.find(this.selectors.cancelButton).on('click', onCancel);
        },

        initColumnSorting: function () {
            this.getContainer().sortable({
                cursor: 'move',
                delay : 100,
                opacity: 0.7,
                revert: 10,
                axis: 'y',
                containment: ".query-designer-grid-container",
                items: 'tr',
                helper: function (e, ui) {
                    ui.children().each(function () {
                        $(this).width($(this).width());
                    });
                    return ui;
                },
                stop: _.bind(function(e, ui) {
                    this.syncCollectionWithUi();
                }, this)
            }).disableSelection();
        },

        getCollection: function() {
            return this.options.collection;
        },

        getContainer: function() {
            return this.$el.find(this.selectors.itemContainer);
        },

        changeEntity: function (entityName) {
            this.options.entityName = entityName;
            this.getCollection().reset();
        },

        initModel: function (model, index) {
            model.set('id', _.uniqueId('designer'));
        },

        addModel: function(model) {
            this.initModel(model, this.getCollection().size());
            this.getCollection().add(model);
        },

        deleteModel: function(model) {
            this.getCollection().remove(model);
        },

        onModelAdded: function(model) {
            var item = $(this.itemTemplate(this.prepareItemTemplateData(model)));
            this.bindItemActions(item);
            this.getContainer().append(item);
            this.trigger('collection:change');
        },

        onModelChanged: function(model) {
            var item = $(this.itemTemplate(this.prepareItemTemplateData(model)));
            this.bindItemActions(item);
            this.getContainer().find('[data-id="' + model.id + '"]').outerHTML(item);
            this.trigger('collection:change');
        },

        onModelDeleted: function(model) {
            this.getContainer().find('[data-id="' + model.id + '"]').remove();
            this.trigger('collection:change');
        },

        onResetCollection: function () {
            this.getContainer().empty();
            this.resetForm();
            this.getCollection().each(_.bind(function (model, index) {
                this.initModel(model, index);
                var item = $(this.itemTemplate(this.prepareItemTemplateData(model)));
                this.bindItemActions(item);
                this.getContainer().append(item);
            }, this));
            this.trigger('collection:change');
        },

        handleAddModel: function() {
            this.beforeFormSubmit();
            var model = this.createNewModel();
            if (this.validateFormData()) {
                var data = this.getFormData();
                this.clearFormData();
                model.set(data);
                this.addModel(model);
            }
        },

        handleSaveModel: function(modelId) {
            this.beforeFormSubmit();
            var model = this.getCollection().get(modelId);
            if (this.validateFormData()) {
                model.set(this.getFormData());
                this.resetForm();
            }
        },

        handleDeleteModel: function(modelId) {
            var model = this.getCollection().get(modelId);
            if (this.$el.find(this.selectors.saveButton).data('id') == modelId) {
                this.resetForm();
            }
            this.deleteModel(model);
        },

        handleCancelButton: function() {
            this.resetForm();
        },

        updateColumnSelector: function (columns) {
            this.columnSelector.changeEntity(this.options.entityName, columns);
        },

        prepareItemTemplateData: function (model) {
            var data = model.toJSON();
            _.each(data, _.bind(function (value, name) {
                data[name] = this.getFieldLabel(name, value);
            }, this));
            return data;
        },

        toggleFormButtons: function (modelId) {
            if (_.isNull(modelId)) {
                modelId = '';
            }
            var addButton = this.$el.find(this.selectors.addButton);
            var saveButton = this.$el.find(this.selectors.saveButton);
            var cancelButton = this.$el.find(this.selectors.cancelButton);
            saveButton.data('id', modelId);
            if (modelId == '') {
                cancelButton.hide();
                saveButton.hide();
                addButton.show();
            } else {
                addButton.hide();
                cancelButton.show();
                saveButton.show();
            }
        },

        bindItemActions: function (item) {
            // bind edit button
            var onEdit = _.bind(function (e) {
                e.preventDefault();
                var el = $(e.currentTarget);
                var id = el.closest('[data-id]').data('id');
                var model = this.getCollection().get(id);
                this.setFormData(model.attributes);
                this.toggleFormButtons(id);
            }, this);
            item.find(this.selectors.editButton).on('click', onEdit);

            // bind delete button
            var onDelete = _.bind(function (e) {
                e.preventDefault();
                var el = $(e.currentTarget);
                var id = el.closest('[data-id]').data('id');
                var confirm = new DeleteConfirmation({
                    content: el.data('message')
                });
                confirm.on('ok', _.bind(this.handleDeleteModel, this, id));
                confirm.open();
            }, this);
            item.find(this.selectors.deleteButton).on('click', onDelete);
        },

        syncCollectionWithUi: function () {
            var collectionChanged = false;
            var collection = this.getCollection();
            _.each(this.getContainer().find('tr'), function (el, index) {
                var uiId = $(el).data('id');
                var model = collection.at(index);
                if (uiId !== model.id) {
                    var anotherModel = collection.get(uiId);
                    var anotherIndex = collection.indexOf(anotherModel);
                    collection.remove(model, {silent: true});
                    collection.remove(anotherModel, {silent: true});
                    if (index < anotherIndex) {
                        collection.add(anotherModel, {silent: true, at: index});
                        collection.add(model, {silent: true, at: anotherIndex});
                    } else {
                        collection.add(model, {silent: true, at: anotherIndex});
                        collection.add(anotherModel, {silent: true, at: index});
                    }
                    collectionChanged = true;
                }
            }, this);
            if (collectionChanged) {
                this.trigger('collection:change');
            }
        },

        resetForm: function () {
            this.clearFormData();
            this.toggleFormButtons(null);
        },

        beforeFormSubmit: function () {
        },

        validateFormData: function () {
            var isValid = true;
            this.iterateFormData(_.bind(function (name, el) {
                FormValidation.removeFieldErrors(el);
                var msg = this.validateFormField(name, el);
                if (!_.isNull(msg)) {
                    FormValidation.addFieldErrors(el, __('This value should not be blank.'));
                    isValid = false;
                }
            }, this));

            return isValid;
        },

        validateFormField: function (name, el) {
            if (el.is('[required]')) {
                var value = el.val();
                if ('' === value) {
                    return __('This value should not be blank.');
                }
            }
            return null;
        },

        getFormData: function () {
            var data = {};
            this.iterateFormData(_.bind(function (name, field) {
                data[name] = this.getFormFieldValue(name, field);
            }, this));

            return data;
        },

        getFormFieldValue: function (name, field) {
            return field.val();
        },

        clearFormData: function () {
            this.iterateFormData(function (name, field) {
                field.val('').trigger('change');
            });
        },

        setFormData: function (data) {
            this.iterateFormData(_.bind(function (name, field) {
                this.setFormFieldValue(name, field, data[name]);
                field.trigger('change');
            }, this));
        },

        setFormFieldValue: function (name, field, value) {
            field.val(value);
        },

        iterateFormData: function (callback) {
            _.each(this.fieldNames, _.bind(function (name) {
                var field = this.findFormField(name);
                if (field.length === 1) {
                    callback(name, field);
                }
            }, this));
        },

        findFormField: function (name) {
            return this.form.find('[name$="\\[' + name + '\\]"]');
        },

        createNewModel: function () {
            var modelClass = this.getCollection().model;
            return new modelClass();
        },

        getFieldApplicableConditions: function (item) {
            var result = {
                parent_entity: null,
                entity: this.options.entityName,
                field: item.val()
            };
            var chain = result.field.split(',');
            if (_.size(chain) > 1) {
                var field = _.last(chain).split('::');
                result.parent_entity = result.entity;
                result.entity = _.first(field);
                result.field = _.last(field);
                if (_.size(chain) > 2) {
                    var parentField = chain[_.size(chain) - 2].split('::');
                    result.parent_entity = _.first(parentField);
                }
            }
            _.extend(result, _.pick(item.data(), ['type', 'identifier']));
            return result;
        },

        addFieldLabelGetter: function (callback) {
            if (_.isNull(this.fieldLabelGetters)) {
                this.fieldLabelGetters = [];
            }
            this.fieldLabelGetters.unshift(callback);
        },

        getFieldLabel: function (name, value) {
            var result = null;
            var field = this.findFormField(name);
            if (field.length == 1) {
                for (var i = 0; i < this.fieldLabelGetters.length; i++) {
                    var callback = this.fieldLabelGetters[i];
                    result = callback.call(this, field, name, value);
                    if (result !== null) {
                        break;
                    }
                }
            }
            return (result !== null ? result : value);
        },

        getSelectFieldLabel: function (field, name, value) {
            if (field.get(0).tagName.toLowerCase() == 'select') {
                var opt = util.findSelectOption(field, value);
                if (opt.length === 1) {
                    return opt.text();
                }
            }
            return null;
        },

        getColumnFieldLabel: function (field, name, value) {
            if (field.attr('name') == this.columnSelector.$el.attr('name')) {
                return this.columnSelector.getLabel(value);
            }
            return null;
        }
    });
});
