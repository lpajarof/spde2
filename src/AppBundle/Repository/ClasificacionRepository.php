<?php

namespace AppBundle\Repository;

/**
 * ClasificacionRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ClasificacionRepository extends \Doctrine\ORM\EntityRepository
{
    /**
    * 
    * Devuelve en formato JSON los datos de la tabla
    */
    
    public function listaJSON()
    {
        $arrClasificacion=$this->getEntityManager()
                                ->createQuery('SELECT c FROM AppBundle:Clasificacion c')
                                ->getResult();
        
        
        $arrJSON='{'
                . '"draw":1,'
                . '"recordsTotal": '.count($arrClasificacion).','
                . '"recordsFiltered":'.count($arrClasificacion).','
                . '"data": [';
                
        
        for($i=0; $i<count($arrClasificacion); $i++){            
            $arrJSON=$arrJSON. '[';
            $arrJSON=$arrJSON.'"'.$arrClasificacion[$i]->getIdclasificacion().'",';
            $arrJSON=$arrJSON.'"'.ucwords(strtolower($arrClasificacion[$i]->getIdestudiante()->getNombres().' '.$arrClasificacion[$i]->getIdestudiante()->getApellidos())).'",';
            $arrJSON=$arrJSON.'"'.($arrClasificacion[$i]->getDesertor()=='1'?'S':'N').'",';
            $arrJSON=$arrJSON.'"'.$arrClasificacion[$i]->getC1().'",';
            $arrJSON=$arrJSON.'"'.$arrClasificacion[$i]->getC2().'",';
            $arrJSON=$arrJSON.'"'.$arrClasificacion[$i]->getC3().'",';
            $arrJSON=$arrJSON.'"'.$arrClasificacion[$i]->getC4().'",';
            $arrJSON=$arrJSON.'" '
                    . '<button type=\"button\" id=\"btn\" class=\"btn btn-success btn-xs\" data-toggle=\"modal\" data-target=\"#vm_actualizar\"'
                    . 'data-idclasificacion=\"'.$arrClasificacion[$i]->getIdclasificacion().'\"'
                    . 'data-desertor=\"'.$arrClasificacion[$i]->getDesertor().'\"'
                    . 'data-idestudiante=\"'.$arrClasificacion[$i]->getIdestudiante()->getIdestudiante().'\"'
                    . 'data-c1=\"'.$arrClasificacion[$i]->getC1().'\"'
                    . 'data-c2=\"'.$arrClasificacion[$i]->getC2().'\"'
                    . 'data-c3=\"'.$arrClasificacion[$i]->getC3().'\"'
                    . 'data-c4=\"'.$arrClasificacion[$i]->getC4().'\"'
                    . '>'
                    . '<i class=\'glyphicon glyphicon-edit\'>'
                    . '</i> Modificar'
                    . '</button>'
                    . '<button type=\"button\" id=\"btn\" class=\"btn btn-danger btn-xs\" data-toggle=\"modal\" data-target=\"#vm_eliminar\"'
                    . 'data-idclasificacion=\"'.$arrClasificacion[$i]->getIdclasificacion().'\"'                    
                    . '>'
                    . '<i class=\'glyphicon glyphicon-trash\'>'
                    . '</i> Eliminar'
                    . '</button>'
                    . '"';             
            if($i==count($arrClasificacion)-1){
                    $arrJSON=$arrJSON.']';
            }
            else{
                $arrJSON=$arrJSON.'],';                           
            }
        }
        $arrJSON=$arrJSON.']';
        
        $arrJSON=$arrJSON.'}';
        
        return($arrJSON);
    }
}
