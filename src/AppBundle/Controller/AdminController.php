<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Tipousuario;
use AppBundle\Entity\Programa;
use AppBundle\Entity\Estudiante;
use AppBundle\Entity\Caracteristica;
use AppBundle\Entity\Clasificacion;
use AppBundle\Entity\Entrenamiento;

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
        $em = $this->getDoctrine()->getManager();
        
        $v_tipoidentificacion = $em->getRepository('AppBundle:Tipoidentificacion')->findAll();
        $v_programas = $em->getRepository('AppBundle:Programa')->findAll();
            
        return $this->render('admin/estudiantes/vw_estudiantes.html.twig',array('tipoidentificacion'=>$v_tipoidentificacion,'programas'=>$v_programas));
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
       
    /**
     * Agrega estudiantes a la tabla estudiante
     * @Route("/admin/estudiantes/add", name="estudiantesAdd")
     */
    public function estudiantesAdd(Request $request)
    {
        try{
            
            $em = $this->getDoctrine()->getManager();
            $v_programa = $em->getRepository('AppBundle:Programa')->find($request->request->get('programa'));
            $v_tipoidentificacion = $em->getRepository('AppBundle:Tipoidentificacion')->find($request->request->get('tipoidentificacion'));
            
            $v_estudiante = new Estudiante();
            $v_estudiante->setCodigo($request->request->get('codigo'));
            $v_estudiante->setPrograma($v_programa);
            $v_estudiante->setTipoidentificacion($v_tipoidentificacion);
            $v_estudiante->setIdentificacion($request->request->get('identificacion'));
            $v_estudiante->setNombres($request->request->get('nombres'));
            $v_estudiante->setApellidos($request->request->get('apellidos'));
            $v_estudiante->setEmail($request->request->get('email'));
            $v_estudiante->setTelefono($request->request->get('telefono'));
            $v_estudiante->setDireccion($request->request->get('direccion'));
                        
            $em->persist($v_estudiante);
            $em->flush();
            
            return New Response('<div class="alert alert-success alert-dismissible fade in" role="alert">'
                                . 'Los datos han sido aregados satisfactoriamente'
                                . '</div>');
            
        } catch (\Exception $e) {
             switch (get_class($e)) {
                case 'Doctrine\DBAL\Exception\UniqueConstraintViolationException':
                    return new Response('DBAL Exception<br/>');
                
                case 'Doctrine\DBA\DBAException':
                    return new Response('DBA Exception<br/>');               
                    
                case 'PDOException':
                    return new Response('DBA Exception<br/>'.$e->getMessage());
                    
                default:
                    return new Response($e->getMessage().'--'.get_class($e));                
            }
        }
        
    }
    
    /**
     * Modifica datos de estudiantes
     * @Route("/admin/estudiantes/mod", name="estudiantesMod")
     */
    public function estudiantesMod(Request $request)
    {
        try{            
            $em = $this->getDoctrine()->getManager();
            
            $v_programa = $em->getRepository('AppBundle:Programa')->find($request->request->get('programa'));
            $v_tipoidentificacion = $em->getRepository('AppBundle:Tipoidentificacion')->find($request->request->get('tipoidentificacion'));
            
            $v_estudiante = $em->getRepository('AppBundle:Estudiante')->find($request->request->get('idestudiante'));
            $v_estudiante->setCodigo($request->request->get('codigo'));
            $v_estudiante->setPrograma($v_programa);
            $v_estudiante->setTipoidentificacion($v_tipoidentificacion);
            $v_estudiante->setIdentificacion($request->request->get('identificacion'));
            $v_estudiante->setNombres($request->request->get('nombres'));
            $v_estudiante->setApellidos($request->request->get('apellidos'));
            $v_estudiante->setEmail($request->request->get('email'));
            $v_estudiante->setTelefono($request->request->get('telefono'));
            $v_estudiante->setDireccion($request->request->get('direccion'));
            
            $em->persist($v_estudiante);
            $em->flush();

            return new Response('<div class="alert alert-success alert-dismissible fade in" role="alert">'
                                . 'Los datos han sido actualizados satisfactoriamente'
                                . '</div>');
            
        } catch (\Exception $e) {
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
     * Caracteristicas
     */
    
    /**
     * Llama a la plantilla que lista las caracteristias 
     * @Route("/admin/caracterisiticas", name="r_caracteristicas")
     */
    
    public function caracterisiticasAction()
    {
        return $this->render("admin/caracteristicas/vw_caracteristicas.html.twig");
    }
    
    /**
     * Devuelve en formato JSON tabla de datos 
     * @Route("/admin/thdb_caracteristica",name="thdb_caracteristica")
     */
    
    public function caracteristicasTablaAction()
    {
        $v_caracterisitica = $this->getDoctrine()
                ->getRepository("AppBundle:Caracteristica")
                ->listaJSON();
        return new Response($v_caracterisitica);
    }
    
    
    /**
    * Agrega nueva caracteristia
    * @Route("/admin/caracteristicas/add", name="caracteristicasAdd")
    */
    public function caracteristicasAdd(Request $request)
    {
        try{
            
            $em = $this->getDoctrine()->getManager();
                        
            $v_caracteristica = new Caracteristica();
            $v_caracteristica->setDescripcion($request->request->get('descripcion'));
                        
            $em->persist($v_caracteristica);
            $em->flush();
            
            return New Response('<div class="alert alert-success alert-dismissible fade in" role="alert">'
                                . 'Los datos han sido aregados satisfactoriamente'
                                . '</div>');
            
        } catch (\Exception $e) {
             switch (get_class($e)) {
                case 'Doctrine\DBAL\Exception\UniqueConstraintViolationException':
                    return new Response('DBAL Exception<br/>');
                
                case 'Doctrine\DBA\DBAException':
                    return new Response('DBA Exception<br/>');               
                    
                case 'PDOException':
                    return new Response('DBA Exception<br/>'.$e->getMessage());
                    
                default:
                    return new Response($e->getMessage().'--'.get_class($e));                
            }
        }
        
    }
    
    /**
     * Modifica datos de característica
     * @Route("/admin/caracteristicas/mod",name="caracteristicasMod")
     */
    
    public function caracteristicasModAction(Request $request)
    {
        try{
            $em = $this->getDoctrine()->getManager();
            $v_caracteristica = $em->getRepository('AppBundle:Caracteristica')->find($request->request->get('idcaracteristica'));
            $v_caracteristica->setDescripcion($request->request->get('descripcion'));
            
            $em->persist($v_caracteristica);
            $em->flush();
            
            return New Response('<div class="alert alert-success alert-dismissible fade in" role="alert">'
                                . 'Los datos han sido actualizados satisfactoriamente'
                                . '</div>');
            
        } catch (\Exception $e) {
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
     * Elimina caraterística
     * @Route("/admin/caracteristicas/del",name="caracteristicasDel")
     */
    public function caracteristicasDelAction(Request $request){
        try{
            $em = $this->getDoctrine()->getManager();
            $v_caracteristica = $em->getRepository('AppBundle:Caracteristica')->find($request->request->get('idcaracteristica'));
            
            $em->remove($v_caracteristica);
            $em->flush();
            
            return New Response('<div class="alert alert-success alert-dismissible fade in" role="alert">'
                                . 'Los datos han sido eliminados satisfactoriamente'
                                . '</div>');
            
        } catch (\Exception $e) {
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
     * Clasificación
     */
    
    /**
     * LLama a plantilla que lista la clasificación de datos en desertores y no
     * desertores
     * @Route("/admin/clasificacion",name="r_clasificacion")
     */
    
    public function clasificacionAction()
    {
        return $this->render("/admin/clasificacion/vw_clasificacion.html.twig");
    }
    
    /**
     * Devuelve en formarto JSON tabla de datos
     * @Route("/admin/thdb_clasificacion",name="thdb_clasificacion")
     */
    public function clasificacionTablaAction()
    {
         $v_clasificacion = $this->getDoctrine()
                ->getRepository("AppBundle:Clasificacion")
                ->listaJSON();
        return new Response($v_clasificacion);
    }
    
    
    /**
     * Agrega un nuevo registro en tabla clasificación
     * @Route("/admin/clasificacion/clasificacionAdd", name="clasificacionAdd")
     */
    public function clasificacionAddAction(Request $request)
    {
         try{
            
            $em = $this->getDoctrine()->getManager();
            
            $v_estudiante = $em->getRepository('AppBundle:Estudiante')->findOneBy(array('codigo'=>$request->request->get('codigo')));
               
            $v_clasificacion = new Clasificacion();
            
            $v_clasificacion->setDesertor($request->request->get('desertor'));
            $v_clasificacion->setAnio($request->request->get('anio'));
            $v_clasificacion->setPeriodo($request->request->get('periodo'));
            $v_clasificacion->setIdestudiante($v_estudiante);
                        
            $em->persist($v_clasificacion);
            $em->flush();
            
            return New Response('<div class="alert alert-success alert-dismissible fade in" role="alert">'
                                . 'Los datos han sido aregados satisfactoriamente'
                                . '</div>');
            
        } catch (\Exception $e) {
             switch (get_class($e)) {
                case 'Doctrine\DBAL\Exception\UniqueConstraintViolationException':
                    return new Response('DBAL Exception<br/>');
                
                case 'Doctrine\DBA\DBAException':
                    return new Response('DBA Exception<br/>');               
                    
                case 'PDOException':
                    return new Response('DBA Exception<br/>'.$e->getMessage());
                    
                default:
                    return new Response($e->getMessage().'--'.get_class($e));                
            }
        }
        
    }
    
    /**
     * Modifica datos de clasificación
     * @Route("/admin/clasificacion/clasificacionMod",name="clasificacionMod")
     */
    public function clasificacionModAction(Request $request)
    {
        try{
            $em = $this->getDoctrine()->getManager();   
            $v_clasificacion = $em->getRepository('AppBundle:Clasificacion')->find($request->request->get('idclasificacion'));
            $v_estudiante = $em->getRepository('AppBundle:Estudiante')->findOneBy(array('codigo'=>$request->request->get('codigo')));
            $v_clasificacion->setIdestudiante($v_estudiante);
            $v_clasificacion->setAnio($request->request->get('anio'));
            $v_clasificacion->setPeriodo($request->request->get('periodo'));
            $v_clasificacion->setDesertor($request->request->get('desertor'));
            
            $em->persist($v_clasificacion);
            $em->flush();
            
            return New Response('<div class="alert alert-success alert-dismissible fade in" role="alert">'
                                . 'Los datos han sido actualizados satisfactoriamente'
                                . '</div>');
            
        } catch (\Exception $e) {
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
     * Eimina una clasificacion
     * @Route("/admin/clasificacion/clasificacionDel",name="clasificacionDel")
     */
    public function clasificacionDelAction(Request $request)
    {
        try{
            $em = $this->getDoctrine()->getManager();   
            $v_clasificacion = $em->getRepository('AppBundle:Clasificacion')->find($request->request->get('idclasificacion'));
            
            $em->remove($v_clasificacion);
            $em->flush();
            
            return New Response('<div class="alert alert-success alert-dismissible fade in" role="alert">'
                                . 'Los datos han sido eliminados satisfactoriamente'
                                . '</div>');
            
        } catch (\Exception $e) {
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
     * Entrenamiento
     */
    
    /**
     * LLama a plantilla que lista entrenamiento del modelo
     * @Route("/admin/entrenamiento",name="r_entrenamiento")
     */
    
    public function entrenamientoAction()
    {
        $em = $this->getDoctrine();        
        $v_caracteristicas = $em->getRepository('AppBundle:Caracteristica')->findAll();
        $v_estudiante = $em->getRepository('AppBundle:Estudiante')->findAll();
                
        return $this->render('/admin/entrenamiento/vw_entrenamiento.html.twig',array('caracteristica'=>$v_caracteristicas,'estudiante'=>$v_estudiante));
    }
    
    /**
     * Devuelve en formarto JSON tabla de datos
     * @Route("/admin/thdb_entrenamiento",name="thdb_entrenamiento")
     */
    public function entrenamientoTablaAction()
    {
         $v_entrenamiento = $this->getDoctrine()
                ->getRepository("AppBundle:Entrenamiento")
                ->listaJSON();
        return new Response($v_entrenamiento);
    }
    
    /**
     * Agrega un nuevo registro a la tabla entrenamiento
     * @Route("/admin/entrenamiento/entrenamientoAdd",name="entrenamientoAdd")
     */
    public function entrenamientoAddAction(Request $request)
    {
        try{
            $em = $this->getDoctrine()->getManager();
            $v_entrenamiento = new Entrenamiento();
            
            $v_estudiante = $em->getRepository('AppBundle:Estudiante')->findOneBy(array('idestudiante'=>$request->request->get('idestudiante')));
            
            $v_entrenamiento->setDesertor($request->request->get('desertor'));
            $v_entrenamiento->setC1($request->request->get('c1'));
            $v_entrenamiento->setC2($request->request->get('c2'));
            $v_entrenamiento->setC3($request->request->get('c3'));
            $v_entrenamiento->setC4($request->request->get('c4'));
            $v_entrenamiento->setIdestudiante($v_estudiante);
            
            $em->persist($v_entrenamiento);
            $em->flush();
            
            return New Response('<div class="alert alert-success alert-dismissible fade in" role="alert">'
                                . 'Los datos han sido aregados satisfactoriamente'
                                . '</div>');
        } catch (\Exception $e) {
            switch (get_class($e)) {
                case 'Doctrine\DBAL\Exception\UniqueConstraintViolationException':
                    return new Response('Registro Existente<br>DBAL Exception<br>');
                
                case 'Doctrine\DBA\DBAException':
                    return new Response('DBA Exception<br/>');               
                    
                case 'PDOException':
                    return new Response('DBA Exception<br/>'.$e->getMessage());
                    
                default:
                    return new Response($e->getMessage().'--'.get_class($e));                
            }
        }
    }
    
    /**
     * Modifica un registro de la tabla entrenamiento
     * @Route("/admin/entrenamiento/entrenamientoMod",name="entrenamientoMod")
     */
    public function entrenamientoModAction(Request $request)
    {
        try{
            $em  = $this->getDoctrine()->getManager();
            
            $v_entrenamiento = $em->getRepository('AppBundle:Entrenamiento')->find($request->request->get('identrenamiento'));
            $v_estudiante = $em->getRepository('AppBundle:Estudiante')->find($request->request->get('idestudiante'));
            
            $v_entrenamiento->setDesertor($request->request->get('desertor'));
            $v_entrenamiento->setC1($request->request->get('c1'));
            $v_entrenamiento->setC2($request->request->get('c2'));
            $v_entrenamiento->setC3($request->request->get('c3'));
            $v_entrenamiento->setC4($request->request->get('c4'));
            $v_entrenamiento->setIdestudiante($v_estudiante);
            
            $em->persist($v_entrenamiento);
            $em->flush();
            
            return New Response('<div class="alert alert-success alert-dismissible fade in" role="alert">'
                                . 'Los datos han sido actualizados satisfactoriamente'
                                . '</div>');
            
            
        } catch (Exception $ex) {
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
     * Elimina un registro de la tabla entrenamiento
     * @Route("/admin/entrenamiento/entrenamientoDel",name="entrenamientoDel")
     */
    public function entrenamientoDelAction(Request $reques)
    {
        try{
            $em = $this->getDoctrine()->getManager();
            $v_entrenamiento = $em->getRepository('AppBundle:Entrenamiento')->find($reques->request->get('identrenamiento'));
            
            $em->remove($v_entrenamiento);
            $em->flush();
            
            return New Response('<div class="alert alert-success alert-dismissible fade in" role="alert">'
                                . 'Los datos han sido eliminados satisfactoriamente'
                                . '</div>');
        } catch (Exception $ex) {
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
    
}
