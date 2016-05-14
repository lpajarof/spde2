<?php

namespace AppBundle\Entity;

/**
 * Programa
 */
class Programa
{
    /**
     * @var string
     */
    private $codigo;

    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var integer
     */
    private $idprograma;


    /**
     * Set codigo
     *
     * @param string $codigo
     *
     * @return Programa
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
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Programa
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
     * Get idprograma
     *
     * @return integer
     */
    public function getIdprograma()
    {
        return $this->idprograma;
    }
}

