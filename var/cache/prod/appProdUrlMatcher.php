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
            // modelo
            if ($pathinfo === '/admin/modelo') {
                return array (  '_controller' => 'AppBundle\\Controller\\AdminController::indexAction',  '_route' => 'modelo',);
            }

            // inicioAdmin
            if ($pathinfo === '/admin') {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'inicioAdmin',);
            }

            // estudiantesAdmin
            if ($pathinfo === '/admin/estudiantes') {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::estudiantesAdminAction',  '_route' => 'estudiantesAdmin',);
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
