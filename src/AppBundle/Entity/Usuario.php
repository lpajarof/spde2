<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuario
 *
 * @ORM\Table(name="usuario", indexes={@ORM\Index(name="fk_tipoIdentificacion", columns={"idTipoIdentificacion"}), @ORM\Index(name="fk_tipousuario", columns={"idTipoUsuario"})})
 * @ORM\Entity
 */
class Usuario
{
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
     * @ORM\Column(name="apellidos", type="string", length=80, nullable=false)
     */
    private $apellidos;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=80, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="contrasena", type="string", length=45, nullable=true)
     */
    private $contrasena;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=45, nullable=true)
     */
    private $telefono;

    /**
     * @var integer
     *
     * @ORM\Column(name="idUsuario", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idusuario;

    /**
     * @var \AppBundle\Entity\Tipousuario
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Tipousuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idTipoUsuario", referencedColumnName="idTipoUsuario")
     * })
     */
    private $idtipousuario;

    /**
     * @var \AppBundle\Entity\Tipoidentificacion
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Tipoidentificacion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idTipoIdentificacion", referencedColumnName="idTipoIdentificacion")
     * })
     */
    private $idtipoidentificacion;



    /**
     * Set identificacion
     *
     * @param string $identificacion
     *
     * @return Usuario
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
     * @return Usuario
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
     * @return Usuario
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
     * Set email
     *
     * @param string $email
     *
     * @return Usuario
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set contrasena
     *
     * @param string $contrasena
     *
     * @return Usuario
     */
    public function setContrasena($contrasena)
    {
        $this->contrasena = $contrasena;

        return $this;
    }

    /**
     * Get contrasena
     *
     * @return string
     */
    public function getContrasena()
    {
        return $this->contrasena;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     *
     * @return Usuario
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
     * Get idusuario
     *
     * @return integer
     */
    public function getIdusuario()
    {
        return $this->idusuario;
    }

    /**
     * Set idtipousuario
     *
     * @param \AppBundle\Entity\Tipousuario $idtipousuario
     *
     * @return Usuario
     */
    public function setIdtipousuario(\AppBundle\Entity\Tipousuario $idtipousuario = null)
    {
        $this->idtipousuario = $idtipousuario;

        return $this;
    }

    /**
     * Get idtipousuario
     *
     * @return \AppBundle\Entity\Tipousuario
     */
    public function getIdtipousuario()
    {
        return $this->idtipousuario;
    }

    /**
     * Set idtipoidentificacion
     *
     * @param \AppBundle\Entity\Tipoidentificacion $idtipoidentificacion
     *
     * @return Usuario
     */
    public function setIdtipoidentificacion(\AppBundle\Entity\Tipoidentificacion $idtipoidentificacion = null)
    {
        $this->idtipoidentificacion = $idtipoidentificacion;

        return $this;
    }

    /**
     * Get idtipoidentificacion
     *
     * @return \AppBundle\Entity\Tipoidentificacion
     */
    public function getIdtipoidentificacion()
    {
        return $this->idtipoidentificacion;
    }
}
