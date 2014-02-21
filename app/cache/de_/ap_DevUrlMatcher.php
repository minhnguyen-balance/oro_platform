<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * ap_DevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class ap_DevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

        }

        // nelmio_api_doc_index
        if (rtrim($pathinfo, '/') === '/api/doc') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_nelmio_api_doc_index;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'nelmio_api_doc_index');
            }

            return array (  '_controller' => 'Nelmio\\ApiDocBundle\\Controller\\ApiDocController::indexAction',  '_route' => 'nelmio_api_doc_index',);
        }
        not_nelmio_api_doc_index:

        // fos_js_routing_js
        if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_js_routing_js')), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',));
        }

        // _imagine_avatar_med
        if (0 === strpos($pathinfo, '/media/cache/avatar_med') && preg_match('#^/media/cache/avatar_med/(?P<path>.+)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not__imagine_avatar_med;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => '_imagine_avatar_med')), array (  '_controller' => 'liip_imagine.controller:filterAction',  'filter' => 'avatar_med',));
        }
        not__imagine_avatar_med:

        // oro_default
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'oro_default');
            }

            return array (  '_controller' => 'Oro\\Bundle\\DashboardBundle\\Controller\\DashboardController::indexAction',  '_route' => 'oro_default',);
        }

        // oro_security_access_levels
        if (0 === strpos($pathinfo, '/security/acl-access-levels') && preg_match('#^/security/acl\\-access\\-levels/(?P<oid>\\w+:[\\w\\(\\)]+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_security_access_levels')), array (  '_controller' => 'Oro\\Bundle\\SecurityBundle\\Controller\\AclPermissionController::aclAccessLevelsAction',));
        }

        if (0 === strpos($pathinfo, '/ui')) {
            // oro_ui_index
            if ($pathinfo === '/ui') {
                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:index.html.twig',  '_route' => 'oro_ui_index',);
            }

            if (0 === strpos($pathinfo, '/ui/1column')) {
                // oro_ui_1column
                if ($pathinfo === '/ui/1column') {
                    return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:oneColumn.html.twig',  '_route' => 'oro_ui_1column',);
                }

                if (0 === strpos($pathinfo, '/ui/1column-')) {
                    // oro_ui_1column_menu
                    if ($pathinfo === '/ui/1column-menu') {
                        return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:oneColumnMenu.html.twig',  '_route' => 'oro_ui_1column_menu',);
                    }

                    // oro_ui_1column_toolbar
                    if ($pathinfo === '/ui/1column-toolbar') {
                        return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:oneColumnWithToolbar.html.twig',  '_route' => 'oro_ui_1column_toolbar',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/ui/2columns-')) {
                // oro_ui_2columns_left
                if ($pathinfo === '/ui/2columns-left') {
                    return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:twoColumnLeft.html.twig',  '_route' => 'oro_ui_2columns_left',);
                }

                // oro_ui_2columns_right
                if ($pathinfo === '/ui/2columns-right') {
                    return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:twoColumnRight.html.twig',  '_route' => 'oro_ui_2columns_right',);
                }

            }

            // oro_ui_3columns
            if ($pathinfo === '/ui/3columns') {
                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:threeColumn.html.twig',  '_route' => 'oro_ui_3columns',);
            }

            // oro_ui_forgot_password
            if ($pathinfo === '/ui/forgot-password') {
                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:forgotPassword.html.twig',  '_route' => 'oro_ui_forgot_password',);
            }

            // oro_ui_login
            if ($pathinfo === '/ui/login') {
                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:loginPage.html.twig',  '_route' => 'oro_ui_login',);
            }

            // oro_ui_registration
            if ($pathinfo === '/ui/registration') {
                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:registrationPage.html.twig',  '_route' => 'oro_ui_registration',);
            }

            // oro_ui_404
            if ($pathinfo === '/ui/404') {
                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:Page404.html.twig',  '_route' => 'oro_ui_404',);
            }

            // oro_ui_503
            if ($pathinfo === '/ui/503') {
                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:Page503.html.twig',  '_route' => 'oro_ui_503',);
            }

            // oro_ui_form_elements
            if ($pathinfo === '/ui/form-elements') {
                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:formElements.html.twig',  '_route' => 'oro_ui_form_elements',);
            }

            // oro_ui_messages
            if ($pathinfo === '/ui/messages') {
                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:systemMessages.html.twig',  '_route' => 'oro_ui_messages',);
            }

            // oro_ui_buttons
            if ($pathinfo === '/ui/buttons') {
                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:buttonsPage.html.twig',  '_route' => 'oro_ui_buttons',);
            }

            // oro_ui_tables
            if ($pathinfo === '/ui/tables') {
                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:tablesPage.html.twig',  '_route' => 'oro_ui_tables',);
            }

            // oro_ui_general_elements
            if ($pathinfo === '/ui/general-elements') {
                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:generalElements.html.twig',  '_route' => 'oro_ui_general_elements',);
            }

            // oro_ui_dialog_styled
            if ($pathinfo === '/ui/dialog-styled') {
                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:dialogStyledPage.html.twig',  '_route' => 'oro_ui_dialog_styled',);
            }

            if (0 === strpos($pathinfo, '/ui/grid-page')) {
                // oro_ui_grid_page
                if ($pathinfo === '/ui/grid-page') {
                    return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:gridPage.html.twig',  '_route' => 'oro_ui_grid_page',);
                }

                // oro_ui_grid_without_bar_page
                if ($pathinfo === '/ui/grid-page-withoutabr') {
                    return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:gridPageWithoutBar.html.twig',  '_route' => 'oro_ui_grid_without_bar_page',);
                }

            }

            // oro_ui_record_edit
            if ($pathinfo === '/ui/record-edit') {
                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:RecordEdit.html.twig',  '_route' => 'oro_ui_record_edit',);
            }

            // oro_ui_title_bar
            if ($pathinfo === '/ui/entity-title-bar') {
                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:EntityTitleBar.html.twig',  '_route' => 'oro_ui_title_bar',);
            }

            // oro_ui_form_horizontal
            if ($pathinfo === '/ui/form-horizontal') {
                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:formHorizontal.html.twig',  '_route' => 'oro_ui_form_horizontal',);
            }

        }

        if (0 === strpos($pathinfo, '/entity')) {
            // oro_entity_index
            if (preg_match('#^/entity(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entity_index')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\EntityBundle\\Controller\\EntitiesController::indexAction',));
            }

            // oro_entity_detailed
            if (0 === strpos($pathinfo, '/entity/detailed') && preg_match('#^/entity/detailed(?:/(?P<id>[^/]++)(?:/(?P<className>[^/]++)(?:/(?P<fieldName>[^/]++))?)?)?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entity_detailed')), array (  'id' => 0,  'className' => '',  'fieldName' => '',  '_controller' => 'Oro\\Bundle\\EntityBundle\\Controller\\EntitiesController::detailedAction',));
            }

            // oro_entity_relation
            if (0 === strpos($pathinfo, '/entity/relation') && preg_match('#^/entity/relation(?:/(?P<id>[^/]++)(?:/(?P<className>[^/]++)(?:/(?P<fieldName>[^/]++))?)?)?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entity_relation')), array (  'id' => 0,  'className' => '',  'fieldName' => '',  '_controller' => 'Oro\\Bundle\\EntityBundle\\Controller\\EntitiesController::relationAction',));
            }

            // oro_entity_view
            if (0 === strpos($pathinfo, '/entity/view') && preg_match('#^/entity/view/(?P<entity_id>[^/]++)/item(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entity_view')), array (  'entity_id' => 0,  'id' => 0,  '_controller' => 'Oro\\Bundle\\EntityBundle\\Controller\\EntitiesController::viewAction',));
            }

            // oro_entity_update
            if (0 === strpos($pathinfo, '/entity/update') && preg_match('#^/entity/update/(?P<entity_id>[^/]++)/item(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entity_update')), array (  'entity_id' => 0,  'id' => 0,  '_controller' => 'Oro\\Bundle\\EntityBundle\\Controller\\EntitiesController::updateAction',));
            }

            // oro_entity_delete
            if (0 === strpos($pathinfo, '/entity/delete') && preg_match('#^/entity/delete/(?P<entity_id>[^/]++)/item(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entity_delete')), array (  'entity_id' => 0,  'id' => 0,  '_controller' => 'Oro\\Bundle\\EntityBundle\\Controller\\EntitiesController::deleteAction',));
            }

        }

        if (0 === strpos($pathinfo, '/api/rest')) {
            // oro_api_get_entities
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/entities(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_entities;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_entities')), array (  '_controller' => 'Oro\\Bundle\\EntityBundle\\Controller\\Api\\Rest\\EntityController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_entities:

            // oro_api_get_entity_fields
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/entities/(?P<entityName>((\\w+)_)+(\\w+))/fields(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_entity_fields;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_entity_fields')), array (  '_controller' => 'Oro\\Bundle\\EntityBundle\\Controller\\Api\\Rest\\EntityFieldController::getFieldsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_entity_fields:

            // oro_api_get_addresstype
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/addresstypes/(?P<name>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_addresstype;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_addresstype')), array (  '_controller' => 'Oro\\Bundle\\AddressBundle\\Controller\\Api\\Rest\\AddressTypeController::getAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_addresstype:

            // oro_api_get_addresstypes
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/addresstypes(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_addresstypes;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_addresstypes')), array (  '_controller' => 'Oro\\Bundle\\AddressBundle\\Controller\\Api\\Rest\\AddressTypeController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_addresstypes:

            // oro_api_get_countries
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/countries(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_countries;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_countries')), array (  '_controller' => 'Oro\\Bundle\\AddressBundle\\Controller\\Api\\Rest\\CountryController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_countries:

            // oro_api_get_country
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/countries/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_country;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_country')), array (  '_controller' => 'Oro\\Bundle\\AddressBundle\\Controller\\Api\\Rest\\CountryController::getAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_country:

            // oro_api_get_region
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/region(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_region;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_region')), array (  '_controller' => 'Oro\\Bundle\\AddressBundle\\Controller\\Api\\Rest\\RegionController::getAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_region:

            // oro_api_country_get_regions
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/country/regions/(?P<country>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_country_get_regions;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_country_get_regions')), array (  '_controller' => 'Oro\\Bundle\\AddressBundle\\Controller\\Api\\Rest\\CountryRegionsController::getAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_country_get_regions:

        }

        if (0 === strpos($pathinfo, '/calendar')) {
            // oro_calendar_view_default
            if ($pathinfo === '/calendar/default') {
                return array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\CalendarController::viewDefaultAction',  '_route' => 'oro_calendar_view_default',);
            }

            // oro_calendar_view
            if (0 === strpos($pathinfo, '/calendar/view') && preg_match('#^/calendar/view/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_calendar_view')), array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\CalendarController::viewAction',));
            }

        }

        // oro_calendar_dashboard_my_calendar
        if (0 === strpos($pathinfo, '/dashboard/my_calendar') && preg_match('#^/dashboard/my_calendar/(?P<widget>[\\w_-]+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_calendar_dashboard_my_calendar')), array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\Dashboard\\DashboardController::myCalendarAction',));
        }

        if (0 === strpos($pathinfo, '/api/rest')) {
            // oro_api_delete_calendar_connections
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/calendars/(?P<id>[^/]++)/connections/(?P<connectedId>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_oro_api_delete_calendar_connections;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_calendar_connections')), array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\Api\\Rest\\CalendarConnectionController::deleteConnectionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_delete_calendar_connections:

            // oro_api_get_calendar_connections
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/calendars/(?P<id>\\d+)/connections(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_calendar_connections;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_calendar_connections')), array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\Api\\Rest\\CalendarConnectionController::getConnectionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_calendar_connections:

            // oro_api_post_calendar_connections
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/calendars/(?P<id>[^/]++)/connections(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_oro_api_post_calendar_connections;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_calendar_connections')), array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\Api\\Rest\\CalendarConnectionController::postConnectionsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_post_calendar_connections:

            // oro_api_delete_calendarevent
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/calendarevents/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_oro_api_delete_calendarevent;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_calendarevent')), array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\Api\\Rest\\CalendarEventController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_delete_calendarevent:

            // oro_api_get_calendarevents
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/calendarevents(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_calendarevents;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_calendarevents')), array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\Api\\Rest\\CalendarEventController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_calendarevents:

            // oro_api_post_calendarevent
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/calendarevents(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_oro_api_post_calendarevent;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_calendarevent')), array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\Api\\Rest\\CalendarEventController::postAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_post_calendarevent:

            // oro_api_put_calendarevent
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/calendarevents/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_oro_api_put_calendarevent;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_put_calendarevent')), array (  '_controller' => 'Oro\\Bundle\\CalendarBundle\\Controller\\Api\\Rest\\CalendarEventController::putAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_put_calendarevent:

        }

        if (0 === strpos($pathinfo, '/c')) {
            // oro_config_configuration_system
            if (0 === strpos($pathinfo, '/config/system') && preg_match('#^/config/system(?:/(?P<activeGroup>[^/]++)(?:/(?P<activeSubGroup>[^/]++))?)?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_config_configuration_system')), array (  'activeGroup' => NULL,  'activeSubGroup' => NULL,  '_controller' => 'Oro\\Bundle\\ConfigBundle\\Controller\\ConfigurationController::systemAction',));
            }

            if (0 === strpos($pathinfo, '/cron/job')) {
                // oro_cron_job_index
                if (rtrim($pathinfo, '/') === '/cron/job') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'oro_cron_job_index');
                    }

                    return array (  '_controller' => 'Oro\\Bundle\\CronBundle\\Controller\\JobController::indexAction',  '_route' => 'oro_cron_job_index',);
                }

                // oro_cron_job_view
                if (0 === strpos($pathinfo, '/cron/job/view') && preg_match('#^/cron/job/view/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_cron_job_view')), array (  '_controller' => 'Oro\\Bundle\\CronBundle\\Controller\\JobController::viewAction',));
                }

                // oro_cron_job_run_daemon
                if ($pathinfo === '/cron/job/run-daemon') {
                    return array (  '_controller' => 'Oro\\Bundle\\CronBundle\\Controller\\JobController::runDaemonAction',  '_route' => 'oro_cron_job_run_daemon',);
                }

                if (0 === strpos($pathinfo, '/cron/job/st')) {
                    // oro_cron_job_stop_daemon
                    if ($pathinfo === '/cron/job/stop-daemon') {
                        return array (  '_controller' => 'Oro\\Bundle\\CronBundle\\Controller\\JobController::stopDaemonAction',  '_route' => 'oro_cron_job_stop_daemon',);
                    }

                    // oro_cron_job_status
                    if ($pathinfo === '/cron/job/status') {
                        return array (  '_controller' => 'Oro\\Bundle\\CronBundle\\Controller\\JobController::statusAction',  '_route' => 'oro_cron_job_status',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/dashboard')) {
            // oro_dashboard_index
            if (0 === strpos($pathinfo, '/dashboard/index') && preg_match('#^/dashboard/index(?:/(?P<name>[\\w_-]*))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_dashboard_index')), array (  'name' => '',  '_controller' => 'Oro\\Bundle\\DashboardBundle\\Controller\\DashboardController::indexAction',));
            }

            // oro_dashboard_widget
            if (0 === strpos($pathinfo, '/dashboard/widget') && preg_match('#^/dashboard/widget/(?P<widget>[\\w_-]+)/(?P<bundle>\\w+)/(?P<name>[\\w_-]+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_dashboard_widget')), array (  '_controller' => 'Oro\\Bundle\\DashboardBundle\\Controller\\DashboardController::widgetAction',));
            }

            // oro_dashboard_itemized_widget
            if (0 === strpos($pathinfo, '/dashboard/itemized_widget') && preg_match('#^/dashboard/itemized_widget/(?P<widget>[\\w_-]+)/(?P<bundle>\\w+)/(?P<name>[\\w_-]+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_dashboard_itemized_widget')), array (  '_controller' => 'Oro\\Bundle\\DashboardBundle\\Controller\\DashboardController::itemizedWidgetAction',));
            }

        }

        if (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/audit')) {
                // oro_dataaudit_index
                if (preg_match('#^/audit(?:/(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_dataaudit_index')), array (  '_format' => 'html',  '_controller' => 'Oro\\Bundle\\DataAuditBundle\\Controller\\AuditController::indexAction',));
                }

                // oro_dataaudit_history
                if (0 === strpos($pathinfo, '/audit/history') && preg_match('#^/audit/history(?:/(?P<entity>[a-zA-Z0-9_]+)(?:/(?P<id>\\d+)(?:/(?P<_format>[^/]++))?)?)?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_dataaudit_history')), array (  'entity' => 'entity',  'id' => 0,  '_format' => 'html',  '_controller' => 'Oro\\Bundle\\DataAuditBundle\\Controller\\AuditController::historyAction',));
                }

            }

            if (0 === strpos($pathinfo, '/api/rest')) {
                // oro_api_get_audit
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/audits/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_audit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_audit')), array (  '_controller' => 'Oro\\Bundle\\DataAuditBundle\\Controller\\Api\\Rest\\AuditController::getAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_audit:

                // oro_api_get_audits
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/audits(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_audits;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_audits')), array (  '_controller' => 'Oro\\Bundle\\DataAuditBundle\\Controller\\Api\\Rest\\AuditController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_audits:

            }

        }

        if (0 === strpos($pathinfo, '/datagrid')) {
            // oro_datagrid_index
            if (preg_match('#^/datagrid/(?P<gridName>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_datagrid_index')), array (  '_controller' => 'Oro\\Bundle\\DataGridBundle\\Controller\\GridController::getAction',));
            }

            // oro_datagrid_mass_action
            if (preg_match('#^/datagrid/(?P<gridName>[^/]++)/massAction/(?P<actionName>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_datagrid_mass_action')), array (  '_controller' => 'Oro\\Bundle\\DataGridBundle\\Controller\\GridController::massActionAction',));
            }

        }

        if (0 === strpos($pathinfo, '/email')) {
            // oro_email_api_rest_emailtemplate_getavailablevariables
            if (rtrim($pathinfo, '/') === '/email') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_email_api_rest_emailtemplate_getavailablevariables;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'oro_email_api_rest_emailtemplate_getavailablevariables');
                }

                return array (  'entityName' => NULL,  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailTemplateController::getAvailableVariablesAction',  '_route' => 'oro_email_api_rest_emailtemplate_getavailablevariables',);
            }
            not_oro_email_api_rest_emailtemplate_getavailablevariables:

            // oro_email_view
            if (0 === strpos($pathinfo, '/email/view') && preg_match('#^/email/view/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_email_view')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::viewAction',));
            }

            // oro_email_email_create
            if ($pathinfo === '/email/create') {
                return array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::createAction',  '_route' => 'oro_email_email_create',);
            }

            // oro_email_body
            if (0 === strpos($pathinfo, '/email/body') && preg_match('#^/email/body/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_email_body')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::bodyAction',));
            }

            // oro_email_attachment
            if (0 === strpos($pathinfo, '/email/attachment') && preg_match('#^/email/attachment/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_email_attachment')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::attachmentAction',));
            }

            if (0 === strpos($pathinfo, '/email/emailtemplate')) {
                // oro_email_emailtemplate_index
                if (preg_match('#^/email/emailtemplate(?:/(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_email_emailtemplate_index')), array (  '_format' => 'html',  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailTemplateController::indexAction',));
                }

                // oro_email_emailtemplate_update
                if (0 === strpos($pathinfo, '/email/emailtemplate/update') && preg_match('#^/email/emailtemplate/update(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_email_emailtemplate_update')), array (  'id' => 0,  'isClone' => false,  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailTemplateController::updateAction',));
                }

                if (0 === strpos($pathinfo, '/email/emailtemplate/c')) {
                    // oro_email_emailtemplate_create
                    if ($pathinfo === '/email/emailtemplate/create') {
                        return array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailTemplateController::createAction',  '_route' => 'oro_email_emailtemplate_create',);
                    }

                    // oro_email_emailtemplate_clone
                    if (0 === strpos($pathinfo, '/email/emailtemplate/clone') && preg_match('#^/email/emailtemplate/clone(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_email_emailtemplate_clone')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailTemplateController::cloneAction',));
                    }

                }

                // oro_email_emailtemplate_preview
                if (0 === strpos($pathinfo, '/email/emailtemplate/preview') && preg_match('#^/email/emailtemplate/preview(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_email_emailtemplate_preview')), array (  'id' => 0,  'emailTemplateId' => false,  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailTemplateController::previewAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/api/rest')) {
            // oro_api_get_email
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/emails/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_email;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_email')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailController::getAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_email:

            // oro_api_get_emails
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/emails(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_emails;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_emails')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_emails:

            // oro_api_delete_emailtemplate
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/emailtemplates/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_oro_api_delete_emailtemplate;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_emailtemplate')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailTemplateController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_delete_emailtemplate:

            // oro_api_get_emailtemplate
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/emailtemplates/(?P<entityName>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_emailtemplate;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_emailtemplate')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailTemplateController::getAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_emailtemplate:

            // oro_api_get_emailtemplate_available_variables
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/emailtemplates/(?P<entityName>(.*))/available/variables(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_emailtemplate_available_variables;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_emailtemplate_available_variables')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailTemplateController::getAvailableVariablesAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_emailtemplate_available_variables:

        }

        if (0 === strpos($pathinfo, '/entity')) {
            if (0 === strpos($pathinfo, '/entity/config')) {
                if (0 === strpos($pathinfo, '/entity/config/audit')) {
                    // oro_entityconfig_audit
                    if (preg_match('#^/entity/config/audit(?:/(?P<entity>[a-zA-Z0-9_]+)(?:/(?P<id>\\d+)(?:/(?P<_format>[^/]++))?)?)?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entityconfig_audit')), array (  'entity' => 'entity',  'id' => 0,  '_format' => 'html',  '_controller' => 'Oro\\Bundle\\EntityConfigBundle\\Controller\\AuditController::auditAction',));
                    }

                    // oro_entityconfig_audit_field
                    if (0 === strpos($pathinfo, '/entity/config/audit_field') && preg_match('#^/entity/config/audit_field(?:/(?P<entity>[a-zA-Z0-9_]+)(?:/(?P<id>\\d+)(?:/(?P<_format>[^/]++))?)?)?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entityconfig_audit_field')), array (  'entity' => 'entity',  'id' => 0,  '_format' => 'html',  '_controller' => 'Oro\\Bundle\\EntityConfigBundle\\Controller\\AuditController::auditFieldAction',));
                    }

                }

                // oro_entityconfig_index
                if (rtrim($pathinfo, '/') === '/entity/config') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'oro_entityconfig_index');
                    }

                    return array (  '_controller' => 'Oro\\Bundle\\EntityConfigBundle\\Controller\\ConfigController::indexAction',  '_route' => 'oro_entityconfig_index',);
                }

                // oro_entityconfig_update
                if (0 === strpos($pathinfo, '/entity/config/update') && preg_match('#^/entity/config/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entityconfig_update')), array (  '_controller' => 'Oro\\Bundle\\EntityConfigBundle\\Controller\\ConfigController::updateAction',));
                }

                // oro_entityconfig_view
                if (0 === strpos($pathinfo, '/entity/config/view') && preg_match('#^/entity/config/view/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entityconfig_view')), array (  '_controller' => 'Oro\\Bundle\\EntityConfigBundle\\Controller\\ConfigController::viewAction',));
                }

                if (0 === strpos($pathinfo, '/entity/config/field')) {
                    // oro_entityconfig_fields
                    if (0 === strpos($pathinfo, '/entity/config/fields') && preg_match('#^/entity/config/fields(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entityconfig_fields')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\EntityConfigBundle\\Controller\\ConfigController::fieldsAction',));
                    }

                    // oro_entityconfig_field_update
                    if (0 === strpos($pathinfo, '/entity/config/field/update') && preg_match('#^/entity/config/field/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entityconfig_field_update')), array (  '_controller' => 'Oro\\Bundle\\EntityConfigBundle\\Controller\\ConfigController::fieldUpdateAction',));
                    }

                    // oro_entityconfig_field_search
                    if (0 === strpos($pathinfo, '/entity/config/field/search') && preg_match('#^/entity/config/field/search(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entityconfig_field_search')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\EntityConfigBundle\\Controller\\ConfigController::fieldSearchAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/entity/config/widget')) {
                    // oro_entityconfig_widget_info
                    if (0 === strpos($pathinfo, '/entity/config/widget/info') && preg_match('#^/entity/config/widget/info/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entityconfig_widget_info')), array (  '_controller' => 'Oro\\Bundle\\EntityConfigBundle\\Controller\\ConfigController::infoAction',));
                    }

                    // oro_entityconfig_widget_unique_keys
                    if (0 === strpos($pathinfo, '/entity/config/widget/unique_keys') && preg_match('#^/entity/config/widget/unique_keys/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entityconfig_widget_unique_keys')), array (  '_controller' => 'Oro\\Bundle\\EntityConfigBundle\\Controller\\ConfigController::uniqueKeysAction',));
                    }

                    // oro_entityconfig_widget_entity_fields
                    if (0 === strpos($pathinfo, '/entity/config/widget/entity_fields') && preg_match('#^/entity/config/widget/entity_fields/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entityconfig_widget_entity_fields')), array (  '_controller' => 'Oro\\Bundle\\EntityConfigBundle\\Controller\\ConfigController::entityFieldsAction',));
                    }

                }

            }

            if (0 === strpos($pathinfo, '/entity/extend')) {
                // oro_entityextend_update
                if (0 === strpos($pathinfo, '/entity/extend/update') && preg_match('#^/entity/extend/update(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entityextend_update')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\EntityExtendBundle\\Controller\\ApplyController::updateAction',));
                }

                if (0 === strpos($pathinfo, '/entity/extend/entity')) {
                    // oro_entityextend_entity_unique_key
                    if (0 === strpos($pathinfo, '/entity/extend/entity/unique-key') && preg_match('#^/entity/extend/entity/unique\\-key(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entityextend_entity_unique_key')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\EntityExtendBundle\\Controller\\ConfigEntityGridController::uniqueAction',));
                    }

                    // oro_entityextend_entity_create
                    if ($pathinfo === '/entity/extend/entity/create') {
                        return array (  '_controller' => 'Oro\\Bundle\\EntityExtendBundle\\Controller\\ConfigEntityGridController::createAction',  '_route' => 'oro_entityextend_entity_create',);
                    }

                    // oro_entityextend_entity_remove
                    if (0 === strpos($pathinfo, '/entity/extend/entity/remove') && preg_match('#^/entity/extend/entity/remove(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entityextend_entity_remove')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\EntityExtendBundle\\Controller\\ConfigEntityGridController::removeAction',));
                    }

                    // oro_entityextend_entity_unremove
                    if (0 === strpos($pathinfo, '/entity/extend/entity/unremove') && preg_match('#^/entity/extend/entity/unremove(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entityextend_entity_unremove')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\EntityExtendBundle\\Controller\\ConfigEntityGridController::unremoveAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/entity/extend/field')) {
                    // oro_entityextend_field_create
                    if (0 === strpos($pathinfo, '/entity/extend/field/create') && preg_match('#^/entity/extend/field/create(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entityextend_field_create')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\EntityExtendBundle\\Controller\\ConfigFieldGridController::createAction',));
                    }

                    // oro_entityextend_field_update
                    if (0 === strpos($pathinfo, '/entity/extend/field/update') && preg_match('#^/entity/extend/field/update(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entityextend_field_update')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\EntityExtendBundle\\Controller\\ConfigFieldGridController::updateAction',));
                    }

                    // oro_entityextend_field_remove
                    if (0 === strpos($pathinfo, '/entity/extend/field/remove') && preg_match('#^/entity/extend/field/remove(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entityextend_field_remove')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\EntityExtendBundle\\Controller\\ConfigFieldGridController::removeAction',));
                    }

                    // oro_entityextend_field_unremove
                    if (0 === strpos($pathinfo, '/entity/extend/field/unremove') && preg_match('#^/entity/extend/field/unremove(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entityextend_field_unremove')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\EntityExtendBundle\\Controller\\ConfigFieldGridController::unremoveAction',));
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/autocomplete')) {
            // oro_form_autocomplete_config
            if ($pathinfo === '/autocomplete/config') {
                return array (  '_controller' => 'Oro\\Bundle\\FormBundle\\Controller\\AutocompleteController::configAction',  '_route' => 'oro_form_autocomplete_config',);
            }

            // oro_form_autocomplete_search
            if ($pathinfo === '/autocomplete/search') {
                return array (  '_controller' => 'Oro\\Bundle\\FormBundle\\Controller\\AutocompleteController::searchAction',  '_route' => 'oro_form_autocomplete_search',);
            }

        }

        if (0 === strpos($pathinfo, '/import')) {
            // oro_importexport_import_form
            if ($pathinfo === '/import') {
                return array (  '_controller' => 'Oro\\Bundle\\ImportExportBundle\\Controller\\ImportExportController::importFormAction',  '_route' => 'oro_importexport_import_form',);
            }

            // oro_importexport_import_validate
            if (0 === strpos($pathinfo, '/import/validate') && preg_match('#^/import/validate/(?P<processorAlias>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_importexport_import_validate')), array (  '_controller' => 'Oro\\Bundle\\ImportExportBundle\\Controller\\ImportExportController::importValidateAction',));
            }

            // oro_importexport_import_process
            if (0 === strpos($pathinfo, '/import/process') && preg_match('#^/import/process/(?P<processorAlias>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_importexport_import_process')), array (  '_controller' => 'Oro\\Bundle\\ImportExportBundle\\Controller\\ImportExportController::importProcessAction',));
            }

        }

        if (0 === strpos($pathinfo, '/export')) {
            // oro_importexport_export_instant
            if (0 === strpos($pathinfo, '/export/instant') && preg_match('#^/export/instant/(?P<processorAlias>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_importexport_export_instant')), array (  '_controller' => 'Oro\\Bundle\\ImportExportBundle\\Controller\\ImportExportController::instantExportAction',));
            }

            // oro_importexport_export_download
            if (0 === strpos($pathinfo, '/export/download') && preg_match('#^/export/download/(?P<fileName>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_importexport_export_download')), array (  '_controller' => 'Oro\\Bundle\\ImportExportBundle\\Controller\\ImportExportController::downloadExportResultAction',));
            }

        }

        if (0 === strpos($pathinfo, '/i')) {
            // oro_importexport_error_log
            if (0 === strpos($pathinfo, '/import_export/error') && preg_match('#^/import_export/error/(?P<jobCode>[^/\\.]++)\\.log$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_importexport_error_log')), array (  '_controller' => 'Oro\\Bundle\\ImportExportBundle\\Controller\\ImportExportController::errorLogAction',));
            }

            if (0 === strpos($pathinfo, '/installer')) {
                // oro_installer_flow
                if ($pathinfo === '/installer') {
                    return array (  '_controller' => 'sylius.controller.process:startAction',  'scenarioAlias' => 'oro_installer',  '_route' => 'oro_installer_flow',);
                }

                if (0 === strpos($pathinfo, '/installer/flow')) {
                    // sylius_flow_start
                    if (preg_match('#^/installer/flow/(?P<scenarioAlias>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_flow_start')), array (  '_controller' => 'sylius.controller.process:startAction',));
                    }

                    // sylius_flow_display
                    if (preg_match('#^/installer/flow/(?P<scenarioAlias>[^/]++)/(?P<stepName>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_flow_display')), array (  '_controller' => 'sylius.controller.process:displayAction',));
                    }

                    // sylius_flow_forward
                    if (preg_match('#^/installer/flow/(?P<scenarioAlias>[^/]++)/(?P<stepName>[^/]++)/forward$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_flow_forward')), array (  '_controller' => 'sylius.controller.process:forwardAction',));
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/channel')) {
            // oro_integration_channel_index
            if (rtrim($pathinfo, '/') === '/channel') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'oro_integration_channel_index');
                }

                return array (  '_controller' => 'Oro\\Bundle\\IntegrationBundle\\Controller\\ChannelController::indexAction',  '_route' => 'oro_integration_channel_index',);
            }

            // oro_integration_channel_create
            if ($pathinfo === '/channel/create') {
                return array (  '_controller' => 'Oro\\Bundle\\IntegrationBundle\\Controller\\ChannelController::createAction',  '_route' => 'oro_integration_channel_create',);
            }

            // oro_integration_channel_update
            if (0 === strpos($pathinfo, '/channel/update') && preg_match('#^/channel/update/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_integration_channel_update')), array (  '_controller' => 'Oro\\Bundle\\IntegrationBundle\\Controller\\ChannelController::updateAction',));
            }

            // oro_integration_channel_schedule
            if (0 === strpos($pathinfo, '/channel/schedule') && preg_match('#^/channel/schedule/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_integration_channel_schedule')), array (  '_controller' => 'Oro\\Bundle\\IntegrationBundle\\Controller\\ChannelController::scheduleAction',));
            }

        }

        // oro_api_delete_channel
        if (0 === strpos($pathinfo, '/api/rest') && preg_match('#^/api/rest/(?P<version>latest|v1)/channels/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'DELETE') {
                $allow[] = 'DELETE';
                goto not_oro_api_delete_channel;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_channel')), array (  '_controller' => 'Oro\\Bundle\\IntegrationBundle\\Controller\\Api\\Rest\\ChannelController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
        }
        not_oro_api_delete_channel:

        if (0 === strpos($pathinfo, '/notification/email')) {
            // oro_notification_emailnotification_index
            if (preg_match('#^/notification/email(?:/(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_notification_emailnotification_index')), array (  '_format' => 'html',  '_controller' => 'Oro\\Bundle\\NotificationBundle\\Controller\\EmailNotificationController::indexAction',));
            }

            // oro_notification_emailnotification_update
            if (0 === strpos($pathinfo, '/notification/email/update') && preg_match('#^/notification/email/update(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_notification_emailnotification_update')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\NotificationBundle\\Controller\\EmailNotificationController::updateAction',));
            }

            // oro_notification_emailnotification_create
            if ($pathinfo === '/notification/email/create') {
                return array (  '_controller' => 'Oro\\Bundle\\NotificationBundle\\Controller\\EmailNotificationController::createAction',  '_route' => 'oro_notification_emailnotification_create',);
            }

        }

        // oro_api_delete_emailnotication
        if (0 === strpos($pathinfo, '/api/rest') && preg_match('#^/api/rest/(?P<version>latest|v1)/emailnotications/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'DELETE') {
                $allow[] = 'DELETE';
                goto not_oro_api_delete_emailnotication;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_emailnotication')), array (  '_controller' => 'Oro\\Bundle\\NotificationBundle\\Controller\\Api\\Rest\\EmailNotificationController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
        }
        not_oro_api_delete_emailnotication:

        if (0 === strpos($pathinfo, '/organization/business_unit')) {
            // oro_business_unit_create
            if ($pathinfo === '/organization/business_unit/create') {
                return array (  '_controller' => 'Oro\\Bundle\\OrganizationBundle\\Controller\\BusinessUnitController::createAction',  '_route' => 'oro_business_unit_create',);
            }

            // oro_business_unit_view
            if (0 === strpos($pathinfo, '/organization/business_unit/view') && preg_match('#^/organization/business_unit/view/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_business_unit_view')), array (  '_controller' => 'Oro\\Bundle\\OrganizationBundle\\Controller\\BusinessUnitController::viewAction',));
            }

            // oro_business_unit_update
            if (0 === strpos($pathinfo, '/organization/business_unit/update') && preg_match('#^/organization/business_unit/update(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_business_unit_update')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\OrganizationBundle\\Controller\\BusinessUnitController::updateAction',));
            }

            // oro_business_unit_index
            if (preg_match('#^/organization/business_unit(?:/(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_business_unit_index')), array (  '_format' => 'html',  '_controller' => 'Oro\\Bundle\\OrganizationBundle\\Controller\\BusinessUnitController::indexAction',));
            }

            if (0 === strpos($pathinfo, '/organization/business_unit/widget')) {
                // oro_business_unit_widget_info
                if (0 === strpos($pathinfo, '/organization/business_unit/widget/info') && preg_match('#^/organization/business_unit/widget/info/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_business_unit_widget_info')), array (  '_controller' => 'Oro\\Bundle\\OrganizationBundle\\Controller\\BusinessUnitController::infoAction',));
                }

                // oro_business_unit_widget_users
                if (0 === strpos($pathinfo, '/organization/business_unit/widget/users') && preg_match('#^/organization/business_unit/widget/users/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_business_unit_widget_users')), array (  '_controller' => 'Oro\\Bundle\\OrganizationBundle\\Controller\\BusinessUnitController::usersAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/api/rest')) {
            // oro_api_delete_businessunit
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/businessunits/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_oro_api_delete_businessunit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_businessunit')), array (  '_controller' => 'Oro\\Bundle\\OrganizationBundle\\Controller\\Api\\Rest\\BusinessUnitController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_delete_businessunit:

            // oro_api_get_businessunit
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/businessunits/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_businessunit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_businessunit')), array (  '_controller' => 'Oro\\Bundle\\OrganizationBundle\\Controller\\Api\\Rest\\BusinessUnitController::getAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_businessunit:

            // oro_api_get_businessunits
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/businessunits(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_businessunits;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_businessunits')), array (  '_controller' => 'Oro\\Bundle\\OrganizationBundle\\Controller\\Api\\Rest\\BusinessUnitController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_businessunits:

            // oro_api_post_businessunit
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/businessunit(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_oro_api_post_businessunit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_businessunit')), array (  '_controller' => 'Oro\\Bundle\\OrganizationBundle\\Controller\\Api\\Rest\\BusinessUnitController::postAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_post_businessunit:

            // oro_api_put_businessunit
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/businessunits/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_oro_api_put_businessunit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_put_businessunit')), array (  '_controller' => 'Oro\\Bundle\\OrganizationBundle\\Controller\\Api\\Rest\\BusinessUnitController::putAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_put_businessunit:

        }

        if (0 === strpos($pathinfo, '/report')) {
            // oro_report_view
            if (0 === strpos($pathinfo, '/report/view') && preg_match('#^/report/view(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_report_view')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\ReportBundle\\Controller\\ReportController::viewAction',));
            }

            // oro_report_create
            if ($pathinfo === '/report/create') {
                return array (  '_controller' => 'Oro\\Bundle\\ReportBundle\\Controller\\ReportController::createAction',  '_route' => 'oro_report_create',);
            }

            // oro_report_update
            if (0 === strpos($pathinfo, '/report/update') && preg_match('#^/report/update(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_report_update')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\ReportBundle\\Controller\\ReportController::updateAction',));
            }

            // oro_report_index
            if (preg_match('#^/report(?:/(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_report_index')), array (  '_format' => 'html',  '_controller' => 'Oro\\Bundle\\ReportBundle\\Controller\\ReportController::indexAction',));
            }

        }

        // oro_api_delete_report
        if (0 === strpos($pathinfo, '/api/rest') && preg_match('#^/api/rest/(?P<version>latest|v1)/reports/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'DELETE') {
                $allow[] = 'DELETE';
                goto not_oro_api_delete_report;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_report')), array (  '_controller' => 'Oro\\Bundle\\ReportBundle\\Controller\\Api\\Rest\\ReportController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
        }
        not_oro_api_delete_report:

        if (0 === strpos($pathinfo, '/search')) {
            // oro_search_advanced
            if ($pathinfo === '/search/advanced-search') {
                return array (  '_controller' => 'Oro\\Bundle\\SearchBundle\\Controller\\SearchController::ajaxAdvancedSearchAction',  '_route' => 'oro_search_advanced',);
            }

            // oro_search_bar
            if ($pathinfo === '/search/search-bar') {
                return array (  '_controller' => 'Oro\\Bundle\\SearchBundle\\Controller\\SearchController::searchBarAction',  '_route' => 'oro_search_bar',);
            }

            // oro_search_results
            if (rtrim($pathinfo, '/') === '/search') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'oro_search_results');
                }

                return array (  '_controller' => 'Oro\\Bundle\\SearchBundle\\Controller\\SearchController::searchResultsAction',  '_route' => 'oro_search_results',);
            }

        }

        if (0 === strpos($pathinfo, '/api')) {
            if (0 === strpos($pathinfo, '/api/rest')) {
                // oro_api_get_search
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/search(?:\\.(?P<_format>json|html))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_search;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_search')), array (  '_controller' => 'Oro\\Bundle\\SearchBundle\\Controller\\Api\\SearchController::getAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_search:

                // oro_api_get_search_advanced
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/search/advanced(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_search_advanced;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_search_advanced')), array (  '_controller' => 'Oro\\Bundle\\SearchBundle\\Controller\\Api\\SearchAdvancedController::getAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_search_advanced:

                // oro_api_delete_sidebarwidgets
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/sidebarwidgets/(?P<widgetId>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_oro_api_delete_sidebarwidgets;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_sidebarwidgets')), array (  '_controller' => 'Oro\\Bundle\\SidebarBundle\\Controller\\Api\\Rest\\WidgetController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_delete_sidebarwidgets:

                // oro_api_get_sidebarwidgets
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/sidebarwidgets/(?P<placement>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_sidebarwidgets;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_sidebarwidgets')), array (  '_controller' => 'Oro\\Bundle\\SidebarBundle\\Controller\\Api\\Rest\\WidgetController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_sidebarwidgets:

                // oro_api_post_sidebarwidgets
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/sidebarwidgets(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_api_post_sidebarwidgets;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_sidebarwidgets')), array (  '_controller' => 'Oro\\Bundle\\SidebarBundle\\Controller\\Api\\Rest\\WidgetController::postAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_post_sidebarwidgets:

                // oro_api_put_sidebarwidgets
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/sidebarwidgets/(?P<widgetId>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_oro_api_put_sidebarwidgets;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_put_sidebarwidgets')), array (  '_controller' => 'Oro\\Bundle\\SidebarBundle\\Controller\\Api\\Rest\\WidgetController::putAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_put_sidebarwidgets:

                // oro_api_get_sidebars
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/sidebars/(?P<position>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_sidebars;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_sidebars')), array (  '_controller' => 'Oro\\Bundle\\SidebarBundle\\Controller\\Api\\Rest\\SidebarController::getAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_sidebars:

                // oro_api_post_sidebars
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/sidebars(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_api_post_sidebars;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_sidebars')), array (  '_controller' => 'Oro\\Bundle\\SidebarBundle\\Controller\\Api\\Rest\\SidebarController::postAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_post_sidebars:

                // oro_api_put_sidebars
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/sidebars/(?P<stateId>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_oro_api_put_sidebars;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_put_sidebars')), array (  '_controller' => 'Oro\\Bundle\\SidebarBundle\\Controller\\Api\\Rest\\SidebarController::putAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_put_sidebars:

            }

            // _webservice_call
            if (preg_match('#^/api/(?P<webservice>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not__webservice_call;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => '_webservice_call')), array (  '_controller' => 'BeSimple\\SoapBundle\\Controller\\SoapWebServiceController::CallAction',  '_format' => 'soap',));
            }
            not__webservice_call:

            // _webservice_definition
            if (preg_match('#^/api/(?P<webservice>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not__webservice_definition;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => '_webservice_definition')), array (  '_controller' => 'BeSimple\\SoapBundle\\Controller\\SoapWebServiceController::DefinitionAction',  '_format' => 'wsdl',));
            }
            not__webservice_definition:

        }

        if (0 === strpos($pathinfo, '/tag')) {
            // oro_tag_index
            if (preg_match('#^/tag(?:/(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_tag_index')), array (  '_format' => 'html',  '_controller' => 'Oro\\Bundle\\TagBundle\\Controller\\TagController::indexAction',));
            }

            // oro_tag_create
            if ($pathinfo === '/tag/create') {
                return array (  '_controller' => 'Oro\\Bundle\\TagBundle\\Controller\\TagController::createAction',  '_route' => 'oro_tag_create',);
            }

            // oro_tag_update
            if (0 === strpos($pathinfo, '/tag/update') && preg_match('#^/tag/update(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_tag_update')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\TagBundle\\Controller\\TagController::updateAction',));
            }

            // oro_tag_search
            if (0 === strpos($pathinfo, '/tag/search') && preg_match('#^/tag/search(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_tag_search')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\TagBundle\\Controller\\TagController::searchAction',));
            }

        }

        // oro_api_delete_tag
        if (0 === strpos($pathinfo, '/api/rest') && preg_match('#^/api/rest/(?P<version>latest|v1)/tags/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'DELETE') {
                $allow[] = 'DELETE';
                goto not_oro_api_delete_tag;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_tag')), array (  '_controller' => 'Oro\\Bundle\\TagBundle\\Controller\\Api\\Rest\\TagController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
        }
        not_oro_api_delete_tag:

        // oro_translation_jstranslation
        if (0 === strpos($pathinfo, '/js/translation') && preg_match('#^/js/translation/(?P<_locale>[^/\\.]++)\\.js$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_translation_jstranslation')), array (  '_controller' => 'oro_translation.controller:indexAction',));
        }

        if (0 === strpos($pathinfo, '/user')) {
            if (0 === strpos($pathinfo, '/user/group')) {
                // oro_user_group_create
                if ($pathinfo === '/user/group/create') {
                    return array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\GroupController::createAction',  '_route' => 'oro_user_group_create',);
                }

                // oro_user_group_update
                if (0 === strpos($pathinfo, '/user/group/update') && preg_match('#^/user/group/update(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_user_group_update')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\GroupController::updateAction',));
                }

                // oro_user_group_index
                if (preg_match('#^/user/group(?:/(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_user_group_index')), array (  '_format' => 'html',  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\GroupController::indexAction',));
                }

            }

            // oro_user_reset_request
            if ($pathinfo === '/user/reset-request') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_user_reset_request;
                }

                return array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\ResetController::requestAction',  '_route' => 'oro_user_reset_request',);
            }
            not_oro_user_reset_request:

            // oro_user_reset_send_email
            if ($pathinfo === '/user/send-email') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_oro_user_reset_send_email;
                }

                return array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\ResetController::sendEmailAction',  '_route' => 'oro_user_reset_send_email',);
            }
            not_oro_user_reset_send_email:

            // oro_user_reset_check_email
            if ($pathinfo === '/user/check-email') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_user_reset_check_email;
                }

                return array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\ResetController::checkEmailAction',  '_route' => 'oro_user_reset_check_email',);
            }
            not_oro_user_reset_check_email:

            if (0 === strpos($pathinfo, '/user/r')) {
                // oro_user_reset_reset
                if (0 === strpos($pathinfo, '/user/reset') && preg_match('#^/user/reset/(?P<token>\\w+)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_oro_user_reset_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_user_reset_reset')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\ResetController::resetAction',));
                }
                not_oro_user_reset_reset:

                if (0 === strpos($pathinfo, '/user/role')) {
                    // oro_user_role_create
                    if ($pathinfo === '/user/role/create') {
                        return array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\RoleController::createAction',  '_route' => 'oro_user_role_create',);
                    }

                    // oro_user_role_update
                    if (0 === strpos($pathinfo, '/user/role/update') && preg_match('#^/user/role/update(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_user_role_update')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\RoleController::updateAction',));
                    }

                    // oro_user_role_index
                    if (preg_match('#^/user/role(?:/(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_user_role_index')), array (  '_format' => 'html',  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\RoleController::indexAction',));
                    }

                }

            }

            if (0 === strpos($pathinfo, '/user/log')) {
                if (0 === strpos($pathinfo, '/user/login')) {
                    // oro_user_security_login
                    if ($pathinfo === '/user/login') {
                        return array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'oro_user_security_login',);
                    }

                    // oro_user_security_check
                    if ($pathinfo === '/user/login-check') {
                        return array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'oro_user_security_check',);
                    }

                }

                // oro_user_security_logout
                if ($pathinfo === '/user/logout') {
                    return array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'oro_user_security_logout',);
                }

            }

            if (0 === strpos($pathinfo, '/user/status')) {
                // oro_user_status_list
                if (rtrim($pathinfo, '/') === '/user/status') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'oro_user_status_list');
                    }

                    return array (  'limit' => 10,  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\StatusController::indexAction',  '_route' => 'oro_user_status_list',);
                }

                // oro_user_status_create
                if ($pathinfo === '/user/status/create') {
                    return array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\StatusController::createAction',  '_route' => 'oro_user_status_create',);
                }

                // oro_user_status_delete
                if (0 === strpos($pathinfo, '/user/status/delete') && preg_match('#^/user/status/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_user_status_delete')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\StatusController::deleteAction',));
                }

                // oro_user_status_set_current
                if (0 === strpos($pathinfo, '/user/status/set-current') && preg_match('#^/user/status/set\\-current/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_user_status_set_current')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\StatusController::setCurrentStatus',));
                }

                // oro_user_status_clear_current
                if ($pathinfo === '/user/status/clear-current') {
                    return array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\StatusController::clearCurrentStatus',  '_route' => 'oro_user_status_clear_current',);
                }

            }

            // oro_user_view
            if (0 === strpos($pathinfo, '/user/view') && preg_match('#^/user/view/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_user_view')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\UserController::viewAction',));
            }

            if (0 === strpos($pathinfo, '/user/profile')) {
                // oro_user_profile_view
                if ($pathinfo === '/user/profile/view') {
                    return array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\UserController::viewProfileAction',  '_route' => 'oro_user_profile_view',);
                }

                // oro_user_profile_update
                if ($pathinfo === '/user/profile/edit') {
                    return array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\UserController::updateProfileAction',  '_route' => 'oro_user_profile_update',);
                }

            }

            // oro_user_apigen
            if (0 === strpos($pathinfo, '/user/apigen') && preg_match('#^/user/apigen/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_user_apigen')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\UserController::apigenAction',));
            }

            // oro_user_create
            if ($pathinfo === '/user/create') {
                return array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\UserController::createAction',  '_route' => 'oro_user_create',);
            }

            // oro_user_update
            if (0 === strpos($pathinfo, '/user/update') && preg_match('#^/user/update(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_user_update')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\UserController::updateAction',));
            }

            // oro_user_index
            if (preg_match('#^/user(?:/(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_user_index')), array (  '_format' => 'html',  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\UserController::indexAction',));
            }

            if (0 === strpos($pathinfo, '/user/widget')) {
                // oro_user_widget_emails
                if (0 === strpos($pathinfo, '/user/widget/emails') && preg_match('#^/user/widget/emails/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_user_widget_emails')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\UserController::emailsAction',));
                }

                // oro_user_widget_info
                if (0 === strpos($pathinfo, '/user/widget/info') && preg_match('#^/user/widget/info/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_user_widget_info')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\UserController::infoAction',));
                }

            }

        }

        // oro_user_dashboard_recent_emails
        if (0 === strpos($pathinfo, '/dashboard/recent_emails') && preg_match('#^/dashboard/recent_emails/(?P<widget>[\\w_-]+)(?:/(?P<activeTab>inbox|sent)(?:/(?P<contentType>full|tab))?)?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_user_dashboard_recent_emails')), array (  'activeTab' => 'inbox',  'contentType' => 'full',  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Dashboard\\DashboardController::recentEmailsAction',));
        }

        if (0 === strpos($pathinfo, '/api/rest')) {
            // oro_api_delete_user
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/users/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_oro_api_delete_user;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_user')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\UserController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_delete_user:

            // oro_api_get_user
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/users/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_user;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_user')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\UserController::getAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_user:

            // oro_api_get_user_filter
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/user/filter(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_user_filter;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_user_filter')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\UserController::getFilterAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_user_filter:

            // oro_api_get_user_groups
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/users/(?P<id>[^/]++)/groups(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_user_groups;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_user_groups')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\UserController::getGroupsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_user_groups:

            // oro_api_get_user_roles
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/users/(?P<id>[^/]++)/roles(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_user_roles;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_user_roles')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\UserController::getRolesAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_user_roles:

            // oro_api_get_users
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/users(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_users;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_users')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\UserController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_users:

            // oro_api_post_user
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/user(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_oro_api_post_user;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_user')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\UserController::postAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_post_user:

            // oro_api_put_user
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/users/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_oro_api_put_user;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_put_user')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\UserController::putAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_put_user:

            // oro_api_delete_role
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/roles/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_oro_api_delete_role;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_role')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\RoleController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_delete_role:

            // oro_api_get_role
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/roles/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_role;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_role')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\RoleController::getAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_role:

            // oro_api_get_role_byname
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/roles/(?P<name>[^/]++)/byname(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_role_byname;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_role_byname')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\RoleController::getBynameAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_role_byname:

            // oro_api_get_roles
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/roles(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_roles;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_roles')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\RoleController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_roles:

            // oro_api_post_role
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/role(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_oro_api_post_role;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_role')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\RoleController::postAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_post_role:

            // oro_api_put_role
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/roles/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_oro_api_put_role;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_put_role')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\RoleController::putAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_put_role:

            // oro_api_delete_group
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/groups/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_oro_api_delete_group;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_group')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\GroupController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_delete_group:

            // oro_api_get_group
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/groups/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_group;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_group')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\GroupController::getAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_group:

            // oro_api_get_groups
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/groups(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_groups;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_groups')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\GroupController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_groups:

            // oro_api_post_group
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/group(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_oro_api_post_group;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_group')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\GroupController::postAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_post_group:

            // oro_api_put_group
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/groups/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_oro_api_put_group;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_put_group')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\GroupController::putAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_put_group:

            // oro_api_delete_windows
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/windows/(?P<windowId>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_oro_api_delete_windows;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_windows')), array (  '_controller' => 'Oro\\Bundle\\WindowsBundle\\Controller\\Api\\WindowsStateController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_delete_windows:

            // oro_api_get_windows
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/windows(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_windows;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_windows')), array (  '_controller' => 'Oro\\Bundle\\WindowsBundle\\Controller\\Api\\WindowsStateController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_windows:

            // oro_api_post_windows
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/windows(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_oro_api_post_windows;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_windows')), array (  '_controller' => 'Oro\\Bundle\\WindowsBundle\\Controller\\Api\\WindowsStateController::postAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_post_windows:

            // oro_api_put_windows
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/windows/(?P<windowId>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_oro_api_put_windows;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_put_windows')), array (  '_controller' => 'Oro\\Bundle\\WindowsBundle\\Controller\\Api\\WindowsStateController::putAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_put_windows:

        }

        if (0 === strpos($pathinfo, '/workflow')) {
            // oro_workflow_api_rest_workflow_start
            if (0 === strpos($pathinfo, '/workflow/start') && preg_match('#^/workflow/start/(?P<workflowName>[^/]++)/(?P<transitionName>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_workflow_api_rest_workflow_start;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_workflow_api_rest_workflow_start')), array (  '_format' => 'json',  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\Api\\Rest\\WorkflowController::startAction',));
            }
            not_oro_workflow_api_rest_workflow_start:

            // oro_workflow_api_rest_workflow_transit
            if (preg_match('#^/workflow/(?P<workflowItemId>\\d+)/transit/(?P<transitionName>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_workflow_api_rest_workflow_transit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_workflow_api_rest_workflow_transit')), array (  '_format' => 'json',  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\Api\\Rest\\WorkflowController::transitAction',));
            }
            not_oro_workflow_api_rest_workflow_transit:

            // oro_workflow_api_rest_workflow_get
            if (preg_match('#^/workflow/(?P<workflowItemId>\\d+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_workflow_api_rest_workflow_get;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_workflow_api_rest_workflow_get')), array (  '_format' => 'json',  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\Api\\Rest\\WorkflowController::getAction',));
            }
            not_oro_workflow_api_rest_workflow_get:

            // oro_workflow_api_rest_workflow_delete
            if (preg_match('#^/workflow/(?P<workflowItemId>\\d+)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_oro_workflow_api_rest_workflow_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_workflow_api_rest_workflow_delete')), array (  '_format' => 'json',  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\Api\\Rest\\WorkflowController::deleteAction',));
            }
            not_oro_workflow_api_rest_workflow_delete:

            // oro_workflow_widget_step_form
            if (0 === strpos($pathinfo, '/workflow/step/edit/item') && preg_match('#^/workflow/step/edit/item/(?P<workflowItemId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_workflow_widget_step_form')), array (  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\WidgetController::stepFormAction',));
            }

            if (0 === strpos($pathinfo, '/workflow/transition')) {
                // oro_workflow_widget_start_transition_form
                if (0 === strpos($pathinfo, '/workflow/transition/create/attributes') && preg_match('#^/workflow/transition/create/attributes/(?P<transitionName>[^/]++)/(?P<workflowName>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_workflow_widget_start_transition_form')), array (  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\WidgetController::startTransitionFormAction',));
                }

                // oro_workflow_widget_transition_form
                if (0 === strpos($pathinfo, '/workflow/transition/edit/attributes') && preg_match('#^/workflow/transition/edit/attributes/(?P<transitionName>[^/]++)/(?P<workflowItemId>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_workflow_widget_transition_form')), array (  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\WidgetController::transitionFormAction',));
                }

            }

            if (0 === strpos($pathinfo, '/workflow/buttons')) {
                // oro_workflow_widget_buttons_entity
                if (0 === strpos($pathinfo, '/workflow/buttons/entity') && preg_match('#^/workflow/buttons/entity/(?P<entityClass>[^/]++)/(?P<entityId>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_workflow_widget_buttons_entity')), array (  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\WidgetController::entityButtonsAction',));
                }

                // oro_workflow_widget_buttons_wizard
                if (0 === strpos($pathinfo, '/workflow/buttons/wizard') && preg_match('#^/workflow/buttons/wizard/(?P<workflowItemId>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_workflow_widget_buttons_wizard')), array (  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\WidgetController::wizardButtonsAction',));
                }

            }

            // oro_workflow_widget_workflow_items
            if (0 === strpos($pathinfo, '/workflow/workflow_items') && preg_match('#^/workflow/workflow_items/(?P<entityClass>[^/]++)/(?P<entityId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_workflow_widget_workflow_items')), array (  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\WidgetController::workflowItemsAction',));
            }

            // oro_workflow_step_edit
            if (0 === strpos($pathinfo, '/workflow/edit') && preg_match('#^/workflow/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_workflow_step_edit')), array (  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\WorkflowStepController::editAction',));
            }

        }

        if (0 === strpos($pathinfo, '/api/rest')) {
            // oro_api_workflow_delete
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/workflow/(?P<workflowItemId>\\d+)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_oro_api_workflow_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_workflow_delete')), array (  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\Api\\Rest\\WorkflowController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_workflow_delete:

            // oro_api_workflow_get
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/workflow/(?P<workflowItemId>\\d+)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_workflow_get;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_workflow_get')), array (  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\Api\\Rest\\WorkflowController::getAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_workflow_get:

            // oro_api_workflow_start
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/workflow/start/(?P<workflowName>[^/]++)/(?P<transitionName>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_workflow_start;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_workflow_start')), array (  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\Api\\Rest\\WorkflowController::startAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_workflow_start:

            // oro_api_workflow_transit
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/workflow/(?P<workflowItemId>\\d+)/transit/(?P<transitionName>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_workflow_transit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_workflow_transit')), array (  '_controller' => 'Oro\\Bundle\\WorkflowBundle\\Controller\\Api\\Rest\\WorkflowController::transitAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_workflow_transit:

        }

        // oro_shortcut_actionslist
        if ($pathinfo === '/shortcutactionslist') {
            return array (  '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\ShortcutController::actionslistAction',  '_route' => 'oro_shortcut_actionslist',);
        }

        if (0 === strpos($pathinfo, '/api/rest')) {
            // oro_api_delete_navigationitems_id
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/navigationitems/(?P<type>[^/]++)/ids/(?P<itemId>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_oro_api_delete_navigationitems_id;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_navigationitems_id')), array (  '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\Api\\NavigationItemController::deleteIdAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_delete_navigationitems_id:

            // oro_api_get_navigationitems
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/navigationitems/(?P<type>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_navigationitems;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_navigationitems')), array (  '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\Api\\NavigationItemController::getAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_navigationitems:

            // oro_api_post_navigationitems
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/navigationitems/(?P<type>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_oro_api_post_navigationitems;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_navigationitems')), array (  '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\Api\\NavigationItemController::postAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_post_navigationitems:

            // oro_api_put_navigationitems_id
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/navigationitems/(?P<type>[^/]++)/ids/(?P<itemId>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_oro_api_put_navigationitems_id;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_put_navigationitems_id')), array (  '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\Api\\NavigationItemController::putIdAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_put_navigationitems_id:

            // oro_api_get_shortcuts
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/shortcuts/(?P<query>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_shortcuts;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_shortcuts')), array (  '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\Api\\ShortcutsController::getAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_shortcuts:

            // oro_api_delete_pagestate
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/pagestates/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_oro_api_delete_pagestate;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_pagestate')), array (  '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\Api\\PagestateController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_delete_pagestate:

            // oro_api_get_pagestate
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/pagestates/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_pagestate;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_pagestate')), array (  '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\Api\\PagestateController::getAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_pagestate:

            // oro_api_get_pagestate_checkid
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/pagestate/checkid(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_pagestate_checkid;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_pagestate_checkid')), array (  '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\Api\\PagestateController::getCheckidAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_pagestate_checkid:

            // oro_api_get_pagestates
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/pagestates(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_pagestates;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_pagestates')), array (  '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\Api\\PagestateController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_pagestates:

            // oro_api_post_pagestate
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/pagestate(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_oro_api_post_pagestate;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_pagestate')), array (  '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\Api\\PagestateController::postAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_post_pagestate:

            // oro_api_put_pagestate
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/pagestates/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_oro_api_put_pagestate;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_put_pagestate')), array (  '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\Api\\PagestateController::putAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_put_pagestate:

        }

        // oro_pinbar_help
        if ($pathinfo === '/pinbar/help') {
            return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroNavigationBundle:Pinbar:help.html.twig',  '_route' => 'oro_pinbar_help',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
