<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entrenamiento
 *
 * @ORM\Table(name="entrenamiento", indexes={@ORM\Index(name="fk_idClasificacion", columns={"idClasificacion"}), @ORM\Index(name="fk_idCaracteristica", columns={"idCaracteristica"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EntrenamientoRepository")
 */
class Entrenamiento
{
    /**
     * @var float
     *
     * @ORM\Column(name="valor", type="float", nullable=false)
     */
    private $valor;

    /**
     * @var integer
     *
     * @ORM\Column(name="idEntrenamiento", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $identrenamiento;

    /**
     * @var \AppBundle\Entity\Clasificacion
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Clasificacion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idClasificacion", referencedColumnName="idClasificacion")
     * })
     */
    private $idclasificacion;

    /**
     * @var \AppBundle\Entity\Caracteristica
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Caracteristica")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idCaracteristica", referencedColumnName="idCaracteristica")
     * })
     */
    private $idcaracteristica;



    /**
     * Set valor
     *
     * @param integer $valor
     *
     * @return Entrenamiento
     */
    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }

    /**
     * Get valor
     *
     * @return integer
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Get identrenamiento
     *
     * @return integer
     */
    public function getIdentrenamiento()
    {
        return $this->identrenamiento;
    }

    /**
     * Set idclasificacion
     *
     * @param \AppBundle\Entity\Clasificacion $idclasificacion
     *
     * @return Entrenamiento
     */
    public function setIdclasificacion(\AppBundle\Entity\Clasificacion $idclasificacion = null)
    {
        $this->idclasificacion = $idclasificacion;

        return $this;
    }

    /**
     * Get idclasificacion
     *
     * @return \AppBundle\Entity\Clasificacion
     */
    public function getIdclasificacion()
    {
        return $this->idclasificacion;
    }

    /**
     * Set idcaracteristica
     *
     * @param \AppBundle\Entity\Caracteristica $idcaracteristica
     *
     * @return Entrenamiento
     */
    public function setIdcaracteristica(\AppBundle\Entity\Caracteristica $idcaracteristica = null)
    {
        $this->idcaracteristica = $idcaracteristica;

        return $this;
    }

    /**
     * Get idcaracteristica
     *
     * @return \AppBundle\Entity\Caracteristica
     */
    public function getIdcaracteristica()
    {
        return $this->idcaracteristica;
    }
}
