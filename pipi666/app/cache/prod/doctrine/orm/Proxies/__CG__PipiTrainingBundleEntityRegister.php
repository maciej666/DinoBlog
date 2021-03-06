<?php

namespace Proxies\__CG__\PipiTrainingBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Register extends \PipiTrainingBundle\Entity\Register implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'PipiTrainingBundle\\Entity\\Register' . "\0" . 'id', '' . "\0" . 'PipiTrainingBundle\\Entity\\Register' . "\0" . 'name', '' . "\0" . 'PipiTrainingBundle\\Entity\\Register' . "\0" . 'email', '' . "\0" . 'PipiTrainingBundle\\Entity\\Register' . "\0" . 'sex', '' . "\0" . 'PipiTrainingBundle\\Entity\\Register' . "\0" . 'birthdate', '' . "\0" . 'PipiTrainingBundle\\Entity\\Register' . "\0" . 'country', '' . "\0" . 'PipiTrainingBundle\\Entity\\Register' . "\0" . 'course', '' . "\0" . 'PipiTrainingBundle\\Entity\\Register' . "\0" . 'invest', '' . "\0" . 'PipiTrainingBundle\\Entity\\Register' . "\0" . 'comments', '' . "\0" . 'PipiTrainingBundle\\Entity\\Register' . "\0" . 'paymentFile');
        }

        return array('__isInitialized__', '' . "\0" . 'PipiTrainingBundle\\Entity\\Register' . "\0" . 'id', '' . "\0" . 'PipiTrainingBundle\\Entity\\Register' . "\0" . 'name', '' . "\0" . 'PipiTrainingBundle\\Entity\\Register' . "\0" . 'email', '' . "\0" . 'PipiTrainingBundle\\Entity\\Register' . "\0" . 'sex', '' . "\0" . 'PipiTrainingBundle\\Entity\\Register' . "\0" . 'birthdate', '' . "\0" . 'PipiTrainingBundle\\Entity\\Register' . "\0" . 'country', '' . "\0" . 'PipiTrainingBundle\\Entity\\Register' . "\0" . 'course', '' . "\0" . 'PipiTrainingBundle\\Entity\\Register' . "\0" . 'invest', '' . "\0" . 'PipiTrainingBundle\\Entity\\Register' . "\0" . 'comments', '' . "\0" . 'PipiTrainingBundle\\Entity\\Register' . "\0" . 'paymentFile');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Register $proxy) {
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
    public function getPaymentFile()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPaymentFile', array());

        return parent::getPaymentFile();
    }

    /**
     * {@inheritDoc}
     */
    public function setPaymentFile($paymentFile)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPaymentFile', array($paymentFile));

        return parent::setPaymentFile($paymentFile);
    }

    /**
     * {@inheritDoc}
     */
    public function save($savePath)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'save', array($savePath));

        return parent::save($savePath);
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
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', array($name));

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', array());

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail($email)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', array($email));

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', array());

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setSex($sex)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSex', array($sex));

        return parent::setSex($sex);
    }

    /**
     * {@inheritDoc}
     */
    public function getSex()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSex', array());

        return parent::getSex();
    }

    /**
     * {@inheritDoc}
     */
    public function setBirthdate($birthdate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBirthdate', array($birthdate));

        return parent::setBirthdate($birthdate);
    }

    /**
     * {@inheritDoc}
     */
    public function getBirthdate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBirthdate', array());

        return parent::getBirthdate();
    }

    /**
     * {@inheritDoc}
     */
    public function setCountry($country)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCountry', array($country));

        return parent::setCountry($country);
    }

    /**
     * {@inheritDoc}
     */
    public function getCountry()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCountry', array());

        return parent::getCountry();
    }

    /**
     * {@inheritDoc}
     */
    public function setCourse($course)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCourse', array($course));

        return parent::setCourse($course);
    }

    /**
     * {@inheritDoc}
     */
    public function getCourse()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCourse', array());

        return parent::getCourse();
    }

    /**
     * {@inheritDoc}
     */
    public function setInvest($invest)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setInvest', array($invest));

        return parent::setInvest($invest);
    }

    /**
     * {@inheritDoc}
     */
    public function getInvest()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInvest', array());

        return parent::getInvest();
    }

    /**
     * {@inheritDoc}
     */
    public function setComments($comments)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setComments', array($comments));

        return parent::setComments($comments);
    }

    /**
     * {@inheritDoc}
     */
    public function getComments()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getComments', array());

        return parent::getComments();
    }

}
