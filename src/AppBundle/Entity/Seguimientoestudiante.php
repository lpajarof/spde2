<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Seguimientoestudiante
 *
 * @ORM\Table(name="seguimientoestudiante", indexes={@ORM\Index(name="fk_idEstudianteSeg", columns={"idEstudiante"}), @ORM\Index(name="fk_idAccion", columns={"idAccion"}), @ORM\Index(name="fk_asignadoA", columns={"asignadoA"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SeguimientoestudianteRepository")
 */
class Seguimientoestudiante
{
    /**
     * @var string
     *
     * @ORM\Column(name="observaciones", type="string", length=45, nullable=false)
     */
    private $observaciones;

    /**
     * @var \Date
     *
     * @ORM\Column(name="fechaInicio", type="date", nullable=false)
     */
    private $fechainicio;

    /**
     * @var date
     *
     * @ORM\Column(name="fechaFin", type="date", nullable=false)
     */
    private $fechafin;

    /**
     * @var string
     *
     * @ORM\Column(name="estado", type="string", length=45, nullable=true)
     */
    private $estado;

    /**
     * @var integer
     *
     * @ORM\Column(name="idSeguimientoEstudiante", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idseguimientoestudiante;

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
     * @var \AppBundle\Entity\Accion
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Accion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idAccion", referencedColumnName="idAccion")
     * })
     */
    private $idaccion;

    /**
     * @var \AppBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="asignadoA", referencedColumnName="iduser")
     * })
     */
    private $asignadoa;



    /**
     * Set observaciones
     *
     * @param string $observaciones
     *
     * @return Seguimientoestudiante
     */
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;

        return $this;
    }

    /**
     * Get observaciones
     *
     * @return string
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }

    /**
     * Set fechainicio
     *
     * @param \DateTime $fechainicio
     *
     * @return Seguimientoestudiante
     */
    public function setFechainicio($fechainicio)
    {
        $this->fechainicio = $fechainicio;

        return $this;
    }

    /**
     * Get fechainicio
     *
     * @return \DateTime
     */
    public function getFechainicio()
    {
        return $this->fechainicio;
    }

    /**
     * Set fechafin
     *
     * @param string $fechafin
     *
     * @return Seguimientoestudiante
     */
    public function setFechafin($fechafin)
    {
        $this->fechafin = $fechafin;

        return $this;
    }

    /**
     * Get fechafin
     *
     * @return string
     */
    public function getFechafin()
    {
        return $this->fechafin;
    }

    /**
     * Set estado
     *
     * @param string $estado
     *
     * @return Seguimientoestudiante
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return string
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Get idseguimientoestudiante
     *
     * @return integer
     */
    public function getIdseguimientoestudiante()
    {
        return $this->idseguimientoestudiante;
    }

    /**
     * Set idestudiante
     *
     * @param \AppBundle\Entity\Estudiante $idestudiante
     *
     * @return Seguimientoestudiante
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
     * Set idaccion
     *
     * @param \AppBundle\Entity\Accion $idaccion
     *
     * @return Seguimientoestudiante
     */
    public function setIdaccion(\AppBundle\Entity\Accion $idaccion = null)
    {
        $this->idaccion = $idaccion;

        return $this;
    }

    /**
     * Get idaccion
     *
     * @return \AppBundle\Entity\Accion
     */
    public function getIdaccion()
    {
        return $this->idaccion;
    }

    /**
     * Set asignadoa
     *
     * @param \AppBundle\Entity\User $asignadoa
     *
     * @return Seguimientoestudiante
     */
    public function setAsignadoa(\AppBundle\Entity\User $asignadoa = null)
    {
        $this->asignadoa = $asignadoa;

        return $this;
    }

    /**
     * Get asignadoa
     *
     * @return \AppBundle\Entity\User
     */
    public function getAsignadoa()
    {
        return $this->asignadoa;
    }
}
