<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Clasificacion
 *
 * @ORM\Table(name="clasificacion", indexes={@ORM\Index(name="fk_idEstudiante", columns={"idEstudiante"})})
 * @ORM\Entity
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
     * @ORM\Column(name="anio", type="integer", nullable=false)
     */
    private $anio;

    /**
     * @var integer
     *
     * @ORM\Column(name="periodo", type="integer", nullable=false)
     */
    private $periodo;

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
     * Set anio
     *
     * @param integer $anio
     *
     * @return Clasificacion
     */
    public function setAnio($anio)
    {
        $this->anio = $anio;

        return $this;
    }

    /**
     * Get anio
     *
     * @return integer
     */
    public function getAnio()
    {
        return $this->anio;
    }

    /**
     * Set periodo
     *
     * @param integer $periodo
     *
     * @return Clasificacion
     */
    public function setPeriodo($periodo)
    {
        $this->periodo = $periodo;

        return $this;
    }

    /**
     * Get periodo
     *
     * @return integer
     */
    public function getPeriodo()
    {
        return $this->periodo;
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
}
