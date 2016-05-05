<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Estudiantes extends \AppBundle\Entity\Estudiantes implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Estudiantes' . "\0" . 'codigo', '' . "\0" . 'AppBundle\\Entity\\Estudiantes' . "\0" . 'tipoidentificacion', '' . "\0" . 'AppBundle\\Entity\\Estudiantes' . "\0" . 'identificacion', '' . "\0" . 'AppBundle\\Entity\\Estudiantes' . "\0" . 'nombres', '' . "\0" . 'AppBundle\\Entity\\Estudiantes' . "\0" . 'apellidos', '' . "\0" . 'AppBundle\\Entity\\Estudiantes' . "\0" . 'telefono', '' . "\0" . 'AppBundle\\Entity\\Estudiantes' . "\0" . 'direccion', '' . "\0" . 'AppBundle\\Entity\\Estudiantes' . "\0" . 'idestudiante', '' . "\0" . 'AppBundle\\Entity\\Estudiantes' . "\0" . 'tipoidentificaciontipoidentificacion'];
        }

        return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Estudiantes' . "\0" . 'codigo', '' . "\0" . 'AppBundle\\Entity\\Estudiantes' . "\0" . 'tipoidentificacion', '' . "\0" . 'AppBundle\\Entity\\Estudiantes' . "\0" . 'identificacion', '' . "\0" . 'AppBundle\\Entity\\Estudiantes' . "\0" . 'nombres', '' . "\0" . 'AppBundle\\Entity\\Estudiantes' . "\0" . 'apellidos', '' . "\0" . 'AppBundle\\Entity\\Estudiantes' . "\0" . 'telefono', '' . "\0" . 'AppBundle\\Entity\\Estudiantes' . "\0" . 'direccion', '' . "\0" . 'AppBundle\\Entity\\Estudiantes' . "\0" . 'idestudiante', '' . "\0" . 'AppBundle\\Entity\\Estudiantes' . "\0" . 'tipoidentificaciontipoidentificacion'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Estudiantes $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function setCodigo($codigo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCodigo', [$codigo]);

        return parent::setCodigo($codigo);
    }

    /**
     * {@inheritDoc}
     */
    public function getCodigo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCodigo', []);

        return parent::getCodigo();
    }

    /**
     * {@inheritDoc}
     */
    public function setTipoidentificacion($tipoidentificacion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTipoidentificacion', [$tipoidentificacion]);

        return parent::setTipoidentificacion($tipoidentificacion);
    }

    /**
     * {@inheritDoc}
     */
    public function getTipoidentificacion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTipoidentificacion', []);

        return parent::getTipoidentificacion();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdentificacion($identificacion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdentificacion', [$identificacion]);

        return parent::setIdentificacion($identificacion);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdentificacion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdentificacion', []);

        return parent::getIdentificacion();
    }

    /**
     * {@inheritDoc}
     */
    public function setNombres($nombres)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNombres', [$nombres]);

        return parent::setNombres($nombres);
    }

    /**
     * {@inheritDoc}
     */
    public function getNombres()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNombres', []);

        return parent::getNombres();
    }

    /**
     * {@inheritDoc}
     */
    public function setApellidos($apellidos)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setApellidos', [$apellidos]);

        return parent::setApellidos($apellidos);
    }

    /**
     * {@inheritDoc}
     */
    public function getApellidos()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getApellidos', []);

        return parent::getApellidos();
    }

    /**
     * {@inheritDoc}
     */
    public function setTelefono($telefono)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTelefono', [$telefono]);

        return parent::setTelefono($telefono);
    }

    /**
     * {@inheritDoc}
     */
    public function getTelefono()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTelefono', []);

        return parent::getTelefono();
    }

    /**
     * {@inheritDoc}
     */
    public function setDireccion($direccion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDireccion', [$direccion]);

        return parent::setDireccion($direccion);
    }

    /**
     * {@inheritDoc}
     */
    public function getDireccion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDireccion', []);

        return parent::getDireccion();
    }

    /**
     * {@inheritDoc}
     */
    public function getIdestudiante()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIdestudiante();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdestudiante', []);

        return parent::getIdestudiante();
    }

    /**
     * {@inheritDoc}
     */
    public function setTipoidentificaciontipoidentificacion(\AppBundle\Entity\Tipoidentificacion $tipoidentificaciontipoidentificacion = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTipoidentificaciontipoidentificacion', [$tipoidentificaciontipoidentificacion]);

        return parent::setTipoidentificaciontipoidentificacion($tipoidentificaciontipoidentificacion);
    }

    /**
     * {@inheritDoc}
     */
    public function getTipoidentificaciontipoidentificacion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTipoidentificaciontipoidentificacion', []);

        return parent::getTipoidentificaciontipoidentificacion();
    }

}
