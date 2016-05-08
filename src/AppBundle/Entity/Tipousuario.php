<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tipousuario
 *
 * @ORM\Table(name="tipousuario", uniqueConstraints={@ORM\UniqueConstraint(name="tipoUsuario", columns={"tipoUsuario"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TipousuarioRepository")
 */
class Tipousuario
{
    /**
     * @var integer
     *
     * @ORM\Column(name="tipoUsuario", type="integer", nullable=false)
     */
    private $tipousuario;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=45, nullable=false)
     */
    private $descripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="idTipoUsuario", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtipousuario;



    /**
     * Set tipousuario
     *
     * @param integer $tipousuario
     *
     * @return Tipousuario
     */
    public function setTipousuario($tipousuario)
    {
        $this->tipousuario = $tipousuario;

        return $this;
    }

    /**
     * Get tipousuario
     *
     * @return integer
     */
    public function getTipousuario()
    {
        return $this->tipousuario;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Tipousuario
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Get idtipousuario
     *
     * @return integer
     */
    public function getIdtipousuario()
    {
        return $this->idtipousuario;
    }
}
