<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * Entrenamiento
 *
 * @ORM\Table(name="entrenamiento", indexes={@ORM\Index(name="fk_idEstudiante2", columns={"idEstudiante"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EntrenamientoRepository")
 */
class Entrenamiento 
{
    /**
     * @var integer
     *
     * @ORM\Column(name="identrenamiento", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $identrenamiento;
    
    /**
    * @var integer
    *
    * @ORM\Column(name="desertor", type="integer", nullable=false)
    */
    private $desertor;
    
    /**
     *
     * @var float
     * @ORM\Column(name="c1",type="float")
     */
    private $c1;
    
    /**
     *
     * @var float
     * @ORM\Column(name="c2",type="float")
     */
    private $c2;
    
    /**
     *
     * @var float
     * @ORM\Column(name="c3",type="float")
     */
    private $c3;

    /**
     *
     * @var float
     * @ORM\Column(name="c4",type="float")
     */
    private $c4;
    
    
    /**
     * @var \AppBundle\Entity\Estudiante
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Estudiante")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idestudiante", referencedColumnName="idEstudiante")
     * })
     */
    private $idestudiante;

    /**
     * Get identrenamiento
     *
     * @return integer
     */
    public function getIdentrenamiento()
    {
        return $this->identrenamiento;
    }

    /**
     * Set desertor
     *
     * @param integer $desertor
     *
     * @return Entrenamiento
     */
    public function setDesertor($desertor)
    {
        $this->desertor = $desertor;

        return $this;
    }

    /**
     * Get desertor
     *
     * @return integer
     */
    public function getDesertor()
    {
        return $this->desertor;
    }

    /**
     * Set c1
     *
     * @param float $c1
     *
     * @return Entrenamiento
     */
    public function setC1($c1)
    {
        $this->c1 = $c1;

        return $this;
    }

    /**
     * Get c1
     *
     * @return float
     */
    public function getC1()
    {
        return $this->c1;
    }

    /**
     * Set c2
     *
     * @param float $c2
     *
     * @return Entrenamiento
     */
    public function setC2($c2)
    {
        $this->c2 = $c2;

        return $this;
    }

    /**
     * Get c2
     *
     * @return float
     */
    public function getC2()
    {
        return $this->c2;
    }

    /**
     * Set c3
     *
     * @param float $c3
     *
     * @return Entrenamiento
     */
    public function setC3($c3)
    {
        $this->c3 = $c3;

        return $this;
    }

    /**
     * Get c3
     *
     * @return float
     */
    public function getC3()
    {
        return $this->c3;
    }

    /**
     * Set c4
     *
     * @param float $c4
     *
     * @return Entrenamiento
     */
    public function setC4($c4)
    {
        $this->c4 = $c4;

        return $this;
    }

    /**
     * Get c4
     *
     * @return float
     */
    public function getC4()
    {
        return $this->c4;
    }

    /**
     * Set idestudiante
     *
     * @param \AppBundle\Entity\Estudiante $idestudiante
     *
     * @return Entrenamiento
     */
    public function setIdestudiante(\AppBundle\Entity\Estudiante $idestudiante = null)
    {
        $this->idestudiante = $idestudiante;

        return $this;
    }

    /**
     * Get idestudiante
     *
     * @return \AppBundle\Entity\Estudiante
     */
    public function getIdestudiante()
    {
        return $this->idestudiante;
    }
}
