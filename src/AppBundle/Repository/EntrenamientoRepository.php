<?php

namespace AppBundle\Repository;

/**
 * EntrenamientoRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class EntrenamientoRepository extends \Doctrine\ORM\EntityRepository
{
    /**
    * 
    * Devuelve en formato JSON los datos de la tabla
    */
    
    public function listaJSON()
    {
        $arrEntrenamiento=$this->getEntityManager()
                                ->createQuery('SELECT c FROM AppBundle:Entrenamiento c')
                                ->getResult();
        
        
        $arrJSON='{'
                . '"draw":1,'
                . '"recordsTotal": '.count($arrEntrenamiento).','
                . '"recordsFiltered":'.count($arrEntrenamiento).','
                . '"data": [';
                
        
        for($i=0; $i<count($arrEntrenamiento); $i++){            
            $arrJSON=$arrJSON. '[';
            $arrJSON=$arrJSON.'"'.$arrEntrenamiento[$i]->getIdentrenamiento().'",';
            $arrJSON=$arrJSON.'"'.ucwords(strtolower($arrEntrenamiento[$i]->getIdestudiante()->getNombres().' '.$arrEntrenamiento[$i]->getIdestudiante()->getApellidos())).'",';
            $arrJSON=$arrJSON.'"'.($arrEntrenamiento[$i]->getDesertor()=='1'?'S':'N').'",';
            $arrJSON=$arrJSON.'"'.$arrEntrenamiento[$i]->getC1().'",';
            $arrJSON=$arrJSON.'"'.$arrEntrenamiento[$i]->getC2().'",';
            $arrJSON=$arrJSON.'"'.$arrEntrenamiento[$i]->getC3().'",';
            $arrJSON=$arrJSON.'"'.$arrEntrenamiento[$i]->getC4().'",';            
            $arrJSON=$arrJSON.'" '
                    . '<button type=\"button\" id=\"btn\" class=\"btn btn-success btn-xs\" data-toggle=\"modal\" data-target=\"#vm_actualizar\"'
                    . 'data-idestudiante=\"'.$arrEntrenamiento[$i]->getIdestudiante()->getIdestudiante().'\"'
                    . 'data-identrenamiento=\"'.$arrEntrenamiento[$i]->getIdentrenamiento().'\"' 
                    . 'data-desertor=\"'.$arrEntrenamiento[$i]->getDesertor().'\"'
                    . 'data-c1=\"'.$arrEntrenamiento[$i]->getC1().'\"'
                    . 'data-c2=\"'.$arrEntrenamiento[$i]->getC2().'\"'
                    . 'data-c3=\"'.$arrEntrenamiento[$i]->getC3().'\"'
                    . 'data-c4=\"'.$arrEntrenamiento[$i]->getC4().'\"'
                    . '>'
                    . '<i class=\'glyphicon glyphicon-edit\'>'
                    . '</i> Modificar'
                    . '</button>'
                    . '<button type=\"button\" id=\"btn\" class=\"btn btn-danger btn-xs\" data-toggle=\"modal\" data-target=\"#vm_eliminar\"'
                    . 'data-identrenamiento=\"'.$arrEntrenamiento[$i]->getIdentrenamiento().'\"'                    
                    . '>'
                    . '<i class=\'glyphicon glyphicon-trash\'>'
                    . '</i> Eliminar'
                    . '</button>'
                    . '"';             
            if($i==count($arrEntrenamiento)-1){
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
