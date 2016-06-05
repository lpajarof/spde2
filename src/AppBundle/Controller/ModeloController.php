<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use AppBundle\Entity\Clasificacion;

/**
 * Carga arreglo con los datos de entrenamiento y clasifica un individuo
 *
 * @author lpajaro
 */
class ModeloController extends Controller
{

    /**
    * @Route("/modelo/clasifica", name="r_clasifica")
    */
    public function clasificaAction()
    {   
                             
        
        $v_calmodeloS = $this->getDoctrine()
                ->getRepository("AppBundle:Calmodelo")
                ->find(1);
        
        $v_calmodeloN = $this->getDoctrine()
                ->getRepository("AppBundle:Calmodelo")
                ->find(0);
        
        if ($v_calmodeloS->priori(6,180,12,1) > $v_calmodeloN->priori(6,180,12,1))
        {
            $v_respuesta='Desertor';
        }
        else{
            $v_respuesta='No es desertor';
        }
        
        return New Response('valor->'.$v_respuesta);
        
    }
    
    /**
    * Clasificación
    */
    
    /**
    * LLama a plantilla que lista datos de clasificación
    * @Route("/admin/clasificacion",name="r_clasificacion")
    */
    
    public function clasificacionAction()
    {
        $em = $this->getDoctrine();        
        $v_caracteristicas = $em->getRepository('AppBundle:Caracteristica')->findAll();
        $v_estudiante = $em->getRepository('AppBundle:Estudiante')->findAll();
                
        return $this->render('/admin/clasificacion/vw_clasificacion.html.twig',array('caracteristica'=>$v_caracteristicas,'estudiante'=>$v_estudiante));
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
    * Agrega un nuevo registro a la tabla clasificacion
    * @Route("/admin/clasificacion/clasificacionAdd",name="clasificacionAdd")
    */
    public function clasificacionAddAction(Request $request)
    {
        try{
            $em = $this->getDoctrine()->getManager();
            $v_clasificacion = new Clasificacion();
            
            $v_estudiante = $em->getRepository('AppBundle:Estudiante')->findOneBy(array('idestudiante'=>$request->request->get('idestudiante')));
            
            $v_clasificacion->setC1($request->request->get('c1'));
            $v_clasificacion->setC2($request->request->get('c2'));
            $v_clasificacion->setC3($request->request->get('c3'));
            $v_clasificacion->setC4($request->request->get('c4'));
            $v_clasificacion->setIdestudiante($v_estudiante);
            
            $c1=$request->request->get('c1');
            $c2=$request->request->get('c2');
            $c3=$request->request->get('c3');
            $c4=$request->request->get('c4');
            /**
            * Toma los datos del estudiante y determina si es posible desertor o 
            * no.
            * Selecciona los datos para clasificar como desertor
            */
            $v_calmodeloS = $this->getDoctrine()
                ->getRepository("AppBundle:Calmodelo")
                ->find(1);
            /**
             * Selecciona los datos para clasificar como no desertor
             */
            $v_calmodeloN = $this->getDoctrine()
                    ->getRepository("AppBundle:Calmodelo")
                    ->find(0);
            /**
             * Compara las probabilidades de ser un desertor y no desertor.
             * Se elige la mayor probabilidad para la clasificacion
             */
            if ($v_calmodeloS->priori($c1,$c2,$c3,$c4) > $v_calmodeloN->priori($c1,$c2,$c3,$c4))
            {
                $v_respuesta=' DESERTOR ';
                $v_clasificacion->setDesertor(1);
            }
            else{
                $v_respuesta=' NO ES UN DESERTOR ';
                $v_clasificacion->setDesertor(0);
            }
            $em->persist($v_clasificacion);
            $em->flush();
            
            return New Response('<div class="alert alert-success alert-dismissible fade in" role="alert">'
                                .$v_respuesta
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
     * Modifica un registro de la tabla clasificacion
     * @Route("/admin/clasificacion/clasificacionMod",name="clasificacionMod")
     */
    public function clasificacionModAction(Request $request)
    {
        try{
            $em  = $this->getDoctrine()->getManager();
            
            $v_clasificacion = $em->getRepository('AppBundle:Clasificacion')->find($request->request->get('idclasificacion'));
            $v_estudiante = $em->getRepository('AppBundle:Estudiante')->find($request->request->get('idestudiante'));
            
            $v_clasificacion->setC1($request->request->get('c1'));
            $v_clasificacion->setC2($request->request->get('c2'));
            $v_clasificacion->setC3($request->request->get('c3'));
            $v_clasificacion->setC4($request->request->get('c4'));
            $v_clasificacion->setIdestudiante($v_estudiante);
            
            $c1=$request->request->get('c1');
            $c2=$request->request->get('c2');
            $c3=$request->request->get('c3');
            $c4=$request->request->get('c4');
            
            /**
            * Toma los datos del estudiante y determina si es posible desertor o 
            * no.
            * Selecciona los datos para clasificar como desertor
            */
            $v_calmodeloS = $this->getDoctrine()
                ->getRepository("AppBundle:Calmodelo")
                ->find(1);
            /**
             * Selecciona los datos para clasificar como no desertor
             */
            $v_calmodeloN = $this->getDoctrine()
                    ->getRepository("AppBundle:Calmodelo")
                    ->find(0);
            /**
             * Compara las probabilidades de ser un desertor y no desertor.
             * Se elige la mayor probabilidad para la clasificacion
             */
            if ($v_calmodeloS->priori($c1,$c2,$c3,$c4) > $v_calmodeloN->priori($c1,$c2,$c3,$c4))
            {
                $v_respuesta=' DESERTOR ';
                $v_clasificacion->setDesertor(1);
            }
            else{
                $v_respuesta=' NO ES UN DESERTOR ';
                $v_clasificacion->setDesertor(0);
            }
            $em->persist($v_clasificacion);
            $em->flush();
            
            $em->persist($v_clasificacion);
            $em->flush();
            
            return New Response('<div class="alert alert-success alert-dismissible fade in" role="alert">'
                                . $v_respuesta
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
     * Elimina un registro de la tabla clasificacion
     * @Route("/admin/clasificacion/clasificacionDel",name="clasificacionDel")
     */
    public function clasificacionDelAction(Request $reques)
    {
        try{
            $em = $this->getDoctrine()->getManager();
            $v_clasificacion = $em->getRepository('AppBundle:Clasificacion')->find($reques->request->get('idclasificacion'));
            
            $em->remove($v_clasificacion);
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
