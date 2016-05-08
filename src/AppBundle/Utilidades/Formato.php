<?php
/**
 * Clase con metodos utiles para formato y presentación de datos
 *
 * @author lpajaro
 */
class Formato {
    
    /**
     * Devuelve en formato Json datos de arreglo de entidades
     * @param type $arreglo
     * @return type
     */
    public function entityJson($arreglo)
    {
        $arrJson='{'
                . '"draw":1,'
                . '"recordsTotal":'.count($arreglo);
        
        return $arrJson;
    }
}
