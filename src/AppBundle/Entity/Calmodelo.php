<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * gestiona la vista con los calculos de los entrenamientos y clasifica
 *
 * @author lpajaro
 */

/**
 * calmodelo
 *
 * @ORM\Table(name="calmodelo")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CalmodeloRepository")
 */
class Calmodelo
{
    
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;
    
    /**
     * @var string
     *
     * @ORM\Column(name="desertor", type="string", length=45)
     */
    private $desertor;
   
    /**
     *
     * @var float
     * @ORM\Column(name="probabilidad",type="float")
     */
    private $probabilidad;
    
    /**
     *
     * @var float
     * @ORM\Column(name="mediaC1",type="float")
     */
    private $mediaC1;
    
    /**
     *
     * @var float
     * @ORM\Column(name="mediaC2",type="float")
     */
    private $mediaC2;
    
    /**
     *
     * @var float
     * @ORM\Column(name="mediaC3",type="float")
     */
    private $mediaC3;
    
    /**
     *
     * @var float
     * @ORM\Column(name="mediaC4",type="float")
     */
    private $mediaC4;
    
    /**
     *
     * @var float
     * @ORM\Column(name="varianzaC1",type="float")
     */
    private $varianzaC1;
    
    /**
     *
     * @var float
     * @ORM\Column(name="varianzaC2",type="float")
     */
    private $varianzaC2;
    
    /**
     *
     * @var float
     * @ORM\Column(name="varianzaC3",type="float")
     */
    private $varianzaC3;
    
    /**
     *
     * @var float
     * @ORM\Column(name="varianzaC4",type="float")
     */
    private $varianzaC4;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set desertor
     *
     * @param string $desertor
     *
     * @return Modelo
     */
    public function setDesertor($desertor)
    {
        $this->desertor = $desertor;

        return $this;
    }

    /**
     * Get desertor
     *
     * @return string
     */
    public function getDesertor()
    {
        return $this->desertor;
    }

    /**
     * Set probabilidad
     *
     * @param float $probabilidad
     *
     * @return Modelo
     */
    public function setProbabilidad($probabilidad)
    {
        $this->probabilidad = $probabilidad;

        return $this;
    }

    /**
     * Get probabilidad
     *
     * @return float
     */
    public function getProbabilidad()
    {
        return $this->probabilidad;
    }

    /**
     * Set mediaC1
     *
     * @param float $mediaC1
     *
     * @return Modelo
     */
    public function setMediaC1($mediaC1)
    {
        $this->mediaC1 = $mediaC1;

        return $this;
    }

    /**
     * Get mediaC1
     *
     * @return float
     */
    public function getMediaC1()
    {
        return $this->mediaC1;
    }

    /**
     * Set mediaC2
     *
     * @param float $mediaC2
     *
     * @return Modelo
     */
    public function setMediaC2($mediaC2)
    {
        $this->mediaC2 = $mediaC2;

        return $this;
    }

    /**
     * Get mediaC2
     *
     * @return float
     */
    public function getMediaC2()
    {
        return $this->mediaC2;
    }

    /**
     * Set mediaC3
     *
     * @param float $mediaC3
     *
     * @return Modelo
     */
    public function setMediaC3($mediaC3)
    {
        $this->mediaC3 = $mediaC3;

        return $this;
    }

    /**
     * Get mediaC3
     *
     * @return float
     */
    public function getMediaC3()
    {
        return $this->mediaC3;
    }

    /**
     * Set mediaC4
     *
     * @param float $mediaC4
     *
     * @return Modelo
     */
    public function setMediaC4($mediaC4)
    {
        $this->mediaC4 = $mediaC4;

        return $this;
    }

    /**
     * Get mediaC4
     *
     * @return float
     */
    public function getMediaC4()
    {
        return $this->mediaC4;
    }

    /**
     * Set varianzaC1
     *
     * @param float $varianzaC1
     *
     * @return Modelo
     */
    public function setVarianzaC1($varianzaC1)
    {
        $this->varianzaC1 = $varianzaC1;

        return $this;
    }

    /**
     * Get varianzaC1
     *
     * @return float
     */
    public function getVarianzaC1()
    {
        return $this->varianzaC1;
    }

    /**
     * Set varianzaC2
     *
     * @param float $varianzaC2
     *
     * @return Modelo
     */
    public function setVarianzaC2($varianzaC2)
    {
        $this->varianzaC2 = $varianzaC2;

        return $this;
    }

    /**
     * Get varianzaC2
     *
     * @return float
     */
    public function getVarianzaC2()
    {
        return $this->varianzaC2;
    }

    /**
     * Set varianzaC3
     *
     * @param float $varianzaC3
     *
     * @return Modelo
     */
    public function setVarianzaC3($varianzaC3)
    {
        $this->varianzaC3 = $varianzaC3;

        return $this;
    }

    /**
     * Get varianzaC3
     *
     * @return float
     */
    public function getVarianzaC3()
    {
        return $this->varianzaC3;
    }

    /**
     * Set varianzaC4
     *
     * @param float $varianzaC4
     *
     * @return Modelo
     */
    public function setVarianzaC4($varianzaC4)
    {
        $this->varianzaC4 = $varianzaC4;

        return $this;
    }

    /**
     * Get varianzaC4
     *
     * @return float
     */
    public function getVarianzaC4()
    {
        return $this->varianzaC4;               
    }
    
    public function prediccion(){
        
        
        
        return(1);
    }
}
