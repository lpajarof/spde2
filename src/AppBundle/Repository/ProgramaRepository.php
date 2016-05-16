<?php

namespace AppBundle\Repository;

/**
 * ProgramaRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ProgramaRepository extends \Doctrine\ORM\EntityRepository
{
     /**
     * 
     * Devuelve en formato JSON los datos de la tabla
     */
    
    public function listaJSON()
    {
        $arrPrograma=$this->getEntityManager()
                                ->createQuery('SELECT p FROM AppBundle:Programa p')
                                ->getResult();
        
        
        $arrJSON='{'
                . '"draw":1,'
                . '"recordsTotal": '.count($arrPrograma).','
                . '"recordsFiltered":'.count($arrPrograma).','
                . '"data": [';
                
        
        for($i=0; $i<count($arrPrograma); $i++){            
            $arrJSON=$arrJSON. '[';
            $arrJSON=$arrJSON.'"'.$arrPrograma[$i]->getCodigo().'",';
            $arrJSON=$arrJSON.'"'.$arrPrograma[$i]->getDescripcion().'",';
            $arrJSON=$arrJSON.'" '
                    . '<button type=\"button\" id=\"btn\" class=\"btn btn-success btn-xs\" data-toggle=\"modal\" data-target=\"#vm_actualizar\"'
                    . 'data-codigo=\"'.$arrPrograma[$i]->getCodigo().'\"'
                    . 'data-descripcion=\"'.$arrPrograma[$i]->getDescripcion().'\"'
                    . 'data-idprograma=\"'.$arrPrograma[$i]->getIdprograma().'\"'
                    . '>'
                    . '<i class=\'glyphicon glyphicon-edit\'>'
                    . '</i> Modificar'
                    . '</button>"';
            
            if($i==count($arrPrograma)-1){
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