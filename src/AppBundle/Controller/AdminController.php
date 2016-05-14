<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Tipousuario;
use AppBundle\Entity\TipousuarioRepository;

/**
 * Controlador funciones administrativas de la aplciación
 */
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
     * @Route("/admin/tipousuario", name="r_tipousuario")
     */
    public function parametrosAction(Request $request)
    {        
        return $this->render('admin/tipousuario/vw_tipousuario.html.twig');
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
    * @Route("/admin/tipousuario/add", name="tipousuarioAdd")
    */
    public function tipousuarioAddAction(Request $request) 
    {
        try{
        
            $v_tipousuario = new Tipousuario();                                  
            $v_tipousuario->setTipousuario($request->request->get('tipousuario'));
            $v_tipousuario->setDescripcion($request->request->get('descripcion'));

            $em = $this->getDoctrine()->getManager();
            $em->persist($v_tipousuario);
            $em->flush();

            return new Response('<div class="alert alert-success alert-dismissible fade in" role="alert">'
                                . 'Los datos han sido aregados satisfactoriamente'
                                . '</div>');
            
        }  catch (\Exception $e) {
            
           
        switch (get_class($e)) {
            case 'Doctrine\DBAL\Exception\UniqueConstraintViolationException':
                return new Response('DBAL Exception<br/>');
                
            case 'Doctrine\DBA\DBAException':
                return new Response('DBA Exception<br/>');               
            default:
                return new Response($e->getMessage().'--'.get_class($e));                
        }
    }

    }
    
    /**
     * Modifica datos de la entidad tipousuarios
     * @Route("/admin/tipousuarios/mod", name="tipousuarioMod")
     * 
     */
    public function tipousuarioModAction(Request $request) 
    {
                                                     
        $em = $this->getDoctrine()->getManager();
        $v_tipousuario = $em->getRepository('AppBundle:Tipousuario')->find($request->request->get('idtipousuario'));
        
        $v_tipousuario->setTipousuario($request->request->get('tipousuario'));
        $v_tipousuario->setDescripcion($request->request->get('descripcion'));
        
        $em->persist($v_tipousuario);
        $em->flush();
        
        return new Response('<div class="alert alert-success alert-dismissible fade in" role="alert">'
                            . 'Los datos han sido actualizados satisfactoriamente'
                            . '</div>');
    }
    

        
}
