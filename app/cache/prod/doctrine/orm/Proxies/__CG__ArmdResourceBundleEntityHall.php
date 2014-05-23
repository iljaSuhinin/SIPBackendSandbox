<?php

namespace Proxies\__CG__\Armd\ResourceBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Hall extends \Armd\ResourceBundle\Entity\Hall implements \Doctrine\ORM\Proxy\Proxy
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
    public static $lazyPropertiesDefaults = array();



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
            return array('__isInitialized__', 'id', 'number', 'title', 'floor', 'geometry', 'coordinates', 'transitions', 'septa', 'exhibits', 'infrastructures', 'close', 'closeStart', 'closeEnd', 'offCenter', 'usn');
        }

        return array('__isInitialized__', 'id', 'number', 'title', 'floor', 'geometry', 'coordinates', 'transitions', 'septa', 'exhibits', 'infrastructures', 'close', 'closeStart', 'closeEnd', 'offCenter', 'usn');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Hall $proxy) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
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
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setNumber($number)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNumber', array($number));

        return parent::setNumber($number);
    }

    /**
     * {@inheritDoc}
     */
    public function getNumber()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumber', array());

        return parent::getNumber();
    }

    /**
     * {@inheritDoc}
     */
    public function setTitle($title)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitle', array($title));

        return parent::setTitle($title);
    }

    /**
     * {@inheritDoc}
     */
    public function getTitle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitle', array());

        return parent::getTitle();
    }

    /**
     * {@inheritDoc}
     */
    public function setFloor($floor)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFloor', array($floor));

        return parent::setFloor($floor);
    }

    /**
     * {@inheritDoc}
     */
    public function getFloor()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFloor', array());

        return parent::getFloor();
    }

    /**
     * {@inheritDoc}
     */
    public function setGeometry($geometry)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGeometry', array($geometry));

        return parent::setGeometry($geometry);
    }

    /**
     * {@inheritDoc}
     */
    public function getGeometry()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGeometry', array());

        return parent::getGeometry();
    }

    /**
     * {@inheritDoc}
     */
    public function setCoordinates($coordinates)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCoordinates', array($coordinates));

        return parent::setCoordinates($coordinates);
    }

    /**
     * {@inheritDoc}
     */
    public function getCoordinates()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCoordinates', array());

        return parent::getCoordinates();
    }

    /**
     * {@inheritDoc}
     */
    public function setTransitions($transitions)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTransitions', array($transitions));

        return parent::setTransitions($transitions);
    }

    /**
     * {@inheritDoc}
     */
    public function getTransitions()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTransitions', array());

        return parent::getTransitions();
    }

    /**
     * {@inheritDoc}
     */
    public function setSepta($septa)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSepta', array($septa));

        return parent::setSepta($septa);
    }

    /**
     * {@inheritDoc}
     */
    public function getSepta()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSepta', array());

        return parent::getSepta();
    }

    /**
     * {@inheritDoc}
     */
    public function addExhibit(\Armd\ResourceBundle\Entity\Exhibit $exhibits)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addExhibit', array($exhibits));

        return parent::addExhibit($exhibits);
    }

    /**
     * {@inheritDoc}
     */
    public function removeExhibit(\Armd\ResourceBundle\Entity\Exhibit $exhibits)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeExhibit', array($exhibits));

        return parent::removeExhibit($exhibits);
    }

    /**
     * {@inheritDoc}
     */
    public function addInfrastructure(\Armd\ResourceBundle\Entity\Infrastructure $infrastructures)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addInfrastructure', array($infrastructures));

        return parent::addInfrastructure($infrastructures);
    }

    /**
     * {@inheritDoc}
     */
    public function removeInfrastructure(\Armd\ResourceBundle\Entity\Infrastructure $infrastructures)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeInfrastructure', array($infrastructures));

        return parent::removeInfrastructure($infrastructures);
    }

    /**
     * {@inheritDoc}
     */
    public function getInfrastructures()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInfrastructures', array());

        return parent::getInfrastructures();
    }

    /**
     * {@inheritDoc}
     */
    public function getExhibits()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getExhibits', array());

        return parent::getExhibits();
    }

    /**
     * {@inheritDoc}
     */
    public function setClose($close)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setClose', array($close));

        return parent::setClose($close);
    }

    /**
     * {@inheritDoc}
     */
    public function getClose()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClose', array());

        return parent::getClose();
    }

    /**
     * {@inheritDoc}
     */
    public function setCloseStart($closeStart)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCloseStart', array($closeStart));

        return parent::setCloseStart($closeStart);
    }

    /**
     * {@inheritDoc}
     */
    public function getCloseStart()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCloseStart', array());

        return parent::getCloseStart();
    }

    /**
     * {@inheritDoc}
     */
    public function setCloseEnd($closeEnd)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCloseEnd', array($closeEnd));

        return parent::setCloseEnd($closeEnd);
    }

    /**
     * {@inheritDoc}
     */
    public function getCloseEnd()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCloseEnd', array());

        return parent::getCloseEnd();
    }

    /**
     * {@inheritDoc}
     */
    public function setOffCenter($offCenter)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOffCenter', array($offCenter));

        return parent::setOffCenter($offCenter);
    }

    /**
     * {@inheritDoc}
     */
    public function getOffCenter()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOffCenter', array());

        return parent::getOffCenter();
    }

    /**
     * {@inheritDoc}
     */
    public function setUsn($usn)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUsn', array($usn));

        return parent::setUsn($usn);
    }

    /**
     * {@inheritDoc}
     */
    public function getUsn()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsn', array());

        return parent::getUsn();
    }

    /**
     * {@inheritDoc}
     */
    public function getToString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getToString', array());

        return parent::getToString();
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', array());

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function getVirtualCoordinates()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVirtualCoordinates', array());

        return parent::getVirtualCoordinates();
    }

    /**
     * {@inheritDoc}
     */
    public function getVirtualGeometry()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVirtualGeometry', array());

        return parent::getVirtualGeometry();
    }

    /**
     * {@inheritDoc}
     */
    public function getVirtualSchedule()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVirtualSchedule', array());

        return parent::getVirtualSchedule();
    }

    /**
     * {@inheritDoc}
     */
    public function getVirtualWalls()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVirtualWalls', array());

        return parent::getVirtualWalls();
    }

    /**
     * {@inheritDoc}
     */
    public function getVirtualConnections()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVirtualConnections', array());

        return parent::getVirtualConnections();
    }

}
