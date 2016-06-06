<?php

namespace AppBundle\Repository;


class SeguimientoestudianteRepository extends \Doctrine\ORM\EntityRepository
{
    /**
    * 
    * Devuelve en formato JSON los datos de la tabla
    */
    
    public function listaJSON()
    {
        $arrSeguimiento=$this->getEntityManager()
                                ->createQuery('SELECT c FROM AppBundle:Seguimientoestudiante c')
                                ->getResult();
        
        
        $arrJSON='{'
                . '"draw":1,'
                . '"recordsTotal": '.count($arrSeguimiento).','
                . '"recordsFiltered":'.count($arrSeguimiento).','
                . '"data": [';
                
        
        for($i=0; $i<count($arrSeguimiento); $i++){            
            $arrJSON=$arrJSON. '[';
//            $arrJSON=$arrJSON.'"'.$arrSeguimiento[$i]->getIdseguimientoestudiante().'",';
            $arrJSON=$arrJSON.'"'.ucwords(strtolower($arrSeguimiento[$i]->getIdestudiante()->getNombres().' '.$arrSeguimiento[$i]->getIdestudiante()->getApellidos())).'",';
            $arrJSON=$arrJSON.'"'.$arrSeguimiento[$i]->getIdaccion()->getDescripcion().'",';
            $arrJSON=$arrJSON.'"'.$arrSeguimiento[$i]->getObservaciones().'",';
            $arrJSON=$arrJSON.'"'.$arrSeguimiento[$i]->getFechainicio()->format('m/d/Y').'",';
            $arrJSON=$arrJSON.'"'.$arrSeguimiento[$i]->getFechafin()->format('m/d/Y').'",';
            $arrJSON=$arrJSON.'"'.($arrSeguimiento[$i]->getEstado()=='1'?'Abierta':'Cerrada').'",';
            $arrJSON=$arrJSON.'"'.$arrSeguimiento[$i]->getAsignadoa()->getNombres().' '.$arrSeguimiento[$i]->getAsignadoa()->getApellidos().'",';            
            $arrJSON=$arrJSON.'" '
                    . '<button type=\"button\" id=\"btn\" class=\"btn btn-success btn-xs\" data-toggle=\"modal\" data-target=\"#vm_actualizar\"'
                    . 'data-idseguimientoestudiante=\"'.$arrSeguimiento[$i]->getIdseguimientoestudiante().'\"'
                    . 'data-idestudiante=\"'.$arrSeguimiento[$i]->getIdestudiante()->getidestudiante().'\"' 
                    . 'data-idaccion=\"'.$arrSeguimiento[$i]->getIdaccion()->getIdaccion().'\"'
                    . 'data-observaciones=\"'.$arrSeguimiento[$i]->getObservaciones().'\"'
                    . 'data-fechainicio=\"'.$arrSeguimiento[$i]->getFechainicio()->format('m/d/Y').'\"'
                    . 'data-fechafin=\"'.$arrSeguimiento[$i]->getFechafin()->format('m/d/Y').'\"'
                    . 'data-asignadoa=\"'.$arrSeguimiento[$i]->getAsignadoa()->getIdusuario().'\"'
                    . '>'
                    . '<i class=\'glyphicon glyphicon-edit\'>'
                    . '</i> Modificar'
                    . '</button>'
                    . '<button type=\"button\" id=\"btn\" class=\"btn btn-danger btn-xs\" data-toggle=\"modal\" data-target=\"#vm_eliminar\"'
                    . 'data-idseguimientoestudiante=\"'.$arrSeguimiento[$i]->getIdseguimientoestudiante().'\"'                    
                    . '>'
                    . '<i class=\'glyphicon glyphicon-trash\'>'
                    . '</i> Eliminar'
                    . '</button>'
                    . '"';             
            if($i==count($arrSeguimiento)-1){
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
