<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuariorol
 *
 * @ORM\Table(name="usuariorol", indexes={@ORM\Index(name="fk_idUsuario", columns={"idUsuario"}), @ORM\Index(name="fk_idRol", columns={"idRol"})})
 * @ORM\Entity
 */
class Usuariorol
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idUsuarioRol", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idusuariorol;

    /**
     * @var \AppBundle\Entity\Usuario
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idUsuario", referencedColumnName="idUsuario")
     * })
     */
    private $idusuario;

    /**
     * @var \AppBundle\Entity\Rol
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Rol")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idRol", referencedColumnName="idRole")
     * })
     */
    private $idrol;



    /**
     * Get idusuariorol
     *
     * @return integer
     */
    public function getIdusuariorol()
    {
        return $this->idusuariorol;
    }

    /**
     * Set idusuario
     *
     * @param \AppBundle\Entity\Usuario $idusuario
     *
     * @return Usuariorol
     */
    public function setIdusuario(\AppBundle\Entity\Usuario $idusuario = null)
    {
        $this->idusuario = $idusuario;

        return $this;
    }

    /**
     * Get idusuario
     *
     * @return \AppBundle\Entity\Usuario
     */
    public function getIdusuario()
    {
        return $this->idusuario;
    }

    /**
     * Set idrol
     *
     * @param \AppBundle\Entity\Rol $idrol
     *
     * @return Usuariorol
     */
    public function setIdrol(\AppBundle\Entity\Rol $idrol = null)
    {
        $this->idrol = $idrol;

        return $this;
    }

    /**
     * Get idrol
     *
     * @return \AppBundle\Entity\Rol
     */
    public function getIdrol()
    {
        return $this->idrol;
    }
}
