<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Tipousuario;
use AppBundle\Entity\Programa;
use AppBundle\Entity\Estudiante;

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
     * Tipousuario
     */
    
    /**
     * Llama a la plantilla de visualiza el listado de tipo de usuarios
     * @Route("/admin/tipousuario", name="r_tipousuario")
     */
    public function tipousuarioAction(Request $request)
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
     * Argra regitros a la entidad tipousuario
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
         
        try{
            $em = $this->getDoctrine()->getManager();
            $v_tipousuario = $em->getRepository('AppBundle:Tipousuario')->find($request->request->get('idtipousuario'));

            $v_tipousuario->setTipousuario($request->request->get('tipousuario'));
            $v_tipousuario->setDescripcion($request->request->get('descripcion'));

            $em->persist($v_tipousuario);
            $em->flush();

            return new Response('<div class="alert alert-success alert-dismissible fade in" role="alert">'
                                . 'Los datos han sido actualizados satisfactoriamente'
                                . '</div>');
        } catch (\Exception $e){
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
     * Programas
     */
    
    /**
     * Llama plantilla que visualiza listado de programas
     * @Route("/admin/programas", name="r_programas")
     */
    public function programasAction(Request $request)
    {        
        return $this->render('admin/programas/vw_programas.html.twig');
    }
    
    /**
     * Devuelve en formato JSON tabla de datos 
     * @Route("/admin/thdb_programas", name="thdb_programas")
     * @author Leandro Pájaro Fuentes lpajarof@gmail.com
     */
    public function programasTablaAction()
    {
        $v_programas = $this->getDoctrine()
                ->getRepository('AppBundle:Programa')
                ->listaJSON();        
       
       return new Response($v_programas);
    }
    
    /**
    * Agrega programa en la tabla programas
    * @Route("/admin/programas/add", name="programasAdd")
    */
    public function programasAddAction(Request $request) 
    {
        try{
        
            $v_programas = new Programa();                                  
            $v_programas->setCodigo($request->request->get('codigo'));
            $v_programas->setDescripcion($request->request->get('descripcion'));

            $em = $this->getDoctrine()->getManager();
            $em->persist($v_programas);
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
     * Modifica datos de la entidad programa
     * @Route("/admin/programas/mod", name="programasMod")
     * 
     */
    public function programasModAction(Request $request) 
    {
        try{                                             
            $em = $this->getDoctrine()->getManager();
            $v_programas = $em->getRepository('AppBundle:Programa')->find($request->request->get('idprograma'));

            $v_programas->setCodigo($request->request->get('codigo'));
            $v_programas->setDescripcion($request->request->get('descripcion'));

            $em->persist($v_programas);
            $em->flush();

            return new Response('<div class="alert alert-success alert-dismissible fade in" role="alert">'
                                . 'Los datos han sido actualizados satisfactoriamente'
                                . '</div>');
        } catch (\Exception $e){
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
     * Estudiante
     */
    
    /**
    * Llama plantilla que visualiza listado de estudiantes
    * @Route("/admin/estudiantes", name="r_estudiantes")
    */
    public function estudiantesAction(Request $request)
    {        
        return $this->render('admin/estudiantes/vw_estudiantes.html.twig');
    }
    
    /**
    * Devuelve en formato JSON tabla de datos 
    * @Route("/admin/thdb_estudiantes", name="thdb_estudiantes")
    */
    public function estudiantesTablaAction()
    {
        $v_estudiante = $this->getDoctrine()
                ->getRepository('AppBundle:Estudiante')
                ->listaJSON();        
       
       return new Response($v_estudiante);
    }
    
    
}
