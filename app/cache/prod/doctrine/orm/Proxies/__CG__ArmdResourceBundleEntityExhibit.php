<?php

namespace Proxies\__CG__\Armd\ResourceBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Exhibit extends \Armd\ResourceBundle\Entity\Exhibit implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', 'id', 'number', 'title', 'author', 'category', 'description', 'photo', 'icon', 'metadata', 'position', 'QRCode', 'hall', 'usn');
        }

        return array('__isInitialized__', 'id', 'number', 'title', 'author', 'category', 'description', 'photo', 'icon', 'metadata', 'position', 'QRCode', 'hall', 'usn');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Exhibit $proxy) {
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
    public function setAuthor($author)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAuthor', array($author));

        return parent::setAuthor($author);
    }

    /**
     * {@inheritDoc}
     */
    public function getAuthor()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAuthor', array());

        return parent::getAuthor();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', array($description));

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', array());

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setMetadata($metadata)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMetadata', array($metadata));

        return parent::setMetadata($metadata);
    }

    /**
     * {@inheritDoc}
     */
    public function getMetadata()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMetadata', array());

        return parent::getMetadata();
    }

    /**
     * {@inheritDoc}
     */
    public function setPosition($position)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPosition', array($position));

        return parent::setPosition($position);
    }

    /**
     * {@inheritDoc}
     */
    public function getPosition()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPosition', array());

        return parent::getPosition();
    }

    /**
     * {@inheritDoc}
     */
    public function setCategory(\Armd\ResourceBundle\Entity\Category $category = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCategory', array($category));

        return parent::setCategory($category);
    }

    /**
     * {@inheritDoc}
     */
    public function getCategory()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCategory', array());

        return parent::getCategory();
    }

    /**
     * {@inheritDoc}
     */
    public function setPhoto(\Armd\ResourceBundle\Entity\Media\Media $photo = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPhoto', array($photo));

        return parent::setPhoto($photo);
    }

    /**
     * {@inheritDoc}
     */
    public function getPhoto()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPhoto', array());

        return parent::getPhoto();
    }

    /**
     * {@inheritDoc}
     */
    public function setIcon(\Armd\ResourceBundle\Entity\Media\Media $icon = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIcon', array($icon));

        return parent::setIcon($icon);
    }

    /**
     * {@inheritDoc}
     */
    public function getIcon()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIcon', array());

        return parent::getIcon();
    }

    /**
     * {@inheritDoc}
     */
    public function setQRCode($QRCode)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setQRCode', array($QRCode));

        return parent::setQRCode($QRCode);
    }

    /**
     * {@inheritDoc}
     */
    public function getQRCode()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getQRCode', array());

        return parent::getQRCode();
    }

    /**
     * {@inheritDoc}
     */
    public function setHall(\Armd\ResourceBundle\Entity\Hall $hall = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHall', array($hall));

        return parent::setHall($hall);
    }

    /**
     * {@inheritDoc}
     */
    public function getHall()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHall', array());

        return parent::getHall();
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
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', array());

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function getVirtualCategory()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVirtualCategory', array());

        return parent::getVirtualCategory();
    }

    /**
     * {@inheritDoc}
     */
    public function getVirtualIcon()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVirtualIcon', array());

        return parent::getVirtualIcon();
    }

    /**
     * {@inheritDoc}
     */
    public function getVirtualPhoto()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVirtualPhoto', array());

        return parent::getVirtualPhoto();
    }

    /**
     * {@inheritDoc}
     */
    public function getVirtualHall()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVirtualHall', array());

        return parent::getVirtualHall();
    }

    /**
     * {@inheritDoc}
     */
    public function getVirtualPosition()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVirtualPosition', array());

        return parent::getVirtualPosition();
    }

    /**
     * {@inheritDoc}
     */
    public function getVirtualMetadata()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVirtualMetadata', array());

        return parent::getVirtualMetadata();
    }

}
