<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tipoidentificacion
 *
 * @ORM\Table(name="tipoidentificacion")
 * @ORM\Entity
 */
class Tipoidentificacion
{
    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=4, nullable=true)
     */
    private $tipo;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=45, nullable=true)
     */
    private $descripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="idTipoIdentificacion", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtipoidentificacion;



    /**
     * Set tipo
     *
     * @param string $tipo
     *
     * @return Tipoidentificacion
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return string
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Tipoidentificacion
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
     * Get idtipoidentificacion
     *
     * @return integer
     */
    public function getIdtipoidentificacion()
    {
        return $this->idtipoidentificacion;
    }
}
