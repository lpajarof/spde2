<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Estudiante
 *
 * @ORM\Table(name="estudiante", uniqueConstraints={@ORM\UniqueConstraint(name="codigo", columns={"codigo"}), @ORM\UniqueConstraint(name="identificacion", columns={"identificacion"})}, indexes={@ORM\Index(name="fk_tipoIdentificacionEst", columns={"tipoIdentificacion"})})
 * @ORM\Entity
 */
class Estudiante
{
    /**
     * @var string
     *
     * @ORM\Column(name="codigo", type="string", length=45, nullable=false)
     */
    private $codigo;

    /**
     * @var string
     *
     * @ORM\Column(name="identificacion", type="string", length=45, nullable=false)
     */
    private $identificacion;

    /**
     * @var string
     *
     * @ORM\Column(name="nombres", type="string", length=45, nullable=false)
     */
    private $nombres;

    /**
     * @var string
     *
     * @ORM\Column(name="apellidos", type="string", length=45, nullable=false)
     */
    private $apellidos;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=45, nullable=true)
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=45, nullable=false)
     */
    private $direccion;

    /**
     * @var integer
     *
     * @ORM\Column(name="idEstudiante", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idestudiante;

    /**
     * @var \AppBundle\Entity\Tipoidentificacion
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Tipoidentificacion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tipoIdentificacion", referencedColumnName="idTipoIdentificacion")
     * })
     */
    private $tipoidentificacion;



    /**
     * Set codigo
     *
     * @param string $codigo
     *
     * @return Estudiante
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Get codigo
     *
     * @return string
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set identificacion
     *
     * @param string $identificacion
     *
     * @return Estudiante
     */
    public function setIdentificacion($identificacion)
    {
        $this->identificacion = $identificacion;

        return $this;
    }

    /**
     * Get identificacion
     *
     * @return string
     */
    public function getIdentificacion()
    {
        return $this->identificacion;
    }

    /**
     * Set nombres
     *
     * @param string $nombres
     *
     * @return Estudiante
     */
    public function setNombres($nombres)
    {
        $this->nombres = $nombres;

        return $this;
    }

    /**
     * Get nombres
     *
     * @return string
     */
    public function getNombres()
    {
        return $this->nombres;
    }

    /**
     * Set apellidos
     *
     * @param string $apellidos
     *
     * @return Estudiante
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * Get apellidos
     *
     * @return string
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     *
     * @return Estudiante
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     *
     * @return Estudiante
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Get idestudiante
     *
     * @return integer
     */
    public function getIdestudiante()
    {
        return $this->idestudiante;
    }

    /**
     * Set tipoidentificacion
     *
     * @param \AppBundle\Entity\Tipoidentificacion $tipoidentificacion
     *
     * @return Estudiante
     */
    public function setTipoidentificacion(\AppBundle\Entity\Tipoidentificacion $tipoidentificacion = null)
    {
        $this->tipoidentificacion = $tipoidentificacion;

        return $this;
    }

    /**
     * Get tipoidentificacion
     *
     * @return \AppBundle\Entity\Tipoidentificacion
     */
    public function getTipoidentificacion()
    {
        return $this->tipoidentificacion;
    }
}
