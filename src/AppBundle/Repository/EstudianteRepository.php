<?php

namespace AppBundle\Repository;

/**
 * EstudianteRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class EstudianteRepository extends \Doctrine\ORM\EntityRepository
{
    /**
    * 
    * Devuelve en formato JSON los datos de la tabla
    */
    
    public function listaJSON()
    {
        $arrEstudiante=$this->getEntityManager()
                                ->createQuery('SELECT e.codigo'
                                            . ',e.idestudiante'
                                            . ',ti.descripcion'
                                            . ',ti.idtipoidentificacion'
                                            . ',p.idprograma as programa' 
                                            . ',e.identificacion'
                                            . ',e.nombres'
                                            . ',e.apellidos'
                                            . ',e.direccion'
                                            . ',e.telefono'
                                            . ',e.email'
                                            . ',p.descripcion as nombreprograma' 
                                        . ' FROM AppBundle:Estudiante AS e '
                                        . ' JOIN AppBundle:Tipoidentificacion AS ti '
                                        . ' WITH e.tipoidentificacion = ti.idtipoidentificacion'
                                        . ' JOIN AppBundle:Programa AS p'
                                        . ' WITH e.programa = p.idprograma')
                                ->getResult();
        

        $arrJSON='{'
                . '"draw":1,'
                . '"recordsTotal": '.count($arrEstudiante).','
                . '"recordsFiltered":'.count($arrEstudiante).','
                . '"data": [';
                
        
        for($i=0; $i<count($arrEstudiante); $i++){            
            $arrJSON=$arrJSON. '[';
            $arrJSON=$arrJSON.'"'.$arrEstudiante[$i]["codigo"].'",';
            $arrJSON=$arrJSON.'"'.ucwords(strtolower($arrEstudiante[$i]["nombres"])).'",';
            $arrJSON=$arrJSON.'"'.ucwords(strtolower($arrEstudiante[$i]["apellidos"])).'",';
            $arrJSON=$arrJSON.'"'.$arrEstudiante[$i]["email"].'",';
            $arrJSON=$arrJSON.'"'.$arrEstudiante[$i]["nombreprograma"].'",';
            $arrJSON=$arrJSON.'" '
                    . '<button type=\"button\" id=\"btn\" class=\"btn btn-success btn-xs\" data-toggle=\"modal\" data-target=\"#vm_actualizar\"'
                    . 'data-codigo=\"'.$arrEstudiante[$i]["codigo"].'\"'
                    . 'data-programa=\"'.$arrEstudiante[$i]["programa"].'\"'
                    . 'data-tipoidentificacion=\"'.$arrEstudiante[$i]["idtipoidentificacion"].'\"'
                    . 'data-identificacion=\"'.$arrEstudiante[$i]["identificacion"].'\"'
                    . 'data-nombres=\"'.$arrEstudiante[$i]["nombres"].'\"'
                    . 'data-apellidos=\"'.$arrEstudiante[$i]["apellidos"].'\"'
                    . 'data-email=\"'.$arrEstudiante[$i]["email"].'\"'
                    . 'data-telefono=\"'.$arrEstudiante[$i]["telefono"].'\"'
                    . 'data-direccion=\"'.$arrEstudiante[$i]["direccion"].'\"'
                    . 'data-idestudiante=\"'.$arrEstudiante[$i]["idestudiante"].'\"'
                    . '>'
                    . '<i class=\'glyphicon glyphicon-edit\'>'
                    . '</i> Modificar'
                    . '</button>"';
            
            if($i==count($arrEstudiante)-1){
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
    
    public function findAll()
    {
        return $this->findBy(array(), array('apellidos' => 'ASC'));
    }
}
