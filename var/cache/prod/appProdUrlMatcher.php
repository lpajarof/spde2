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

            // r_estudiantes
            if ($pathinfo === '/admin/estudiantes') {
                return array (  '_controller' => 'AppBundle\\Controller\\AdminController::estudiantesAction',  '_route' => 'r_estudiantes',);
            }

            // thdb_estudiantes
            if ($pathinfo === '/admin/thdb_estudiantes') {
                return array (  '_controller' => 'AppBundle\\Controller\\AdminController::estudiantesTablaAction',  '_route' => 'thdb_estudiantes',);
            }

            if (0 === strpos($pathinfo, '/admin/estudiantes')) {
                // estudiantesAdd
                if ($pathinfo === '/admin/estudiantes/add') {
                    return array (  '_controller' => 'AppBundle\\Controller\\AdminController::estudiantesAdd',  '_route' => 'estudiantesAdd',);
                }

                // estudiantesMod
                if ($pathinfo === '/admin/estudiantes/mod') {
                    return array (  '_controller' => 'AppBundle\\Controller\\AdminController::estudiantesMod',  '_route' => 'estudiantesMod',);
                }

            }

            // r_caracteristicas
            if ($pathinfo === '/admin/caracterisiticas') {
                return array (  '_controller' => 'AppBundle\\Controller\\AdminController::caracterisiticasAction',  '_route' => 'r_caracteristicas',);
            }

            // thdb_caracteristica
            if ($pathinfo === '/admin/thdb_caracteristica') {
                return array (  '_controller' => 'AppBundle\\Controller\\AdminController::caracteristicasTablaAction',  '_route' => 'thdb_caracteristica',);
            }

            if (0 === strpos($pathinfo, '/admin/c')) {
                if (0 === strpos($pathinfo, '/admin/caracteristicas')) {
                    // caracteristicasAdd
                    if ($pathinfo === '/admin/caracteristicas/add') {
                        return array (  '_controller' => 'AppBundle\\Controller\\AdminController::caracteristicasAdd',  '_route' => 'caracteristicasAdd',);
                    }

                    // caracteristicasMod
                    if ($pathinfo === '/admin/caracteristicas/mod') {
                        return array (  '_controller' => 'AppBundle\\Controller\\AdminController::caracteristicasModAction',  '_route' => 'caracteristicasMod',);
                    }

                    // caracteristicasDel
                    if ($pathinfo === '/admin/caracteristicas/del') {
                        return array (  '_controller' => 'AppBundle\\Controller\\AdminController::caracteristicasDelAction',  '_route' => 'caracteristicasDel',);
                    }

                }

                // r_clasificacion
                if ($pathinfo === '/admin/clasificacion') {
                    return array (  '_controller' => 'AppBundle\\Controller\\AdminController::clasificacionAction',  '_route' => 'r_clasificacion',);
                }

            }

            // thdb_clasificacion
            if ($pathinfo === '/admin/thdb_clasificacion') {
                return array (  '_controller' => 'AppBundle\\Controller\\AdminController::clasificacionTablaAction',  '_route' => 'thdb_clasificacion',);
            }

            if (0 === strpos($pathinfo, '/admin/clasificacion/clasificacion')) {
                // clasificacionAdd
                if ($pathinfo === '/admin/clasificacion/clasificacionAdd') {
                    return array (  '_controller' => 'AppBundle\\Controller\\AdminController::clasificacionAddAction',  '_route' => 'clasificacionAdd',);
                }

                // clasificacionMod
                if ($pathinfo === '/admin/clasificacion/clasificacionMod') {
                    return array (  '_controller' => 'AppBundle\\Controller\\AdminController::clasificacionModAction',  '_route' => 'clasificacionMod',);
                }

                // clasificacionDel
                if ($pathinfo === '/admin/clasificacion/clasificacionDel') {
                    return array (  '_controller' => 'AppBundle\\Controller\\AdminController::clasificacionDelAction',  '_route' => 'clasificacionDel',);
                }

            }

            // r_entrenamiento
            if ($pathinfo === '/admin/entrenamiento') {
                return array (  '_controller' => 'AppBundle\\Controller\\AdminController::entrenamientoAction',  '_route' => 'r_entrenamiento',);
            }

            // thdb_entrenamiento
            if ($pathinfo === '/admin/thdb_entrenamiento') {
                return array (  '_controller' => 'AppBundle\\Controller\\AdminController::entrenamientoTablaAction',  '_route' => 'thdb_entrenamiento',);
            }

            if (0 === strpos($pathinfo, '/admin/entrenamiento/entrenamiento')) {
                // entrenamientoAdd
                if ($pathinfo === '/admin/entrenamiento/entrenamientoAdd') {
                    return array (  '_controller' => 'AppBundle\\Controller\\AdminController::entrenamientoAddAction',  '_route' => 'entrenamientoAdd',);
                }

                // entrenamientoMod
                if ($pathinfo === '/admin/entrenamiento/entrenamientoMod') {
                    return array (  '_controller' => 'AppBundle\\Controller\\AdminController::entrenamientoModAction',  '_route' => 'entrenamientoMod',);
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
