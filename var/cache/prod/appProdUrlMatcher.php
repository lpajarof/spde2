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

            if (0 === strpos($pathinfo, '/admin/t')) {
                // r_tipousuario
                if ($pathinfo === '/admin/tipousuario') {
                    return array (  '_controller' => 'AppBundle\\Controller\\AdminController::tipousuarioAction',  '_route' => 'r_tipousuario',);
                }

                // thdb_tipoUsuarios
                if ($pathinfo === '/admin/thdb_tipoUsuarios') {
                    return array (  '_controller' => 'AppBundle\\Controller\\AdminController::tipoUsuariosTablaAction',  '_route' => 'thdb_tipoUsuarios',);
                }

                if (0 === strpos($pathinfo, '/admin/tipousuario')) {
                    // tipousuarioAdd
                    if ($pathinfo === '/admin/tipousuario/add') {
                        return array (  '_controller' => 'AppBundle\\Controller\\AdminController::tipousuarioAddAction',  '_route' => 'tipousuarioAdd',);
                    }

                    // tipousuarioMod
                    if ($pathinfo === '/admin/tipousuarios/mod') {
                        return array (  '_controller' => 'AppBundle\\Controller\\AdminController::tipousuarioModAction',  '_route' => 'tipousuarioMod',);
                    }

                }

            }

            // r_programas
            if ($pathinfo === '/admin/programas') {
                return array (  '_controller' => 'AppBundle\\Controller\\AdminController::programasAction',  '_route' => 'r_programas',);
            }

            // thdb_programas
            if ($pathinfo === '/admin/thdb_programas') {
                return array (  '_controller' => 'AppBundle\\Controller\\AdminController::programasTablaAction',  '_route' => 'thdb_programas',);
            }

            if (0 === strpos($pathinfo, '/admin/programas')) {
                // programasAdd
                if ($pathinfo === '/admin/programas/add') {
                    return array (  '_controller' => 'AppBundle\\Controller\\AdminController::programasAddAction',  '_route' => 'programasAdd',);
                }

                // programasMod
                if ($pathinfo === '/admin/programas/mod') {
                    return array (  '_controller' => 'AppBundle\\Controller\\AdminController::programasModAction',  '_route' => 'programasMod',);
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
