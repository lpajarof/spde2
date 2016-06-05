<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Accion
 *
 * @ORM\Table(name="accion")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AccionRepository")
 */
class Accion
{
    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=45, nullable=false)
     */
    private $descripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="idAccion", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idaccion;



    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Accion
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
     * Get idaccion
     *
     * @return integer
     */
    public function getIdaccion()
    {
        return $this->idaccion;
    }
}
