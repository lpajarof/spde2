<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
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
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/admin')) {
            // admin
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'admin');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\AdminController::indexAction',  '_route' => 'admin',);
            }

            // modelo
            if ($pathinfo === '/admin/modelo') {
                return array (  '_controller' => 'AppBundle\\Controller\\AdminController::modeloAction',  '_route' => 'modelo',);
            }

            // parametros
            if ($pathinfo === '/admin/parametros') {
                return array (  '_controller' => 'AppBundle\\Controller\\AdminController::parametrosAction',  '_route' => 'parametros',);
            }

            if (0 === strpos($pathinfo, '/admin/t')) {
                // thdb_tipoUsuarios
                if ($pathinfo === '/admin/thdb_tipoUsuarios') {
                    return array (  '_controller' => 'AppBundle\\Controller\\AdminController::tipoUsuariosTablaAction',  '_route' => 'thdb_tipoUsuarios',);
                }

                // tipousuariosAdd
                if ($pathinfo === '/admin/tipousuarios/add') {
                    return array (  '_controller' => 'AppBundle\\Controller\\AdminController::tipousuariosAddAction',  '_route' => 'tipousuariosAdd',);
                }

            }

            if (0 === strpos($pathinfo, '/admin/estudiantes')) {
                // estudiantesList
                if ($pathinfo === '/admin/estudiantes/list') {
                    return array (  '_controller' => 'AppBundle\\Controller\\AdminController::estudiantesListAction',  '_route' => 'estudiantesList',);
                }

                // estudiantesForm
                if ($pathinfo === '/admin/estudiantes/form') {
                    return array (  '_controller' => 'AppBundle\\Controller\\AdminController::estudiantesFormAction',  '_route' => 'estudiantesForm',);
                }

                // estudiantesAdd
                if ($pathinfo === '/admin/estudiantes/add') {
                    return array (  '_controller' => 'AppBundle\\Controller\\AdminController::estudiantesAddAction',  '_route' => 'estudiantesAdd',);
                }

            }

        }

        // app_default_admin
        if ($pathinfo === '/coordinador') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::adminAction',  '_route' => 'app_default_admin',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            // login
            if ($pathinfo === '/login') {
                return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
