<?php

namespace AppBundle\Repository;

/**
 * CaracteristicaRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CaracteristicaRepository extends \Doctrine\ORM\EntityRepository
{
    /**
    * 
    * Devuelve en formato JSON los datos de la tabla
    */
    
    public function listaJSON()
    {
        $arrCaracteristica=$this->getEntityManager()
                                ->createQuery('SELECT c FROM AppBundle:Caracteristica c')
                                ->getResult();
        
        
        $arrJSON='{'
                . '"draw":1,'
                . '"recordsTotal": '.count($arrCaracteristica).','
                . '"recordsFiltered":'.count($arrCaracteristica).','
                . '"data": [';
                
        
        for($i=0; $i<count($arrCaracteristica); $i++){            
            $arrJSON=$arrJSON. '[';
            $arrJSON=$arrJSON.'"'.$arrCaracteristica[$i]->getIdcaracteristica().'",';
            $arrJSON=$arrJSON.'"'.$arrCaracteristica[$i]->getDescripcion().'",';
            $arrJSON=$arrJSON.'" '
                    . '<button type=\"button\" id=\"btn\" class=\"btn btn-success btn-xs\" data-toggle=\"modal\" data-target=\"#vm_actualizar\"'
                    . 'data-codigo=\"'.$arrCaracteristica[$i]->getIdcaracteristica().'\"'
                    . 'data-descripcion=\"'.$arrCaracteristica[$i]->getDescripcion().'\"'
                    . '>'
                    . '<i class=\'glyphicon glyphicon-edit\'>'
                    . '</i> Modificar'
                    . '</button>'
                    . '<button type=\"button\" id=\"btn\" class=\"btn btn-danger btn-xs\" data-toggle=\"modal\" data-target=\"#vm_actualizar\"'
                    . 'data-codigo=\"'.$arrCaracteristica[$i]->getIdcaracteristica().'\"'
                    . 'data-descripcion=\"'.$arrCaracteristica[$i]->getDescripcion().'\"'
                    . '>'
                    . '<i class=\'glyphicon glyphicon-trash\'>'
                    . '</i> Modificar'
                    . '</button>'
                    . '"';             
            if($i==count($arrCaracteristica)-1){
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