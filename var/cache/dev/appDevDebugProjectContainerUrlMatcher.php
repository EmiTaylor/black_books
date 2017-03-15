<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

                // _profiler_open_file
                if ($pathinfo === '/_profiler/open') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // admin_index
            if (rtrim($pathinfo, '/') === '/admin') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_admin_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'admin_index');
                }

                return array (  '_controller' => 'LibraryBundle\\Controller\\AdminController::indexAction',  '_route' => 'admin_index',);
            }
            not_admin_index:

            if (0 === strpos($pathinfo, '/admin/books')) {
                // admin_books_index
                if ($pathinfo === '/admin/books') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_books_index;
                    }

                    return array (  '_controller' => 'LibraryBundle\\Controller\\AdminController::booksAction',  '_route' => 'admin_books_index',);
                }
                not_admin_books_index:

                // admin_books_show
                if (0 === strpos($pathinfo, '/admin/books/show') && preg_match('#^/admin/books/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_books_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_books_show')), array (  '_controller' => 'LibraryBundle\\Controller\\AdminController::showBookAction',));
                }
                not_admin_books_show:

                // admin_books_new
                if ($pathinfo === '/admin/books/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_admin_books_new;
                    }

                    return array (  '_controller' => 'LibraryBundle\\Controller\\AdminController::newAction',  '_route' => 'admin_books_new',);
                }
                not_admin_books_new:

                // admin_books_edit
                if (preg_match('#^/admin/books/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_admin_books_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_books_edit')), array (  '_controller' => 'LibraryBundle\\Controller\\AdminController::editAction',));
                }
                not_admin_books_edit:

                // admin_books_delete
                if (preg_match('#^/admin/books/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_admin_books_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_books_delete')), array (  '_controller' => 'LibraryBundle\\Controller\\AdminController::deleteAction',));
                }
                not_admin_books_delete:

            }

            if (0 === strpos($pathinfo, '/adminbooks')) {
                // adminbooks_index
                if (rtrim($pathinfo, '/') === '/adminbooks') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_adminbooks_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'adminbooks_index');
                    }

                    return array (  '_controller' => 'LibraryBundle\\Controller\\BooksController::indexAction',  '_route' => 'adminbooks_index',);
                }
                not_adminbooks_index:

                // adminbooks_new
                if ($pathinfo === '/adminbooks/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_adminbooks_new;
                    }

                    return array (  '_controller' => 'LibraryBundle\\Controller\\BooksController::newAction',  '_route' => 'adminbooks_new',);
                }
                not_adminbooks_new:

                // adminbooks_show
                if (preg_match('#^/adminbooks/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_adminbooks_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminbooks_show')), array (  '_controller' => 'LibraryBundle\\Controller\\BooksController::showAction',));
                }
                not_adminbooks_show:

                // adminbooks_edit
                if (preg_match('#^/adminbooks/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_adminbooks_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminbooks_edit')), array (  '_controller' => 'LibraryBundle\\Controller\\BooksController::editAction',));
                }
                not_adminbooks_edit:

                // adminbooks_delete
                if (preg_match('#^/adminbooks/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_adminbooks_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminbooks_delete')), array (  '_controller' => 'LibraryBundle\\Controller\\BooksController::deleteAction',));
                }
                not_adminbooks_delete:

            }

            if (0 === strpos($pathinfo, '/admincategories')) {
                // admincategories_index
                if (rtrim($pathinfo, '/') === '/admincategories') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admincategories_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admincategories_index');
                    }

                    return array (  '_controller' => 'LibraryBundle\\Controller\\CategoriesController::indexAction',  '_route' => 'admincategories_index',);
                }
                not_admincategories_index:

                // admincategories_new
                if ($pathinfo === '/admincategories/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_admincategories_new;
                    }

                    return array (  '_controller' => 'LibraryBundle\\Controller\\CategoriesController::newAction',  '_route' => 'admincategories_new',);
                }
                not_admincategories_new:

                // admincategories_show
                if (preg_match('#^/admincategories/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admincategories_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admincategories_show')), array (  '_controller' => 'LibraryBundle\\Controller\\CategoriesController::showAction',));
                }
                not_admincategories_show:

                // admincategories_edit
                if (preg_match('#^/admincategories/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_admincategories_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admincategories_edit')), array (  '_controller' => 'LibraryBundle\\Controller\\CategoriesController::editAction',));
                }
                not_admincategories_edit:

                // admincategories_delete
                if (preg_match('#^/admincategories/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_admincategories_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admincategories_delete')), array (  '_controller' => 'LibraryBundle\\Controller\\CategoriesController::deleteAction',));
                }
                not_admincategories_delete:

            }

        }

        // library_consulting_books
        if ($pathinfo === '/books') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_library_consulting_books;
            }

            return array (  '_controller' => 'LibraryBundle\\Controller\\ConsultingController::booksAction',  '_route' => 'library_consulting_books',);
        }
        not_library_consulting_books:

        // library_consulting_cat
        if (0 === strpos($pathinfo, '/cat') && preg_match('#^/cat/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_library_consulting_cat;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'library_consulting_cat')), array (  '_controller' => 'LibraryBundle\\Controller\\ConsultingController::catAction',));
        }
        not_library_consulting_cat:

        // detailbooks
        if (0 === strpos($pathinfo, '/books') && preg_match('#^/books/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_detailbooks;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'detailbooks')), array (  '_controller' => 'LibraryBundle\\Controller\\ConsultingController::bookAction',));
        }
        not_detailbooks:

        if (0 === strpos($pathinfo, '/crud')) {
            // crud_index
            if (rtrim($pathinfo, '/') === '/crud') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_crud_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'crud_index');
                }

                return array (  '_controller' => 'LibraryBundle\\Controller\\CrudController::indexAction',  '_route' => 'crud_index',);
            }
            not_crud_index:

            // crud_create
            if ($pathinfo === '/crud/create') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_crud_create;
                }

                return array (  '_controller' => 'LibraryBundle\\Controller\\CrudController::createAction',  '_route' => 'crud_create',);
            }
            not_crud_create:

            // crud_read
            if (0 === strpos($pathinfo, '/crud/read') && preg_match('#^/crud/read/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_crud_read;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'crud_read')), array (  '_controller' => 'LibraryBundle\\Controller\\CrudController::readAction',));
            }
            not_crud_read:

            // crud_update
            if ($pathinfo === '/crud/update') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_crud_update;
                }

                return array (  '_controller' => 'LibraryBundle\\Controller\\CrudController::updateAction',  '_route' => 'crud_update',);
            }
            not_crud_update:

            // crud_books_delete
            if ($pathinfo === '/crud/books/delete') {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_crud_books_delete;
                }

                return array (  '_controller' => 'LibraryBundle\\Controller\\CrudController::deleteAction',  '_route' => 'crud_books_delete',);
            }
            not_crud_books_delete:

        }

        // library_default_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'library_default_index');
            }

            return array (  '_controller' => 'LibraryBundle\\Controller\\DefaultController::indexAction',  '_route' => 'library_default_index',);
        }

        // library_default_cat
        if ($pathinfo === '/cat') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_library_default_cat;
            }

            return array (  '_controller' => 'LibraryBundle\\Controller\\DefaultController::catAction',  '_route' => 'library_default_cat',);
        }
        not_library_default_cat:

        // homepage
        if ($pathinfo === '/index') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
