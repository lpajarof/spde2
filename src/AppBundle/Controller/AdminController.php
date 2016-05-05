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
     * @Route("/admin/modelo", name="modelo")
     */
    public function indexAction(Request $request)
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
     * @Route("/admin/thdb_tipoUsuarios", name="thdb_tipoUsuarios")
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
    
    
            
}
