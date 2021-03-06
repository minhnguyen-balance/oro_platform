/* global define */
define(['underscore', 'backbone', 'oro/translator', 'oro/datagrid/pagination-input',
    'oro/datagrid/page-size', 'oro/datagrid/actions-panel'],
function(_, Backbone, __, PaginationInput, PageSize, ActionsPanel) {
    'use strict';

    var $ = Backbone.$;

    /**
     * Datagrid toolbar widget
     *
     * @export oro/datagrid/toolbar
     * @class   oro.datagrid.Toolbar
     * @extends Backbone.View
     */
    return Backbone.View.extend({
        /** @property */
        template: '#template-datagrid-toolbar',

        /** @property */
        pagination: PaginationInput,

        /** @property */
        pageSize: PageSize,

        /** @property */
        actionsPanel: ActionsPanel,

        /** @property */
        massActionsPanel: ActionsPanel,

        /**
         * Initializer.
         *
         * @param {Object} options
         * @param {Backbone.Collection} options.collection
         * @param {Array} options.actions List of actions
         * @throws {TypeError} If "collection" is undefined
         */
        initialize: function (options) {
            options = options || {};

            if (!options.collection) {
                throw new TypeError("'collection' is required");
            }

            this.collection = options.collection;

            this.pagination = new this.pagination(_.extend({}, options.pagination, { collection: this.collection }));

            options.pageSize = options.pageSize || {};
            this.pageSize = new this.pageSize(_.extend({}, options.pageSize, { collection: this.collection }));

            this.actionsPanel = new this.actionsPanel(_.extend({}, options.actionsPanel));
            if (options.actions) {
                this.actionsPanel.setActions(options.actions);
            }

            if (options.enable == false) {
                this.disable();
            }
            if (options.hide == true) {
                this.hide();
            }

            this.massActionsPanel = new this.massActionsPanel();
            if (options.massActions) {
                this.massActionsPanel.setActions(options.massActions);
            }

            this.template = _.template($(options.template || this.template).html());

            Backbone.View.prototype.initialize.call(this, options);
        },

        /**
         * Enable toolbar
         *
         * @return {*}
         */
        enable: function() {
            this.pagination.enable();
            this.pageSize.enable();
            this.actionsPanel.enable();
            this.massActionsPanel.enable();
            return this;
        },

        /**
         * Disable toolbar
         *
         * @return {*}
         */
        disable: function() {
            this.pagination.disable();
            this.pageSize.disable();
            this.actionsPanel.disable();
            this.massActionsPanel.disable();
            return this;
        },

        /**
         * Hide toolbar
         *
         * @return {*}
         */
        hide: function() {
            this.$el.hide();
            return this;
        },

        /**
         * Render toolbar with pager and other views
         */
        render: function() {
            this.$el.empty();
            this.$el.append(this.template());
            var $pagination = this.pagination.render().$el.attr('class', this.$('.pagination').attr('class'));

            this.$('.pagination').replaceWith($pagination);
            this.$('.page-size').append(this.pageSize.render().$el);
            this.$('.actions-panel').append(this.actionsPanel.render().$el);
            this.$('.mass-actions-panel').append(this.massActionsPanel.render().$el);

            return this;
        }
    });
});
