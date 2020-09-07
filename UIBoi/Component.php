<?php namespace UIBoi;


class Component{
    private $ID;
    private $CLASS;
    private $NAME;
    private $DEFAULT_CONSTRUCTOR;

    /**
     * @return string
     */
    public function getID(): string
    {
        return $this->ID;
    }

    /**
     * @return string
     */
    public function getClass(): string
    {
        return $this->CLASS;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->NAME;
    }

    /**
     * @return string
     */
    public function getDefaultConstructor(): string
    {
        return $this->DEFAULT_CONSTRUCTOR;
    }

    /**
     * @param string $ID
     */
    public function setID(string $ID): void
    {
        $this->ID = $ID;
    }

    /**
     * @param string $CLASS
     */
    public function setClass(string $CLASS): void
    {
        $this->CLASS = $CLASS;
    }

    /**
     * @param string $NAME
     */
    public function setName(string $NAME): void
    {
        $this->NAME = $NAME;
    }

    /**
     * @param string $DEFAULT_CONSTRUCTOR
     */
    public function setDefaultConstructor(string $DEFAULT_CONSTRUCTOR): void
    {
        $this->DEFAULT_CONSTRUCTOR = $DEFAULT_CONSTRUCTOR;
    }

    function __construct($ID, $CLASS, $NAME, $DEFAULT_CONSTRUCTOR){
        $this->setID($ID);
        $this->setClass($CLASS);
        $this->setName($NAME);
        $this->setDefaultConstructor($DEFAULT_CONSTRUCTOR);
    }

    public function draw(){
        echo $this->getDefaultConstructor();
    }
}