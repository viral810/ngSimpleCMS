<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/css/6feb881')) {
            // _assetic_6feb881
            if ($pathinfo === '/css/6feb881.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '6feb881',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_6feb881',);
            }

            if (0 === strpos($pathinfo, '/css/6feb881_part_1_')) {
                // _assetic_6feb881_0
                if ($pathinfo === '/css/6feb881_part_1_base_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '6feb881',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_6feb881_0',);
                }

                // _assetic_6feb881_1
                if ($pathinfo === '/css/6feb881_part_1_main_2.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '6feb881',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_6feb881_1',);
                }

                // _assetic_6feb881_2
                if ($pathinfo === '/css/6feb881_part_1_style_3.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '6feb881',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_6feb881_2',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js/d117c2b')) {
            // _assetic_d117c2b
            if ($pathinfo === '/js/d117c2b.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'd117c2b',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_d117c2b',);
            }

            if (0 === strpos($pathinfo, '/js/d117c2b_')) {
                // _assetic_d117c2b_0
                if ($pathinfo === '/js/d117c2b_jquery.min_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'd117c2b',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_d117c2b_0',);
                }

                if (0 === strpos($pathinfo, '/js/d117c2b_angular')) {
                    // _assetic_d117c2b_1
                    if ($pathinfo === '/js/d117c2b_angular.min_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'd117c2b',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_d117c2b_1',);
                    }

                    // _assetic_d117c2b_2
                    if ($pathinfo === '/js/d117c2b_angular-route.min_3.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'd117c2b',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_d117c2b_2',);
                    }

                }

                if (0 === strpos($pathinfo, '/js/d117c2b_m')) {
                    // _assetic_d117c2b_3
                    if ($pathinfo === '/js/d117c2b_modernizr-respond.min_4.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'd117c2b',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_d117c2b_3',);
                    }

                    // _assetic_d117c2b_4
                    if ($pathinfo === '/js/d117c2b_main_5.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'd117c2b',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_d117c2b_4',);
                    }

                }

                // _assetic_d117c2b_5
                if ($pathinfo === '/js/d117c2b_part_6_app_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'd117c2b',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_d117c2b_5',);
                }

            }

        }

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

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
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

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // acme_backend_default_index
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'acme_backend_default_index')), array (  '_controller' => 'Acme\\BackendBundle\\Controller\\DefaultController::indexAction',));
        }

        // make_homepage
        if (0 === strpos($pathinfo, '/_cms/make_homepage') && preg_match('#^/_cms/make_homepage/(?P<id>.+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'make_homepage')), array (  '_controller' => 'Acme\\BasicCmsBundle\\Controller\\DefaultController::makeHomepageAction',));
        }

        // acme_basiccms_default_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'acme_basiccms_default_index');
            }

            return array (  '_controller' => 'Acme\\BasicCmsBundle\\Controller\\DefaultController::indexAction',  '_route' => 'acme_basiccms_default_index',);
        }

        // acme_basiccms_front_home
        if (rtrim($pathinfo, '/') === '/home') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'acme_basiccms_front_home');
            }

            return array (  '_controller' => 'Acme\\BasicCmsBundle\\Controller\\FrontController::homeAction',  '_route' => 'acme_basiccms_front_home',);
        }

        if (0 === strpos($pathinfo, '/admin')) {
            // sonata_admin_redirect
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sonata_admin_redirect');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'sonata_admin_dashboard',  'permanent' => 'true',  '_route' => 'sonata_admin_redirect',);
            }

            // sonata_admin_dashboard
            if ($pathinfo === '/admin/dashboard') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  '_route' => 'sonata_admin_dashboard',);
            }

            if (0 === strpos($pathinfo, '/admin/core')) {
                // sonata_admin_retrieve_form_element
                if ($pathinfo === '/admin/core/get-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',  '_route' => 'sonata_admin_retrieve_form_element',);
                }

                // sonata_admin_append_form_element
                if ($pathinfo === '/admin/core/append-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',  '_route' => 'sonata_admin_append_form_element',);
                }

                // sonata_admin_short_object_information
                if (0 === strpos($pathinfo, '/admin/core/get-short-object-description') && preg_match('#^/admin/core/get\\-short\\-object\\-description(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_admin_short_object_information')), array (  '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',  '_format' => 'html',));
                }

                // sonata_admin_set_object_field_value
                if ($pathinfo === '/admin/core/set-object-field-value') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  '_route' => 'sonata_admin_set_object_field_value',);
                }

            }

            // sonata_admin_search
            if ($pathinfo === '/admin/search') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::searchAction',  '_route' => 'sonata_admin_search',);
            }

            // sonata_admin_retrieve_autocomplete_items
            if ($pathinfo === '/admin/core/get-autocomplete-items') {
                return array (  '_controller' => 'sonata.admin.controller.admin:retrieveAutocompleteItemsAction',  '_route' => 'sonata_admin_retrieve_autocomplete_items',);
            }

            if (0 === strpos($pathinfo, '/admin/sonata/user')) {
                if (0 === strpos($pathinfo, '/admin/sonata/user/user')) {
                    // admin_sonata_user_user_list
                    if ($pathinfo === '/admin/sonata/user/user/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_list',  '_route' => 'admin_sonata_user_user_list',);
                    }

                    // admin_sonata_user_user_create
                    if ($pathinfo === '/admin/sonata/user/user/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_create',  '_route' => 'admin_sonata_user_user_create',);
                    }

                    // admin_sonata_user_user_batch
                    if ($pathinfo === '/admin/sonata/user/user/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_batch',  '_route' => 'admin_sonata_user_user_batch',);
                    }

                    // admin_sonata_user_user_edit
                    if (preg_match('#^/admin/sonata/user/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_user_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_edit',));
                    }

                    // admin_sonata_user_user_delete
                    if (preg_match('#^/admin/sonata/user/user/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_user_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_delete',));
                    }

                    // admin_sonata_user_user_show
                    if (preg_match('#^/admin/sonata/user/user/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_user_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_show',));
                    }

                    // admin_sonata_user_user_export
                    if ($pathinfo === '/admin/sonata/user/user/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_export',  '_route' => 'admin_sonata_user_user_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/sonata/user/group')) {
                    // admin_sonata_user_group_list
                    if ($pathinfo === '/admin/sonata/user/group/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_list',  '_route' => 'admin_sonata_user_group_list',);
                    }

                    // admin_sonata_user_group_create
                    if ($pathinfo === '/admin/sonata/user/group/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_create',  '_route' => 'admin_sonata_user_group_create',);
                    }

                    // admin_sonata_user_group_batch
                    if ($pathinfo === '/admin/sonata/user/group/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_batch',  '_route' => 'admin_sonata_user_group_batch',);
                    }

                    // admin_sonata_user_group_edit
                    if (preg_match('#^/admin/sonata/user/group/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_group_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_edit',));
                    }

                    // admin_sonata_user_group_delete
                    if (preg_match('#^/admin/sonata/user/group/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_group_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_delete',));
                    }

                    // admin_sonata_user_group_show
                    if (preg_match('#^/admin/sonata/user/group/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_group_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_show',));
                    }

                    // admin_sonata_user_group_export
                    if ($pathinfo === '/admin/sonata/user/group/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_export',  '_route' => 'admin_sonata_user_group_export',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/admin/acme/basiccms/p')) {
                if (0 === strpos($pathinfo, '/admin/acme/basiccms/page')) {
                    // admin_acme_basiccms_page_list
                    if ($pathinfo === '/admin/acme/basiccms/page/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'acme.basic_cms.admin.page',  '_sonata_name' => 'admin_acme_basiccms_page_list',  '_route' => 'admin_acme_basiccms_page_list',);
                    }

                    // admin_acme_basiccms_page_create
                    if ($pathinfo === '/admin/acme/basiccms/page/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'acme.basic_cms.admin.page',  '_sonata_name' => 'admin_acme_basiccms_page_create',  '_route' => 'admin_acme_basiccms_page_create',);
                    }

                    // admin_acme_basiccms_page_batch
                    if ($pathinfo === '/admin/acme/basiccms/page/batch') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_admin_acme_basiccms_page_batch;
                        }

                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'acme.basic_cms.admin.page',  '_sonata_name' => 'admin_acme_basiccms_page_batch',  '_route' => 'admin_acme_basiccms_page_batch',);
                    }
                    not_admin_acme_basiccms_page_batch:

                    // admin_acme_basiccms_page_edit
                    if (preg_match('#^/admin/acme/basiccms/page/(?P<id>.+)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_acme_basiccms_page_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'acme.basic_cms.admin.page',  '_sonata_name' => 'admin_acme_basiccms_page_edit',));
                    }

                    // admin_acme_basiccms_page_delete
                    if (preg_match('#^/admin/acme/basiccms/page/(?P<id>.+)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_acme_basiccms_page_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'acme.basic_cms.admin.page',  '_sonata_name' => 'admin_acme_basiccms_page_delete',));
                    }

                    // admin_acme_basiccms_page_export
                    if ($pathinfo === '/admin/acme/basiccms/page/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'acme.basic_cms.admin.page',  '_sonata_name' => 'admin_acme_basiccms_page_export',  '_route' => 'admin_acme_basiccms_page_export',);
                    }

                    // admin_acme_basiccms_page_show
                    if (preg_match('#^/admin/acme/basiccms/page/(?P<id>.+)/show$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_acme_basiccms_page_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_acme_basiccms_page_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'acme.basic_cms.admin.page',  '_sonata_name' => 'admin_acme_basiccms_page_show',));
                    }
                    not_admin_acme_basiccms_page_show:

                }

                if (0 === strpos($pathinfo, '/admin/acme/basiccms/post')) {
                    // admin_acme_basiccms_post_list
                    if ($pathinfo === '/admin/acme/basiccms/post/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'acme.basic_cms.admin.post',  '_sonata_name' => 'admin_acme_basiccms_post_list',  '_route' => 'admin_acme_basiccms_post_list',);
                    }

                    // admin_acme_basiccms_post_create
                    if ($pathinfo === '/admin/acme/basiccms/post/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'acme.basic_cms.admin.post',  '_sonata_name' => 'admin_acme_basiccms_post_create',  '_route' => 'admin_acme_basiccms_post_create',);
                    }

                    // admin_acme_basiccms_post_batch
                    if ($pathinfo === '/admin/acme/basiccms/post/batch') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_admin_acme_basiccms_post_batch;
                        }

                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'acme.basic_cms.admin.post',  '_sonata_name' => 'admin_acme_basiccms_post_batch',  '_route' => 'admin_acme_basiccms_post_batch',);
                    }
                    not_admin_acme_basiccms_post_batch:

                    // admin_acme_basiccms_post_edit
                    if (preg_match('#^/admin/acme/basiccms/post/(?P<id>.+)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_acme_basiccms_post_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'acme.basic_cms.admin.post',  '_sonata_name' => 'admin_acme_basiccms_post_edit',));
                    }

                    // admin_acme_basiccms_post_delete
                    if (preg_match('#^/admin/acme/basiccms/post/(?P<id>.+)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_acme_basiccms_post_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'acme.basic_cms.admin.post',  '_sonata_name' => 'admin_acme_basiccms_post_delete',));
                    }

                    // admin_acme_basiccms_post_export
                    if ($pathinfo === '/admin/acme/basiccms/post/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'acme.basic_cms.admin.post',  '_sonata_name' => 'admin_acme_basiccms_post_export',  '_route' => 'admin_acme_basiccms_post_export',);
                    }

                    // admin_acme_basiccms_post_show
                    if (preg_match('#^/admin/acme/basiccms/post/(?P<id>.+)/show$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_acme_basiccms_post_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_acme_basiccms_post_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'acme.basic_cms.admin.post',  '_sonata_name' => 'admin_acme_basiccms_post_show',));
                    }
                    not_admin_acme_basiccms_post_show:

                }

            }

        }

        if (0 === strpos($pathinfo, '/_cmf_tree/phpcr_odm_tree')) {
            // _cmf_tree_phpcr_odm_tree_children
            if ($pathinfo === '/_cmf_tree/phpcr_odm_tree/children') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not__cmf_tree_phpcr_odm_tree_children;
                }

                return array (  '_controller' => 'phpcr_odm_tree.cmf_tree_controller:childrenAction',  '_route' => '_cmf_tree_phpcr_odm_tree_children',);
            }
            not__cmf_tree_phpcr_odm_tree_children:

            // _cmf_tree_phpcr_odm_tree_move
            if ($pathinfo === '/_cmf_tree/phpcr_odm_tree/move') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not__cmf_tree_phpcr_odm_tree_move;
                }

                return array (  '_controller' => 'phpcr_odm_tree.cmf_tree_controller:moveAction',  '_route' => '_cmf_tree_phpcr_odm_tree_move',);
            }
            not__cmf_tree_phpcr_odm_tree_move:

            // _cmf_tree_phpcr_odm_tree_reorder
            if ($pathinfo === '/_cmf_tree/phpcr_odm_tree/reorder') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not__cmf_tree_phpcr_odm_tree_reorder;
                }

                return array (  '_controller' => 'phpcr_odm_tree.cmf_tree_controller:reorderAction',  '_route' => '_cmf_tree_phpcr_odm_tree_reorder',);
            }
            not__cmf_tree_phpcr_odm_tree_reorder:

        }

        // fos_js_routing_js
        if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_js_routing_js')), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',));
        }

        if (0 === strpos($pathinfo, '/admin/log')) {
            if (0 === strpos($pathinfo, '/admin/login')) {
                // sonata_user_admin_security_login
                if ($pathinfo === '/admin/login') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminSecurityController::loginAction',  '_route' => 'sonata_user_admin_security_login',);
                }

                // sonata_user_admin_security_check
                if ($pathinfo === '/admin/login_check') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminSecurityController::checkAction',  '_route' => 'sonata_user_admin_security_check',);
                }

            }

            // sonata_user_admin_security_logout
            if ($pathinfo === '/admin/logout') {
                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminSecurityController::logoutAction',  '_route' => 'sonata_user_admin_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\SecurityFOSUser1Controller::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\SecurityFOSUser1Controller::checkAction',  '_route' => 'fos_user_security_check',);
                }

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\SecurityFOSUser1Controller::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

            if (0 === strpos($pathinfo, '/login')) {
                // sonata_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\SecurityFOSUser1Controller::loginAction',  '_route' => 'sonata_user_security_login',);
                }

                // sonata_user_security_check
                if ($pathinfo === '/login_check') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\SecurityFOSUser1Controller::checkAction',  '_route' => 'sonata_user_security_check',);
                }

            }

            // sonata_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\SecurityFOSUser1Controller::logoutAction',  '_route' => 'sonata_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/resetting')) {
            // fos_user_resetting_request
            if ($pathinfo === '/resetting/request') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_resetting_request;
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ResettingFOSUser1Controller::requestAction',  '_route' => 'fos_user_resetting_request',);
            }
            not_fos_user_resetting_request:

            // fos_user_resetting_send_email
            if ($pathinfo === '/resetting/send-email') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fos_user_resetting_send_email;
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ResettingFOSUser1Controller::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
            }
            not_fos_user_resetting_send_email:

            // fos_user_resetting_check_email
            if ($pathinfo === '/resetting/check-email') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_resetting_check_email;
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ResettingFOSUser1Controller::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
            }
            not_fos_user_resetting_check_email:

            if (0 === strpos($pathinfo, '/resetting/re')) {
                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ResettingFOSUser1Controller::resetAction',));
                }
                not_fos_user_resetting_reset:

                // sonata_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_sonata_user_resetting_request;
                    }

                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ResettingFOSUser1Controller::requestAction',  '_route' => 'sonata_user_resetting_request',);
                }
                not_sonata_user_resetting_request:

            }

            // sonata_user_resetting_send_email
            if ($pathinfo === '/resetting/send-email') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_sonata_user_resetting_send_email;
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ResettingFOSUser1Controller::sendEmailAction',  '_route' => 'sonata_user_resetting_send_email',);
            }
            not_sonata_user_resetting_send_email:

            // sonata_user_resetting_check_email
            if ($pathinfo === '/resetting/check-email') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_sonata_user_resetting_check_email;
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ResettingFOSUser1Controller::checkEmailAction',  '_route' => 'sonata_user_resetting_check_email',);
            }
            not_sonata_user_resetting_check_email:

            // sonata_user_resetting_reset
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_sonata_user_resetting_reset;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_user_resetting_reset')), array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ResettingFOSUser1Controller::resetAction',));
            }
            not_sonata_user_resetting_reset:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ProfileFOSUser1Controller::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            if (0 === strpos($pathinfo, '/profile/edit-')) {
                // fos_user_profile_edit_authentication
                if ($pathinfo === '/profile/edit-authentication') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ProfileFOSUser1Controller::editAuthenticationAction',  '_route' => 'fos_user_profile_edit_authentication',);
                }

                // fos_user_profile_edit
                if ($pathinfo === '/profile/edit-profile') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ProfileFOSUser1Controller::editProfileAction',  '_route' => 'fos_user_profile_edit',);
                }

            }

            // sonata_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_sonata_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sonata_user_profile_show');
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ProfileFOSUser1Controller::showAction',  '_route' => 'sonata_user_profile_show',);
            }
            not_sonata_user_profile_show:

            if (0 === strpos($pathinfo, '/profile/edit-')) {
                // sonata_user_profile_edit_authentication
                if ($pathinfo === '/profile/edit-authentication') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ProfileFOSUser1Controller::editAuthenticationAction',  '_route' => 'sonata_user_profile_edit_authentication',);
                }

                // sonata_user_profile_edit
                if ($pathinfo === '/profile/edit-profile') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ProfileFOSUser1Controller::editProfileAction',  '_route' => 'sonata_user_profile_edit',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/register')) {
            // fos_user_registration_register
            if (rtrim($pathinfo, '/') === '/register') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\RegistrationFOSUser1Controller::registerAction',  '_route' => 'fos_user_registration_register',);
            }

            if (0 === strpos($pathinfo, '/register/c')) {
                // fos_user_registration_check_email
                if ($pathinfo === '/register/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_registration_check_email;
                    }

                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\RegistrationFOSUser1Controller::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                }
                not_fos_user_registration_check_email:

                if (0 === strpos($pathinfo, '/register/confirm')) {
                    // fos_user_registration_confirm
                    if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_confirm;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'Sonata\\UserBundle\\Controller\\RegistrationFOSUser1Controller::confirmAction',));
                    }
                    not_fos_user_registration_confirm:

                    // fos_user_registration_confirmed
                    if ($pathinfo === '/register/confirmed') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_confirmed;
                        }

                        return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\RegistrationFOSUser1Controller::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                    }
                    not_fos_user_registration_confirmed:

                }

            }

            // sonata_user_registration_register
            if (rtrim($pathinfo, '/') === '/register') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sonata_user_registration_register');
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\RegistrationFOSUser1Controller::registerAction',  '_route' => 'sonata_user_registration_register',);
            }

            if (0 === strpos($pathinfo, '/register/c')) {
                // sonata_user_registration_check_email
                if ($pathinfo === '/register/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_sonata_user_registration_check_email;
                    }

                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\RegistrationFOSUser1Controller::checkEmailAction',  '_route' => 'sonata_user_registration_check_email',);
                }
                not_sonata_user_registration_check_email:

                if (0 === strpos($pathinfo, '/register/confirm')) {
                    // sonata_user_registration_confirm
                    if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_sonata_user_registration_confirm;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_user_registration_confirm')), array (  '_controller' => 'Sonata\\UserBundle\\Controller\\RegistrationFOSUser1Controller::confirmAction',));
                    }
                    not_sonata_user_registration_confirm:

                    // sonata_user_registration_confirmed
                    if ($pathinfo === '/register/confirmed') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_sonata_user_registration_confirmed;
                        }

                        return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\RegistrationFOSUser1Controller::confirmedAction',  '_route' => 'sonata_user_registration_confirmed',);
                    }
                    not_sonata_user_registration_confirmed:

                }

            }

        }

        if (0 === strpos($pathinfo, '/profile/change-password')) {
            // fos_user_change_password
            if ($pathinfo === '/profile/change-password') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_change_password;
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ChangePasswordFOSUser1Controller::changePasswordAction',  '_route' => 'fos_user_change_password',);
            }
            not_fos_user_change_password:

            // sonata_user_change_password
            if ($pathinfo === '/profile/change-password') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_sonata_user_change_password;
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ChangePasswordFOSUser1Controller::changePasswordAction',  '_route' => 'sonata_user_change_password',);
            }
            not_sonata_user_change_password:

        }

        if (0 === strpos($pathinfo, '/users')) {
            // get_users
            if (preg_match('#^/users(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_get_users;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_users')), array (  '_controller' => 'Application\\Sonata\\UserBundle\\Controller\\UsersController::getUsersAction',  '_format' => NULL,));
            }
            not_get_users:

            // get_user
            if (preg_match('#^/users/(?P<user>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_get_user;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_user')), array (  '_controller' => 'Application\\Sonata\\UserBundle\\Controller\\UsersController::getUserAction',  '_format' => NULL,));
            }
            not_get_user:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
