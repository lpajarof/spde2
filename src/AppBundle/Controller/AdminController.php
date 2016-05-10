<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Tipousuario;
use AppBundle\Entity\TipousuarioRepository;

class AdminController extends Controller
{
    /**
     * @Route("/admin/", name="admin")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('admin/index.html.twig');
    }
    
    /**
     * @Route("/admin/modelo", name="modelo")
     */
    public function modeloAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('admin/modelo/index.html.twig');
    }

    /**
     * @Route("/admin/parametros", name="parametros")
     */
    public function parametrosAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('admin/parametros/parametros.html.twig');
    }
    
    /**
     * Devuelve en formato JSON tabla de datos 
     * @Route("/admin/thdb_tipoUsuarios", name="thdb_tipoUsuarios")
     * @author Leandro Pájaro Fuentes lpajarof@gmail.com
     */
    public function tipoUsuariosTablaAction()
    {
        $v_tipoUsuarios = $this->getDoctrine()
                ->getRepository('AppBundle:Tipousuario')
                ->listaJSON();        
       
       return new Response($v_tipoUsuarios);
    }
    
    /**
    * @Route("/admin/tipousuarios/add", name="tipousuariosAdd")
    */
    public function tipousuariosAddAction(Request $request) {
            
        $v_tipousuario = new Tipousuario();
                                   
        $v_tipousuario->setTipousuario($request->request->get('tipoUsuario'));
        $v_tipousuario->setDescripcion($request->request->get('descripcion'));
        
        $em = $this->getDoctrine()->getManager();
        $em->persist($v_tipousuario);
        $em->flush();

              
        return $this->redirectToRoute('parametros');

    }
    
    /**
     * Modifica datos de la entidad tipousuarios
     * @Route("/admin/tipousuarios/mod", name="tipousuariosMod")
     * 
     * @author Leandro Pájaro Fuentes lpajarof@gmail.com
     */
    public function tipousuariosModAction(Request $request) {
                                                     
        $em = $this->getDoctrine()->getManager();
        $v_tipousuario = $em->getRepository('AppBundle:Tipousuario')->find($request->request->get('idtipousuario'));
        
        $v_tipousuario->setTipousuario($request->request->get('tipousuario'));
        $v_tipousuario->setDescripcion($request->request->get('descripcion'));
        
        $em->persist($v_tipousuario);
        $em->flush();
        
        return new Response("Los datos han sido actualizados satisfactoriamente");
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
    
    
            
}
