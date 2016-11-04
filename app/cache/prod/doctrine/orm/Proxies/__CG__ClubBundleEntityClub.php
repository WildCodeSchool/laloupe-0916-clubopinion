<?php

namespace Proxies\__CG__\ClubBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Club extends \ClubBundle\Entity\Club implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'ClubBundle\\Entity\\Club' . "\0" . 'image', '' . "\0" . 'ClubBundle\\Entity\\Club' . "\0" . 'iname', '' . "\0" . 'ClubBundle\\Entity\\Club' . "\0" . 'image2', '' . "\0" . 'ClubBundle\\Entity\\Club' . "\0" . 'iname2', '' . "\0" . 'ClubBundle\\Entity\\Club' . "\0" . 'image3', '' . "\0" . 'ClubBundle\\Entity\\Club' . "\0" . 'iname3', '' . "\0" . 'ClubBundle\\Entity\\Club' . "\0" . 'image4', '' . "\0" . 'ClubBundle\\Entity\\Club' . "\0" . 'iname4', '' . "\0" . 'ClubBundle\\Entity\\Club' . "\0" . 'video', '' . "\0" . 'ClubBundle\\Entity\\Club' . "\0" . 'vname', '' . "\0" . 'ClubBundle\\Entity\\Club' . "\0" . 'id', '' . "\0" . 'ClubBundle\\Entity\\Club' . "\0" . 'soustitre11', '' . "\0" . 'ClubBundle\\Entity\\Club' . "\0" . 'soustitre12', '' . "\0" . 'ClubBundle\\Entity\\Club' . "\0" . 'soustitre13', '' . "\0" . 'ClubBundle\\Entity\\Club' . "\0" . 'soustitre14', '' . "\0" . 'ClubBundle\\Entity\\Club' . "\0" . 'soustitre15', '' . "\0" . 'ClubBundle\\Entity\\Club' . "\0" . 'soustitre16', '' . "\0" . 'ClubBundle\\Entity\\Club' . "\0" . 'soustitre21', '' . "\0" . 'ClubBundle\\Entity\\Club' . "\0" . 'soustitre22', '' . "\0" . 'ClubBundle\\Entity\\Club' . "\0" . 'soustitre23', '' . "\0" . 'ClubBundle\\Entity\\Club' . "\0" . 'soustitre31', '' . "\0" . 'ClubBundle\\Entity\\Club' . "\0" . 'soustitre32', '' . "\0" . 'ClubBundle\\Entity\\Club' . "\0" . 'soustitre33', '' . "\0" . 'ClubBundle\\Entity\\Club' . "\0" . 'blocktitle1', '' . "\0" . 'ClubBundle\\Entity\\Club' . "\0" . 'blockparagraph1', '' . "\0" . 'ClubBundle\\Entity\\Club' . "\0" . 'blocktitle2', '' . "\0" . 'ClubBundle\\Entity\\Club' . "\0" . 'blockparagraph2', '' . "\0" . 'ClubBundle\\Entity\\Club' . "\0" . 'blocktitle3', '' . "\0" . 'ClubBundle\\Entity\\Club' . "\0" . 'blockparagraph3', '' . "\0" . 'ClubBundle\\Entity\\Club' . "\0" . 'blocktitle4', '' . "\0" . 'ClubBundle\\Entity\\Club' . "\0" . 'blockparagraph4'];
        }

        return ['__isInitialized__', '' . "\0" . 'ClubBundle\\Entity\\Club' . "\0" . 'image', '' . "\0" . 'ClubBundle\\Entity\\Club' . "\0" . 'iname', '' . "\0" . 'ClubBundle\\Entity\\Club' . "\0" . 'image2', '' . "\0" . 'ClubBundle\\Entity\\Club' . "\0" . 'iname2', '' . "\0" . 'ClubBundle\\Entity\\Club' . "\0" . 'image3', '' . "\0" . 'ClubBundle\\Entity\\Club' . "\0" . 'iname3', '' . "\0" . 'ClubBundle\\Entity\\Club' . "\0" . 'image4', '' . "\0" . 'ClubBundle\\Entity\\Club' . "\0" . 'iname4', '' . "\0" . 'ClubBundle\\Entity\\Club' . "\0" . 'video', '' . "\0" . 'ClubBundle\\Entity\\Club' . "\0" . 'vname', '' . "\0" . 'ClubBundle\\Entity\\Club' . "\0" . 'id', '' . "\0" . 'ClubBundle\\Entity\\Club' . "\0" . 'soustitre11', '' . "\0" . 'ClubBundle\\Entity\\Club' . "\0" . 'soustitre12', '' . "\0" . 'ClubBundle\\Entity\\Club' . "\0" . 'soustitre13', '' . "\0" . 'ClubBundle\\Entity\\Club' . "\0" . 'soustitre14', '' . "\0" . 'ClubBundle\\Entity\\Club' . "\0" . 'soustitre15', '' . "\0" . 'ClubBundle\\Entity\\Club' . "\0" . 'soustitre16', '' . "\0" . 'ClubBundle\\Entity\\Club' . "\0" . 'soustitre21', '' . "\0" . 'ClubBundle\\Entity\\Club' . "\0" . 'soustitre22', '' . "\0" . 'ClubBundle\\Entity\\Club' . "\0" . 'soustitre23', '' . "\0" . 'ClubBundle\\Entity\\Club' . "\0" . 'soustitre31', '' . "\0" . 'ClubBundle\\Entity\\Club' . "\0" . 'soustitre32', '' . "\0" . 'ClubBundle\\Entity\\Club' . "\0" . 'soustitre33', '' . "\0" . 'ClubBundle\\Entity\\Club' . "\0" . 'blocktitle1', '' . "\0" . 'ClubBundle\\Entity\\Club' . "\0" . 'blockparagraph1', '' . "\0" . 'ClubBundle\\Entity\\Club' . "\0" . 'blocktitle2', '' . "\0" . 'ClubBundle\\Entity\\Club' . "\0" . 'blockparagraph2', '' . "\0" . 'ClubBundle\\Entity\\Club' . "\0" . 'blocktitle3', '' . "\0" . 'ClubBundle\\Entity\\Club' . "\0" . 'blockparagraph3', '' . "\0" . 'ClubBundle\\Entity\\Club' . "\0" . 'blocktitle4', '' . "\0" . 'ClubBundle\\Entity\\Club' . "\0" . 'blockparagraph4'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Club $proxy) {
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
    public function setImage($image)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImage', [$image]);

        return parent::setImage($image);
    }

    /**
     * {@inheritDoc}
     */
    public function getImage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImage', []);

        return parent::getImage();
    }

    /**
     * {@inheritDoc}
     */
    public function setIname($iname)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIname', [$iname]);

        return parent::setIname($iname);
    }

    /**
     * {@inheritDoc}
     */
    public function getIname()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIname', []);

        return parent::getIname();
    }

    /**
     * {@inheritDoc}
     */
    public function setImage2($image2)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImage2', [$image2]);

        return parent::setImage2($image2);
    }

    /**
     * {@inheritDoc}
     */
    public function getImage2()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImage2', []);

        return parent::getImage2();
    }

    /**
     * {@inheritDoc}
     */
    public function setIname2($iname2)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIname2', [$iname2]);

        return parent::setIname2($iname2);
    }

    /**
     * {@inheritDoc}
     */
    public function getIname2()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIname2', []);

        return parent::getIname2();
    }

    /**
     * {@inheritDoc}
     */
    public function setImage3($image3)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImage3', [$image3]);

        return parent::setImage3($image3);
    }

    /**
     * {@inheritDoc}
     */
    public function getImage3()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImage3', []);

        return parent::getImage3();
    }

    /**
     * {@inheritDoc}
     */
    public function setIname3($iname3)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIname3', [$iname3]);

        return parent::setIname3($iname3);
    }

    /**
     * {@inheritDoc}
     */
    public function getIname3()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIname3', []);

        return parent::getIname3();
    }

    /**
     * {@inheritDoc}
     */
    public function setImage4($image4)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImage4', [$image4]);

        return parent::setImage4($image4);
    }

    /**
     * {@inheritDoc}
     */
    public function getImage4()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImage4', []);

        return parent::getImage4();
    }

    /**
     * {@inheritDoc}
     */
    public function setIname4($iname4)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIname4', [$iname4]);

        return parent::setIname4($iname4);
    }

    /**
     * {@inheritDoc}
     */
    public function getIname4()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIname4', []);

        return parent::getIname4();
    }

    /**
     * {@inheritDoc}
     */
    public function setVideo($video)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVideo', [$video]);

        return parent::setVideo($video);
    }

    /**
     * {@inheritDoc}
     */
    public function getVideo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVideo', []);

        return parent::getVideo();
    }

    /**
     * {@inheritDoc}
     */
    public function setVname($vname)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVname', [$vname]);

        return parent::setVname($vname);
    }

    /**
     * {@inheritDoc}
     */
    public function getVname()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVname', []);

        return parent::getVname();
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setSoustitre14($soustitre14)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSoustitre14', [$soustitre14]);

        return parent::setSoustitre14($soustitre14);
    }

    /**
     * {@inheritDoc}
     */
    public function getSoustitre14()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSoustitre14', []);

        return parent::getSoustitre14();
    }

    /**
     * {@inheritDoc}
     */
    public function setSoustitre15($soustitre15)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSoustitre15', [$soustitre15]);

        return parent::setSoustitre15($soustitre15);
    }

    /**
     * {@inheritDoc}
     */
    public function getSoustitre15()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSoustitre15', []);

        return parent::getSoustitre15();
    }

    /**
     * {@inheritDoc}
     */
    public function setSoustitre21($soustitre21)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSoustitre21', [$soustitre21]);

        return parent::setSoustitre21($soustitre21);
    }

    /**
     * {@inheritDoc}
     */
    public function getSoustitre21()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSoustitre21', []);

        return parent::getSoustitre21();
    }

    /**
     * {@inheritDoc}
     */
    public function setSoustitre22($soustitre22)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSoustitre22', [$soustitre22]);

        return parent::setSoustitre22($soustitre22);
    }

    /**
     * {@inheritDoc}
     */
    public function getSoustitre22()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSoustitre22', []);

        return parent::getSoustitre22();
    }

    /**
     * {@inheritDoc}
     */
    public function setSoustitre23($soustitre23)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSoustitre23', [$soustitre23]);

        return parent::setSoustitre23($soustitre23);
    }

    /**
     * {@inheritDoc}
     */
    public function getSoustitre23()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSoustitre23', []);

        return parent::getSoustitre23();
    }

    /**
     * {@inheritDoc}
     */
    public function setSoustitre31($soustitre31)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSoustitre31', [$soustitre31]);

        return parent::setSoustitre31($soustitre31);
    }

    /**
     * {@inheritDoc}
     */
    public function getSoustitre31()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSoustitre31', []);

        return parent::getSoustitre31();
    }

    /**
     * {@inheritDoc}
     */
    public function setSoustitre32($soustitre32)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSoustitre32', [$soustitre32]);

        return parent::setSoustitre32($soustitre32);
    }

    /**
     * {@inheritDoc}
     */
    public function getSoustitre32()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSoustitre32', []);

        return parent::getSoustitre32();
    }

    /**
     * {@inheritDoc}
     */
    public function setSoustitre33($soustitre33)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSoustitre33', [$soustitre33]);

        return parent::setSoustitre33($soustitre33);
    }

    /**
     * {@inheritDoc}
     */
    public function getSoustitre33()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSoustitre33', []);

        return parent::getSoustitre33();
    }

    /**
     * {@inheritDoc}
     */
    public function setBlocktitle1($blocktitle1)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBlocktitle1', [$blocktitle1]);

        return parent::setBlocktitle1($blocktitle1);
    }

    /**
     * {@inheritDoc}
     */
    public function getBlocktitle1()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBlocktitle1', []);

        return parent::getBlocktitle1();
    }

    /**
     * {@inheritDoc}
     */
    public function setBlockparagraph1($blockparagraph1)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBlockparagraph1', [$blockparagraph1]);

        return parent::setBlockparagraph1($blockparagraph1);
    }

    /**
     * {@inheritDoc}
     */
    public function getBlockparagraph1()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBlockparagraph1', []);

        return parent::getBlockparagraph1();
    }

    /**
     * {@inheritDoc}
     */
    public function setBlocktitle2($blocktitle2)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBlocktitle2', [$blocktitle2]);

        return parent::setBlocktitle2($blocktitle2);
    }

    /**
     * {@inheritDoc}
     */
    public function getBlocktitle2()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBlocktitle2', []);

        return parent::getBlocktitle2();
    }

    /**
     * {@inheritDoc}
     */
    public function setBlockparagraph2($blockparagraph2)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBlockparagraph2', [$blockparagraph2]);

        return parent::setBlockparagraph2($blockparagraph2);
    }

    /**
     * {@inheritDoc}
     */
    public function getBlockparagraph2()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBlockparagraph2', []);

        return parent::getBlockparagraph2();
    }

    /**
     * {@inheritDoc}
     */
    public function setBlocktitle3($blocktitle3)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBlocktitle3', [$blocktitle3]);

        return parent::setBlocktitle3($blocktitle3);
    }

    /**
     * {@inheritDoc}
     */
    public function getBlocktitle3()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBlocktitle3', []);

        return parent::getBlocktitle3();
    }

    /**
     * {@inheritDoc}
     */
    public function setBlockparagraph3($blockparagraph3)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBlockparagraph3', [$blockparagraph3]);

        return parent::setBlockparagraph3($blockparagraph3);
    }

    /**
     * {@inheritDoc}
     */
    public function getBlockparagraph3()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBlockparagraph3', []);

        return parent::getBlockparagraph3();
    }

    /**
     * {@inheritDoc}
     */
    public function setBlocktitle4($blocktitle4)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBlocktitle4', [$blocktitle4]);

        return parent::setBlocktitle4($blocktitle4);
    }

    /**
     * {@inheritDoc}
     */
    public function getBlocktitle4()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBlocktitle4', []);

        return parent::getBlocktitle4();
    }

    /**
     * {@inheritDoc}
     */
    public function setBlockparagraph4($blockparagraph4)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBlockparagraph4', [$blockparagraph4]);

        return parent::setBlockparagraph4($blockparagraph4);
    }

    /**
     * {@inheritDoc}
     */
    public function getBlockparagraph4()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBlockparagraph4', []);

        return parent::getBlockparagraph4();
    }

    /**
     * {@inheritDoc}
     */
    public function setSoustitre11($soustitre11)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSoustitre11', [$soustitre11]);

        return parent::setSoustitre11($soustitre11);
    }

    /**
     * {@inheritDoc}
     */
    public function getSoustitre11()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSoustitre11', []);

        return parent::getSoustitre11();
    }

    /**
     * {@inheritDoc}
     */
    public function setSoustitre12($soustitre12)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSoustitre12', [$soustitre12]);

        return parent::setSoustitre12($soustitre12);
    }

    /**
     * {@inheritDoc}
     */
    public function getSoustitre12()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSoustitre12', []);

        return parent::getSoustitre12();
    }

    /**
     * {@inheritDoc}
     */
    public function setSoustitre13($soustitre13)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSoustitre13', [$soustitre13]);

        return parent::setSoustitre13($soustitre13);
    }

    /**
     * {@inheritDoc}
     */
    public function getSoustitre13()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSoustitre13', []);

        return parent::getSoustitre13();
    }

    /**
     * {@inheritDoc}
     */
    public function setSoustitre16($soustitre16)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSoustitre16', [$soustitre16]);

        return parent::setSoustitre16($soustitre16);
    }

    /**
     * {@inheritDoc}
     */
    public function getSoustitre16()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSoustitre16', []);

        return parent::getSoustitre16();
    }

}
