<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Caracteristica
 *
 * @ORM\Table(name="caracteristica")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CaracteristicaRepository")
 */
class Caracteristica
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
     * @ORM\Column(name="idCaracteristica", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcaracteristica;



    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Caracteristica
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
     * Get idcaracteristica
     *
     * @return integer
     */
    public function getIdcaracteristica()
    {
        return $this->idcaracteristica;
    }
}
