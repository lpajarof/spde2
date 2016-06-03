<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Calmodelo;

/**
 * Carga arreglo con los datos de entrenamiento y clasifica un individuo
 *
 * @author lpajaro
 */
class ModeloController extends Controller
{

    /**
    * @Route("/modelo/cargaentrenamiento", name="r_cargaentrenamiento")
    */
    public function cargaEntrenamientoAction()
    {   
                             
        $v_calmodelo = new Calmodelo();
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
    
}
