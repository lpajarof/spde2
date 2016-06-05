<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Clasificacion
 *
 * @ORM\Table(name="clasificacion", indexes={@ORM\Index(name="fk_idEstudiante", columns={"idEstudiante"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ClasificacionRepository")
 */
class Clasificacion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="desertor", type="integer", nullable=false)
     */
    private $desertor;

    /**
     * @var integer
     *
     * @ORM\Column(name="idClasificacion", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idclasificacion;

    /**
     * @var \AppBundle\Entity\Estudiante
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Estudiante")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idEstudiante", referencedColumnName="idEstudiante")
     * })
     */
    private $idestudiante;

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
     * Set desertor
     *
     * @param integer $desertor
     *
     * @return Clasificacion
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
    * Get idclasificacion
    *
    * @return integer
    */
    public function getIdclasificacion()
    {
        return $this->idclasificacion;
    }

    /**
     * Set idestudiante
     *
     * @param \AppBundle\Entity\Estudiante $idestudiante
     *
     * @return Clasificacion
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

    /**
     * Set c1
     *
     * @param float $c1
     *
     * @return Clasificacion
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
     * @return Clasificacion
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
     * @return Clasificacion
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
     * @return Clasificacion
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
}
