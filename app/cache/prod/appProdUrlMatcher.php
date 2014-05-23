<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
                if ($pathinfo === '/admin/core/get-short-object-description') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',  '_route' => 'sonata_admin_short_object_information',);
                }

                // sonata_admin_set_object_field_value
                if ($pathinfo === '/admin/core/set-object-field-value') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  '_route' => 'sonata_admin_set_object_field_value',);
                }

            }

            if (0 === strpos($pathinfo, '/admin/armd/resource')) {
                if (0 === strpos($pathinfo, '/admin/armd/resource/user-')) {
                    if (0 === strpos($pathinfo, '/admin/armd/resource/user-user')) {
                        // admin_armd_resource_user_user_list
                        if ($pathinfo === '/admin/armd/resource/user-user/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_armd_resource_user_user_list',  '_route' => 'admin_armd_resource_user_user_list',);
                        }

                        // admin_armd_resource_user_user_create
                        if ($pathinfo === '/admin/armd/resource/user-user/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_armd_resource_user_user_create',  '_route' => 'admin_armd_resource_user_user_create',);
                        }

                        // admin_armd_resource_user_user_batch
                        if ($pathinfo === '/admin/armd/resource/user-user/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_armd_resource_user_user_batch',  '_route' => 'admin_armd_resource_user_user_batch',);
                        }

                        // admin_armd_resource_user_user_edit
                        if (preg_match('#^/admin/armd/resource/user\\-user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_armd_resource_user_user_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_armd_resource_user_user_edit',));
                        }

                        // admin_armd_resource_user_user_delete
                        if (preg_match('#^/admin/armd/resource/user\\-user/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_armd_resource_user_user_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_armd_resource_user_user_delete',));
                        }

                        // admin_armd_resource_user_user_show
                        if (preg_match('#^/admin/armd/resource/user\\-user/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_armd_resource_user_user_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_armd_resource_user_user_show',));
                        }

                        // admin_armd_resource_user_user_export
                        if ($pathinfo === '/admin/armd/resource/user-user/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_armd_resource_user_user_export',  '_route' => 'admin_armd_resource_user_user_export',);
                        }

                        // admin_armd_resource_user_user_history
                        if (preg_match('#^/admin/armd/resource/user\\-user/(?P<id>[^/]++)/history$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_armd_resource_user_user_history')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::historyAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_armd_resource_user_user_history',));
                        }

                        // admin_armd_resource_user_user_history_view_revision
                        if (preg_match('#^/admin/armd/resource/user\\-user/(?P<id>[^/]++)/history/(?P<revision>[^/]++)/view$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_armd_resource_user_user_history_view_revision')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::historyViewRevisionAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_armd_resource_user_user_history_view_revision',));
                        }

                        // admin_armd_resource_user_user_acl
                        if (preg_match('#^/admin/armd/resource/user\\-user/(?P<id>[^/]++)/acl$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_armd_resource_user_user_acl')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::aclAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_armd_resource_user_user_acl',));
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/armd/resource/user-group')) {
                        // admin_armd_resource_user_group_list
                        if ($pathinfo === '/admin/armd/resource/user-group/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_armd_resource_user_group_list',  '_route' => 'admin_armd_resource_user_group_list',);
                        }

                        // admin_armd_resource_user_group_create
                        if ($pathinfo === '/admin/armd/resource/user-group/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_armd_resource_user_group_create',  '_route' => 'admin_armd_resource_user_group_create',);
                        }

                        // admin_armd_resource_user_group_batch
                        if ($pathinfo === '/admin/armd/resource/user-group/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_armd_resource_user_group_batch',  '_route' => 'admin_armd_resource_user_group_batch',);
                        }

                        // admin_armd_resource_user_group_edit
                        if (preg_match('#^/admin/armd/resource/user\\-group/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_armd_resource_user_group_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_armd_resource_user_group_edit',));
                        }

                        // admin_armd_resource_user_group_delete
                        if (preg_match('#^/admin/armd/resource/user\\-group/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_armd_resource_user_group_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_armd_resource_user_group_delete',));
                        }

                        // admin_armd_resource_user_group_show
                        if (preg_match('#^/admin/armd/resource/user\\-group/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_armd_resource_user_group_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_armd_resource_user_group_show',));
                        }

                        // admin_armd_resource_user_group_export
                        if ($pathinfo === '/admin/armd/resource/user-group/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_armd_resource_user_group_export',  '_route' => 'admin_armd_resource_user_group_export',);
                        }

                        // admin_armd_resource_user_group_history
                        if (preg_match('#^/admin/armd/resource/user\\-group/(?P<id>[^/]++)/history$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_armd_resource_user_group_history')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::historyAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_armd_resource_user_group_history',));
                        }

                        // admin_armd_resource_user_group_history_view_revision
                        if (preg_match('#^/admin/armd/resource/user\\-group/(?P<id>[^/]++)/history/(?P<revision>[^/]++)/view$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_armd_resource_user_group_history_view_revision')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::historyViewRevisionAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_armd_resource_user_group_history_view_revision',));
                        }

                        // admin_armd_resource_user_group_acl
                        if (preg_match('#^/admin/armd/resource/user\\-group/(?P<id>[^/]++)/acl$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_armd_resource_user_group_acl')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::aclAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_armd_resource_user_group_acl',));
                        }

                    }

                }

                if (0 === strpos($pathinfo, '/admin/armd/resource/media-')) {
                    if (0 === strpos($pathinfo, '/admin/armd/resource/media-media')) {
                        // admin_armd_resource_media_media_list
                        if ($pathinfo === '/admin/armd/resource/media-media/list') {
                            return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::listAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_armd_resource_media_media_list',  '_route' => 'admin_armd_resource_media_media_list',);
                        }

                        // admin_armd_resource_media_media_create
                        if ($pathinfo === '/admin/armd/resource/media-media/create') {
                            return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::createAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_armd_resource_media_media_create',  '_route' => 'admin_armd_resource_media_media_create',);
                        }

                        // admin_armd_resource_media_media_batch
                        if ($pathinfo === '/admin/armd/resource/media-media/batch') {
                            return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::batchAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_armd_resource_media_media_batch',  '_route' => 'admin_armd_resource_media_media_batch',);
                        }

                        // admin_armd_resource_media_media_edit
                        if (preg_match('#^/admin/armd/resource/media\\-media/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_armd_resource_media_media_edit')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::editAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_armd_resource_media_media_edit',));
                        }

                        // admin_armd_resource_media_media_delete
                        if (preg_match('#^/admin/armd/resource/media\\-media/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_armd_resource_media_media_delete')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::deleteAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_armd_resource_media_media_delete',));
                        }

                        // admin_armd_resource_media_media_show
                        if (preg_match('#^/admin/armd/resource/media\\-media/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_armd_resource_media_media_show')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::showAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_armd_resource_media_media_show',));
                        }

                        // admin_armd_resource_media_media_export
                        if ($pathinfo === '/admin/armd/resource/media-media/export') {
                            return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::exportAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_armd_resource_media_media_export',  '_route' => 'admin_armd_resource_media_media_export',);
                        }

                        // admin_armd_resource_media_media_history
                        if (preg_match('#^/admin/armd/resource/media\\-media/(?P<id>[^/]++)/history$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_armd_resource_media_media_history')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::historyAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_armd_resource_media_media_history',));
                        }

                        // admin_armd_resource_media_media_history_view_revision
                        if (preg_match('#^/admin/armd/resource/media\\-media/(?P<id>[^/]++)/history/(?P<revision>[^/]++)/view$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_armd_resource_media_media_history_view_revision')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::historyViewRevisionAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_armd_resource_media_media_history_view_revision',));
                        }

                        // admin_armd_resource_media_media_acl
                        if (preg_match('#^/admin/armd/resource/media\\-media/(?P<id>[^/]++)/acl$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_armd_resource_media_media_acl')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::aclAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_armd_resource_media_media_acl',));
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/armd/resource/media-gallery')) {
                        // admin_armd_resource_media_gallery_list
                        if ($pathinfo === '/admin/armd/resource/media-gallery/list') {
                            return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::listAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_armd_resource_media_gallery_list',  '_route' => 'admin_armd_resource_media_gallery_list',);
                        }

                        // admin_armd_resource_media_gallery_create
                        if ($pathinfo === '/admin/armd/resource/media-gallery/create') {
                            return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::createAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_armd_resource_media_gallery_create',  '_route' => 'admin_armd_resource_media_gallery_create',);
                        }

                        // admin_armd_resource_media_gallery_batch
                        if ($pathinfo === '/admin/armd/resource/media-gallery/batch') {
                            return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::batchAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_armd_resource_media_gallery_batch',  '_route' => 'admin_armd_resource_media_gallery_batch',);
                        }

                        // admin_armd_resource_media_gallery_edit
                        if (preg_match('#^/admin/armd/resource/media\\-gallery/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_armd_resource_media_gallery_edit')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::editAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_armd_resource_media_gallery_edit',));
                        }

                        // admin_armd_resource_media_gallery_delete
                        if (preg_match('#^/admin/armd/resource/media\\-gallery/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_armd_resource_media_gallery_delete')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::deleteAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_armd_resource_media_gallery_delete',));
                        }

                        // admin_armd_resource_media_gallery_show
                        if (preg_match('#^/admin/armd/resource/media\\-gallery/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_armd_resource_media_gallery_show')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::showAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_armd_resource_media_gallery_show',));
                        }

                        // admin_armd_resource_media_gallery_export
                        if ($pathinfo === '/admin/armd/resource/media-gallery/export') {
                            return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::exportAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_armd_resource_media_gallery_export',  '_route' => 'admin_armd_resource_media_gallery_export',);
                        }

                        // admin_armd_resource_media_gallery_history
                        if (preg_match('#^/admin/armd/resource/media\\-gallery/(?P<id>[^/]++)/history$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_armd_resource_media_gallery_history')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::historyAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_armd_resource_media_gallery_history',));
                        }

                        // admin_armd_resource_media_gallery_history_view_revision
                        if (preg_match('#^/admin/armd/resource/media\\-gallery/(?P<id>[^/]++)/history/(?P<revision>[^/]++)/view$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_armd_resource_media_gallery_history_view_revision')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::historyViewRevisionAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_armd_resource_media_gallery_history_view_revision',));
                        }

                        // admin_armd_resource_media_gallery_acl
                        if (preg_match('#^/admin/armd/resource/media\\-gallery/(?P<id>[^/]++)/acl$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_armd_resource_media_gallery_acl')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::aclAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_armd_resource_media_gallery_acl',));
                        }

                        if (0 === strpos($pathinfo, '/admin/armd/resource/media-galleryhasmedia')) {
                            // admin_armd_resource_media_galleryhasmedia_list
                            if ($pathinfo === '/admin/armd/resource/media-galleryhasmedia/list') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_armd_resource_media_galleryhasmedia_list',  '_route' => 'admin_armd_resource_media_galleryhasmedia_list',);
                            }

                            // admin_armd_resource_media_galleryhasmedia_create
                            if ($pathinfo === '/admin/armd/resource/media-galleryhasmedia/create') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_armd_resource_media_galleryhasmedia_create',  '_route' => 'admin_armd_resource_media_galleryhasmedia_create',);
                            }

                            // admin_armd_resource_media_galleryhasmedia_batch
                            if ($pathinfo === '/admin/armd/resource/media-galleryhasmedia/batch') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_armd_resource_media_galleryhasmedia_batch',  '_route' => 'admin_armd_resource_media_galleryhasmedia_batch',);
                            }

                            // admin_armd_resource_media_galleryhasmedia_edit
                            if (preg_match('#^/admin/armd/resource/media\\-galleryhasmedia/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_armd_resource_media_galleryhasmedia_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_armd_resource_media_galleryhasmedia_edit',));
                            }

                            // admin_armd_resource_media_galleryhasmedia_delete
                            if (preg_match('#^/admin/armd/resource/media\\-galleryhasmedia/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_armd_resource_media_galleryhasmedia_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_armd_resource_media_galleryhasmedia_delete',));
                            }

                            // admin_armd_resource_media_galleryhasmedia_show
                            if (preg_match('#^/admin/armd/resource/media\\-galleryhasmedia/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_armd_resource_media_galleryhasmedia_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_armd_resource_media_galleryhasmedia_show',));
                            }

                            // admin_armd_resource_media_galleryhasmedia_export
                            if ($pathinfo === '/admin/armd/resource/media-galleryhasmedia/export') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_armd_resource_media_galleryhasmedia_export',  '_route' => 'admin_armd_resource_media_galleryhasmedia_export',);
                            }

                            // admin_armd_resource_media_galleryhasmedia_history
                            if (preg_match('#^/admin/armd/resource/media\\-galleryhasmedia/(?P<id>[^/]++)/history$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_armd_resource_media_galleryhasmedia_history')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::historyAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_armd_resource_media_galleryhasmedia_history',));
                            }

                            // admin_armd_resource_media_galleryhasmedia_history_view_revision
                            if (preg_match('#^/admin/armd/resource/media\\-galleryhasmedia/(?P<id>[^/]++)/history/(?P<revision>[^/]++)/view$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_armd_resource_media_galleryhasmedia_history_view_revision')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::historyViewRevisionAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_armd_resource_media_galleryhasmedia_history_view_revision',));
                            }

                            // admin_armd_resource_media_galleryhasmedia_acl
                            if (preg_match('#^/admin/armd/resource/media\\-galleryhasmedia/(?P<id>[^/]++)/acl$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_armd_resource_media_galleryhasmedia_acl')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::aclAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_armd_resource_media_galleryhasmedia_acl',));
                            }

                        }

                    }

                }

                if (0 === strpos($pathinfo, '/admin/armd/resource/contentlog')) {
                    // admin_armd_resource_contentlog_list
                    if ($pathinfo === '/admin/armd/resource/contentlog/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'armd.content.log.admin',  '_sonata_name' => 'admin_armd_resource_contentlog_list',  '_route' => 'admin_armd_resource_contentlog_list',);
                    }

                    // admin_armd_resource_contentlog_batch
                    if ($pathinfo === '/admin/armd/resource/contentlog/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'armd.content.log.admin',  '_sonata_name' => 'admin_armd_resource_contentlog_batch',  '_route' => 'admin_armd_resource_contentlog_batch',);
                    }

                    // admin_armd_resource_contentlog_show
                    if (preg_match('#^/admin/armd/resource/contentlog/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_armd_resource_contentlog_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'armd.content.log.admin',  '_sonata_name' => 'admin_armd_resource_contentlog_show',));
                    }

                    // admin_armd_resource_contentlog_export
                    if ($pathinfo === '/admin/armd/resource/contentlog/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'armd.content.log.admin',  '_sonata_name' => 'admin_armd_resource_contentlog_export',  '_route' => 'admin_armd_resource_contentlog_export',);
                    }

                    // admin_armd_resource_contentlog_acl
                    if (preg_match('#^/admin/armd/resource/contentlog/(?P<id>[^/]++)/acl$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_armd_resource_contentlog_acl')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::aclAction',  '_sonata_admin' => 'armd.content.log.admin',  '_sonata_name' => 'admin_armd_resource_contentlog_acl',));
                    }

                }

                if (0 === strpos($pathinfo, '/admin/armd/resource/exhibit')) {
                    // admin_armd_resource_exhibit_list
                    if ($pathinfo === '/admin/armd/resource/exhibit/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'armd.exhibit.exhibit.admin',  '_sonata_name' => 'admin_armd_resource_exhibit_list',  '_route' => 'admin_armd_resource_exhibit_list',);
                    }

                    // admin_armd_resource_exhibit_create
                    if ($pathinfo === '/admin/armd/resource/exhibit/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'armd.exhibit.exhibit.admin',  '_sonata_name' => 'admin_armd_resource_exhibit_create',  '_route' => 'admin_armd_resource_exhibit_create',);
                    }

                    // admin_armd_resource_exhibit_batch
                    if ($pathinfo === '/admin/armd/resource/exhibit/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'armd.exhibit.exhibit.admin',  '_sonata_name' => 'admin_armd_resource_exhibit_batch',  '_route' => 'admin_armd_resource_exhibit_batch',);
                    }

                    // admin_armd_resource_exhibit_edit
                    if (preg_match('#^/admin/armd/resource/exhibit/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_armd_resource_exhibit_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'armd.exhibit.exhibit.admin',  '_sonata_name' => 'admin_armd_resource_exhibit_edit',));
                    }

                    // admin_armd_resource_exhibit_delete
                    if (preg_match('#^/admin/armd/resource/exhibit/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_armd_resource_exhibit_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'armd.exhibit.exhibit.admin',  '_sonata_name' => 'admin_armd_resource_exhibit_delete',));
                    }

                    // admin_armd_resource_exhibit_export
                    if ($pathinfo === '/admin/armd/resource/exhibit/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'armd.exhibit.exhibit.admin',  '_sonata_name' => 'admin_armd_resource_exhibit_export',  '_route' => 'admin_armd_resource_exhibit_export',);
                    }

                    // admin_armd_resource_exhibit_history
                    if (preg_match('#^/admin/armd/resource/exhibit/(?P<id>[^/]++)/history$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_armd_resource_exhibit_history')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::historyAction',  '_sonata_admin' => 'armd.exhibit.exhibit.admin',  '_sonata_name' => 'admin_armd_resource_exhibit_history',));
                    }

                    // admin_armd_resource_exhibit_history_view_revision
                    if (preg_match('#^/admin/armd/resource/exhibit/(?P<id>[^/]++)/history/(?P<revision>[^/]++)/view$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_armd_resource_exhibit_history_view_revision')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::historyViewRevisionAction',  '_sonata_admin' => 'armd.exhibit.exhibit.admin',  '_sonata_name' => 'admin_armd_resource_exhibit_history_view_revision',));
                    }

                }

                if (0 === strpos($pathinfo, '/admin/armd/resource/category')) {
                    // admin_armd_resource_category_list
                    if ($pathinfo === '/admin/armd/resource/category/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'armd.exhibit.category.admin',  '_sonata_name' => 'admin_armd_resource_category_list',  '_route' => 'admin_armd_resource_category_list',);
                    }

                    // admin_armd_resource_category_create
                    if ($pathinfo === '/admin/armd/resource/category/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'armd.exhibit.category.admin',  '_sonata_name' => 'admin_armd_resource_category_create',  '_route' => 'admin_armd_resource_category_create',);
                    }

                    // admin_armd_resource_category_batch
                    if ($pathinfo === '/admin/armd/resource/category/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'armd.exhibit.category.admin',  '_sonata_name' => 'admin_armd_resource_category_batch',  '_route' => 'admin_armd_resource_category_batch',);
                    }

                    // admin_armd_resource_category_edit
                    if (preg_match('#^/admin/armd/resource/category/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_armd_resource_category_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'armd.exhibit.category.admin',  '_sonata_name' => 'admin_armd_resource_category_edit',));
                    }

                    // admin_armd_resource_category_delete
                    if (preg_match('#^/admin/armd/resource/category/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_armd_resource_category_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'armd.exhibit.category.admin',  '_sonata_name' => 'admin_armd_resource_category_delete',));
                    }

                    // admin_armd_resource_category_export
                    if ($pathinfo === '/admin/armd/resource/category/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'armd.exhibit.category.admin',  '_sonata_name' => 'admin_armd_resource_category_export',  '_route' => 'admin_armd_resource_category_export',);
                    }

                    // admin_armd_resource_category_history
                    if (preg_match('#^/admin/armd/resource/category/(?P<id>[^/]++)/history$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_armd_resource_category_history')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::historyAction',  '_sonata_admin' => 'armd.exhibit.category.admin',  '_sonata_name' => 'admin_armd_resource_category_history',));
                    }

                    // admin_armd_resource_category_history_view_revision
                    if (preg_match('#^/admin/armd/resource/category/(?P<id>[^/]++)/history/(?P<revision>[^/]++)/view$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_armd_resource_category_history_view_revision')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::historyViewRevisionAction',  '_sonata_admin' => 'armd.exhibit.category.admin',  '_sonata_name' => 'admin_armd_resource_category_history_view_revision',));
                    }

                }

                if (0 === strpos($pathinfo, '/admin/armd/resource/hall')) {
                    // admin_armd_resource_hall_list
                    if ($pathinfo === '/admin/armd/resource/hall/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'armd.hall.admin',  '_sonata_name' => 'admin_armd_resource_hall_list',  '_route' => 'admin_armd_resource_hall_list',);
                    }

                    // admin_armd_resource_hall_create
                    if ($pathinfo === '/admin/armd/resource/hall/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'armd.hall.admin',  '_sonata_name' => 'admin_armd_resource_hall_create',  '_route' => 'admin_armd_resource_hall_create',);
                    }

                    // admin_armd_resource_hall_batch
                    if ($pathinfo === '/admin/armd/resource/hall/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'armd.hall.admin',  '_sonata_name' => 'admin_armd_resource_hall_batch',  '_route' => 'admin_armd_resource_hall_batch',);
                    }

                    // admin_armd_resource_hall_edit
                    if (preg_match('#^/admin/armd/resource/hall/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_armd_resource_hall_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'armd.hall.admin',  '_sonata_name' => 'admin_armd_resource_hall_edit',));
                    }

                    // admin_armd_resource_hall_delete
                    if (preg_match('#^/admin/armd/resource/hall/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_armd_resource_hall_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'armd.hall.admin',  '_sonata_name' => 'admin_armd_resource_hall_delete',));
                    }

                    // admin_armd_resource_hall_export
                    if ($pathinfo === '/admin/armd/resource/hall/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'armd.hall.admin',  '_sonata_name' => 'admin_armd_resource_hall_export',  '_route' => 'admin_armd_resource_hall_export',);
                    }

                    // admin_armd_resource_hall_history
                    if (preg_match('#^/admin/armd/resource/hall/(?P<id>[^/]++)/history$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_armd_resource_hall_history')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::historyAction',  '_sonata_admin' => 'armd.hall.admin',  '_sonata_name' => 'admin_armd_resource_hall_history',));
                    }

                    // admin_armd_resource_hall_history_view_revision
                    if (preg_match('#^/admin/armd/resource/hall/(?P<id>[^/]++)/history/(?P<revision>[^/]++)/view$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_armd_resource_hall_history_view_revision')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::historyViewRevisionAction',  '_sonata_admin' => 'armd.hall.admin',  '_sonata_name' => 'admin_armd_resource_hall_history_view_revision',));
                    }

                }

                if (0 === strpos($pathinfo, '/admin/armd/resource/infrastructure')) {
                    // admin_armd_resource_infrastructure_list
                    if ($pathinfo === '/admin/armd/resource/infrastructure/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'armd.infrastructure.admin',  '_sonata_name' => 'admin_armd_resource_infrastructure_list',  '_route' => 'admin_armd_resource_infrastructure_list',);
                    }

                    // admin_armd_resource_infrastructure_create
                    if ($pathinfo === '/admin/armd/resource/infrastructure/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'armd.infrastructure.admin',  '_sonata_name' => 'admin_armd_resource_infrastructure_create',  '_route' => 'admin_armd_resource_infrastructure_create',);
                    }

                    // admin_armd_resource_infrastructure_batch
                    if ($pathinfo === '/admin/armd/resource/infrastructure/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'armd.infrastructure.admin',  '_sonata_name' => 'admin_armd_resource_infrastructure_batch',  '_route' => 'admin_armd_resource_infrastructure_batch',);
                    }

                    // admin_armd_resource_infrastructure_edit
                    if (preg_match('#^/admin/armd/resource/infrastructure/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_armd_resource_infrastructure_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'armd.infrastructure.admin',  '_sonata_name' => 'admin_armd_resource_infrastructure_edit',));
                    }

                    // admin_armd_resource_infrastructure_delete
                    if (preg_match('#^/admin/armd/resource/infrastructure/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_armd_resource_infrastructure_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'armd.infrastructure.admin',  '_sonata_name' => 'admin_armd_resource_infrastructure_delete',));
                    }

                    // admin_armd_resource_infrastructure_export
                    if ($pathinfo === '/admin/armd/resource/infrastructure/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'armd.infrastructure.admin',  '_sonata_name' => 'admin_armd_resource_infrastructure_export',  '_route' => 'admin_armd_resource_infrastructure_export',);
                    }

                    // admin_armd_resource_infrastructure_history
                    if (preg_match('#^/admin/armd/resource/infrastructure/(?P<id>[^/]++)/history$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_armd_resource_infrastructure_history')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::historyAction',  '_sonata_admin' => 'armd.infrastructure.admin',  '_sonata_name' => 'admin_armd_resource_infrastructure_history',));
                    }

                    // admin_armd_resource_infrastructure_history_view_revision
                    if (preg_match('#^/admin/armd/resource/infrastructure/(?P<id>[^/]++)/history/(?P<revision>[^/]++)/view$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_armd_resource_infrastructure_history_view_revision')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::historyViewRevisionAction',  '_sonata_admin' => 'armd.infrastructure.admin',  '_sonata_name' => 'admin_armd_resource_infrastructure_history_view_revision',));
                    }

                }

                if (0 === strpos($pathinfo, '/admin/armd/resource/guide-guide')) {
                    // admin_armd_resource_guide_guide_list
                    if ($pathinfo === '/admin/armd/resource/guide-guide/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'armd.guide.guide.admin',  '_sonata_name' => 'admin_armd_resource_guide_guide_list',  '_route' => 'admin_armd_resource_guide_guide_list',);
                    }

                    // admin_armd_resource_guide_guide_create
                    if ($pathinfo === '/admin/armd/resource/guide-guide/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'armd.guide.guide.admin',  '_sonata_name' => 'admin_armd_resource_guide_guide_create',  '_route' => 'admin_armd_resource_guide_guide_create',);
                    }

                    // admin_armd_resource_guide_guide_batch
                    if ($pathinfo === '/admin/armd/resource/guide-guide/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'armd.guide.guide.admin',  '_sonata_name' => 'admin_armd_resource_guide_guide_batch',  '_route' => 'admin_armd_resource_guide_guide_batch',);
                    }

                    // admin_armd_resource_guide_guide_edit
                    if (preg_match('#^/admin/armd/resource/guide\\-guide/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_armd_resource_guide_guide_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'armd.guide.guide.admin',  '_sonata_name' => 'admin_armd_resource_guide_guide_edit',));
                    }

                    // admin_armd_resource_guide_guide_delete
                    if (preg_match('#^/admin/armd/resource/guide\\-guide/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_armd_resource_guide_guide_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'armd.guide.guide.admin',  '_sonata_name' => 'admin_armd_resource_guide_guide_delete',));
                    }

                    // admin_armd_resource_guide_guide_export
                    if ($pathinfo === '/admin/armd/resource/guide-guide/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'armd.guide.guide.admin',  '_sonata_name' => 'admin_armd_resource_guide_guide_export',  '_route' => 'admin_armd_resource_guide_guide_export',);
                    }

                    // admin_armd_resource_guide_guide_history
                    if (preg_match('#^/admin/armd/resource/guide\\-guide/(?P<id>[^/]++)/history$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_armd_resource_guide_guide_history')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::historyAction',  '_sonata_admin' => 'armd.guide.guide.admin',  '_sonata_name' => 'admin_armd_resource_guide_guide_history',));
                    }

                    // admin_armd_resource_guide_guide_history_view_revision
                    if (preg_match('#^/admin/armd/resource/guide\\-guide/(?P<id>[^/]++)/history/(?P<revision>[^/]++)/view$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_armd_resource_guide_guide_history_view_revision')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::historyViewRevisionAction',  '_sonata_admin' => 'armd.guide.guide.admin',  '_sonata_name' => 'admin_armd_resource_guide_guide_history_view_revision',));
                    }

                    if (0 === strpos($pathinfo, '/admin/armd/resource/guide-guideitem')) {
                        // admin_armd_resource_guide_guideitem_list
                        if ($pathinfo === '/admin/armd/resource/guide-guideitem/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'armd.guide.item.admin',  '_sonata_name' => 'admin_armd_resource_guide_guideitem_list',  '_route' => 'admin_armd_resource_guide_guideitem_list',);
                        }

                        // admin_armd_resource_guide_guideitem_create
                        if ($pathinfo === '/admin/armd/resource/guide-guideitem/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'armd.guide.item.admin',  '_sonata_name' => 'admin_armd_resource_guide_guideitem_create',  '_route' => 'admin_armd_resource_guide_guideitem_create',);
                        }

                        // admin_armd_resource_guide_guideitem_batch
                        if ($pathinfo === '/admin/armd/resource/guide-guideitem/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'armd.guide.item.admin',  '_sonata_name' => 'admin_armd_resource_guide_guideitem_batch',  '_route' => 'admin_armd_resource_guide_guideitem_batch',);
                        }

                        // admin_armd_resource_guide_guideitem_edit
                        if (preg_match('#^/admin/armd/resource/guide\\-guideitem/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_armd_resource_guide_guideitem_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'armd.guide.item.admin',  '_sonata_name' => 'admin_armd_resource_guide_guideitem_edit',));
                        }

                        // admin_armd_resource_guide_guideitem_delete
                        if (preg_match('#^/admin/armd/resource/guide\\-guideitem/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_armd_resource_guide_guideitem_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'armd.guide.item.admin',  '_sonata_name' => 'admin_armd_resource_guide_guideitem_delete',));
                        }

                        // admin_armd_resource_guide_guideitem_export
                        if ($pathinfo === '/admin/armd/resource/guide-guideitem/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'armd.guide.item.admin',  '_sonata_name' => 'admin_armd_resource_guide_guideitem_export',  '_route' => 'admin_armd_resource_guide_guideitem_export',);
                        }

                        // admin_armd_resource_guide_guideitem_history
                        if (preg_match('#^/admin/armd/resource/guide\\-guideitem/(?P<id>[^/]++)/history$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_armd_resource_guide_guideitem_history')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::historyAction',  '_sonata_admin' => 'armd.guide.item.admin',  '_sonata_name' => 'admin_armd_resource_guide_guideitem_history',));
                        }

                        // admin_armd_resource_guide_guideitem_history_view_revision
                        if (preg_match('#^/admin/armd/resource/guide\\-guideitem/(?P<id>[^/]++)/history/(?P<revision>[^/]++)/view$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_armd_resource_guide_guideitem_history_view_revision')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::historyViewRevisionAction',  '_sonata_admin' => 'armd.guide.item.admin',  '_sonata_name' => 'admin_armd_resource_guide_guideitem_history_view_revision',));
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/armd/resource/guide-guidecategory')) {
                        // admin_armd_resource_guide_guidecategory_list
                        if ($pathinfo === '/admin/armd/resource/guide-guidecategory/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'armd.guide.category.admin',  '_sonata_name' => 'admin_armd_resource_guide_guidecategory_list',  '_route' => 'admin_armd_resource_guide_guidecategory_list',);
                        }

                        // admin_armd_resource_guide_guidecategory_create
                        if ($pathinfo === '/admin/armd/resource/guide-guidecategory/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'armd.guide.category.admin',  '_sonata_name' => 'admin_armd_resource_guide_guidecategory_create',  '_route' => 'admin_armd_resource_guide_guidecategory_create',);
                        }

                        // admin_armd_resource_guide_guidecategory_batch
                        if ($pathinfo === '/admin/armd/resource/guide-guidecategory/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'armd.guide.category.admin',  '_sonata_name' => 'admin_armd_resource_guide_guidecategory_batch',  '_route' => 'admin_armd_resource_guide_guidecategory_batch',);
                        }

                        // admin_armd_resource_guide_guidecategory_edit
                        if (preg_match('#^/admin/armd/resource/guide\\-guidecategory/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_armd_resource_guide_guidecategory_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'armd.guide.category.admin',  '_sonata_name' => 'admin_armd_resource_guide_guidecategory_edit',));
                        }

                        // admin_armd_resource_guide_guidecategory_delete
                        if (preg_match('#^/admin/armd/resource/guide\\-guidecategory/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_armd_resource_guide_guidecategory_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'armd.guide.category.admin',  '_sonata_name' => 'admin_armd_resource_guide_guidecategory_delete',));
                        }

                        // admin_armd_resource_guide_guidecategory_export
                        if ($pathinfo === '/admin/armd/resource/guide-guidecategory/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'armd.guide.category.admin',  '_sonata_name' => 'admin_armd_resource_guide_guidecategory_export',  '_route' => 'admin_armd_resource_guide_guidecategory_export',);
                        }

                        // admin_armd_resource_guide_guidecategory_history
                        if (preg_match('#^/admin/armd/resource/guide\\-guidecategory/(?P<id>[^/]++)/history$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_armd_resource_guide_guidecategory_history')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::historyAction',  '_sonata_admin' => 'armd.guide.category.admin',  '_sonata_name' => 'admin_armd_resource_guide_guidecategory_history',));
                        }

                        // admin_armd_resource_guide_guidecategory_history_view_revision
                        if (preg_match('#^/admin/armd/resource/guide\\-guidecategory/(?P<id>[^/]++)/history/(?P<revision>[^/]++)/view$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_armd_resource_guide_guidecategory_history_view_revision')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::historyViewRevisionAction',  '_sonata_admin' => 'armd.guide.category.admin',  '_sonata_name' => 'admin_armd_resource_guide_guidecategory_history_view_revision',));
                        }

                    }

                }

            }

            // sonata_user_impersonating
            if ($pathinfo === '/admin') {
                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminSecurityController::loginAction',  '_route' => 'sonata_user_impersonating',);
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

        }

        if (0 === strpos($pathinfo, '/media')) {
            if (0 === strpos($pathinfo, '/media/gallery')) {
                // sonata_media_gallery_index
                if (rtrim($pathinfo, '/') === '/media/gallery') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'sonata_media_gallery_index');
                    }

                    return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryController::indexAction',  '_route' => 'sonata_media_gallery_index',);
                }

                // sonata_media_gallery_view
                if (0 === strpos($pathinfo, '/media/gallery/view') && preg_match('#^/media/gallery/view/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_media_gallery_view')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryController::viewAction',));
                }

            }

            // sonata_media_view
            if (0 === strpos($pathinfo, '/media/view') && preg_match('#^/media/view/(?P<id>[^/]++)(?:/(?P<format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_media_view')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaController::viewAction',  'format' => 'reference',));
            }

            // sonata_media_download
            if (0 === strpos($pathinfo, '/media/download') && preg_match('#^/media/download/(?P<id>[^/]++)(?:/(?P<format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_media_download')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaController::downloadAction',  'format' => 'reference',));
            }

        }

        if (0 === strpos($pathinfo, '/exhibits')) {
            // get_exhibits
            if (preg_match('#^/exhibits(?:/(?P<_locale>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?)?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_get_exhibits;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_exhibits')), array (  '_controller' => 'Armd\\ResourceBundle\\Controller\\ExhibitController::cgetAction',  '_format' => 'json',  '_locale' => 'ru',));
            }
            not_get_exhibits:

            // head_exhibit
            if (preg_match('#^/exhibits(?:/(?P<_locale>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?)?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'HEAD') {
                    $allow[] = 'HEAD';
                    goto not_head_exhibit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'head_exhibit')), array (  '_controller' => 'Armd\\ResourceBundle\\Controller\\ExhibitController::headAction',  '_format' => 'json',  '_locale' => 'ru',));
            }
            not_head_exhibit:

        }

        if (0 === strpos($pathinfo, '/halls')) {
            // get_halls
            if (preg_match('#^/halls(?:/(?P<_locale>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?)?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_get_halls;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_halls')), array (  '_controller' => 'Armd\\ResourceBundle\\Controller\\HallController::cgetAction',  '_format' => 'json',  '_locale' => 'ru',));
            }
            not_get_halls:

            // head_hall
            if (preg_match('#^/halls(?:/(?P<_locale>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?)?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'HEAD') {
                    $allow[] = 'HEAD';
                    goto not_head_hall;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'head_hall')), array (  '_controller' => 'Armd\\ResourceBundle\\Controller\\HallController::headAction',  '_format' => 'json',  '_locale' => 'ru',));
            }
            not_head_hall:

        }

        if (0 === strpos($pathinfo, '/guides')) {
            // get_guide
            if (preg_match('#^/guides/(?P<id>\\d+)(?:/(?P<_locale>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?)?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_get_guide;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_guide')), array (  '_controller' => 'Armd\\ResourceBundle\\Controller\\GuideController::getAction',  '_format' => 'json',  '_locale' => 'ru',));
            }
            not_get_guide:

            // head_guide
            if (preg_match('#^/guides/(?P<id>[^/]++)(?:/(?P<_locale>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?)?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'HEAD') {
                    $allow[] = 'HEAD';
                    goto not_head_guide;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'head_guide')), array (  '_controller' => 'Armd\\ResourceBundle\\Controller\\GuideController::headAction',  '_format' => 'json',  '_locale' => 'ru',));
            }
            not_head_guide:

            // get_guides
            if (preg_match('#^/guides(?:/(?P<_locale>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?)?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_get_guides;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_guides')), array (  '_controller' => 'Armd\\ResourceBundle\\Controller\\GuideController::cgetAction',  '_format' => 'json',  '_locale' => 'ru',));
            }
            not_get_guides:

            // head_guides
            if (preg_match('#^/guides(?:/(?P<_locale>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?)?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'HEAD') {
                    $allow[] = 'HEAD';
                    goto not_head_guides;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'head_guides')), array (  '_controller' => 'Armd\\ResourceBundle\\Controller\\GuideController::cheadAction',  '_format' => 'json',  '_locale' => 'ru',));
            }
            not_head_guides:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
