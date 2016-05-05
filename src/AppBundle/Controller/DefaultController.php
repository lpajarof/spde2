<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Estudiante;


class DefaultController extends Controller
{
    /**
     * @Route("/admin", name="inicioAdmin")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('admin/index.html.twig');
    }
    
     /**
     * @Route("/admin/estudiantes/list", name="estudiantesList")
     */
    public function estudiantesListAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('admin/estudiantes/estudiantes.html.twig');
        //return $this->render('admin.html.twig');
    }
    
        /**
         * @Route("/admin/estudiantes/form", name="estudiantesForm")
         */
        public function estudiantesFormAction(Request $request)
        {
            // replace this example code with whatever you need
            return $this->render('admin/estudiantes/estudiantesForm.html.twig');
            //return $this->render('admin.html.twig');
        }
        
        /**
         * @Route("/admin/estudiantes/add", name="estudiantesAdd")
         */
        public function estudiantesAddAction(Request $request)
        {
            
            $v_estudiante = new Estudiante();
                                   
            echo 'tes '.$request->request->get('identificacion');
           
           $v_estudiante->setTipoidentificacion($request->request->get('tipoIdentificacion'));
           $v_estudiante->setIdentificacion($request->request->get('identificacion'));
           

        }
        

     /**
     * @Route("/coordinador")
     */
    public function adminAction()
    {
        return new Response('<html><body>Admin page!</body></html>');
    }
    
    
}
