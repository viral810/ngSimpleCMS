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

            // make_homepage
            if (0 === strpos($pathinfo, '/_cms/make_homepage') && preg_match('#^/_cms/make_homepage/(?P<id>.+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'make_homepage')), array (  '_controller' => 'Acme\\BasicCmsBundle\\Controller\\DefaultController::makeHomepageAction',));
            }

        }

        // acme_basiccms_default_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'acme_basiccms_default_index');
            }

            return array (  '_controller' => 'Acme\\BasicCmsBundle\\Controller\\DefaultController::indexAction',  '_route' => 'acme_basiccms_default_index',);
        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
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

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
