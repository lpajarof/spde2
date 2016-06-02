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
        $v_calmodelo = $this->getDoctrine()
                ->getRepository("AppBundle:Calmodelo")
                ->find(0);
        
                        
        
        return New Response('valor->'.$v_calmodelo->getMediaC1());
        
    }
    
}
