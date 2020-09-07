<?php namespace UIBoi;


class Form{
    private $ID;
    private $CLASS;
    private $UI_CLASS;
    private $NAME;
    private $ACTION;
    private $URL;
    private $COMPONENTS;

    /**
     * @return string
     */
    public function getID(){
        return $this->ID;
    }

    /**
     * @return string
     */
    public function getClass(){
        return $this->CLASS;
    }

    /**
     * @return string
     */
    public function getUiClass(){
        return $this->UI_CLASS;
    }

    /**
     * @return string
     */
    public function getName(){
        return $this->NAME;
    }

    /**
     * @return string
     */
    public function getAction(){
        return $this->ACTION;
    }

    /**
     * @return string
     */
    public function getURL(){
        return $this->URL;
    }

    /**
     * @return Component[]
     */
    public function getComponents(): array
    {
        return $this->COMPONENTS;
    }

    /**
     * @param string $ID
     */
    public function setID($ID){
        $this->ID = $ID;
    }

    /**
     * @param string $CLASS
     */
    public function setClass($CLASS){
        $this->CLASS = $CLASS;
    }

    /**
     * @param string $UI_CLASS
     */
    public function setUiClass($UI_CLASS){
        $this->UI_CLASS = $UI_CLASS;
    }

    /**
     * @param string $NAME
     */
    public function setName($NAME){
        $this->NAME = $NAME;
    }

    /**
     * @param string $ACTION
     */
    public function setAction($ACTION){
        $this->ACTION = $ACTION;
    }

    /**
     * @param string $URL
     */
    public function setURL($URL){
        $this->URL = $URL;
    }

    /**
     * @param Component[] $COMPONENTS
     */
    public function setComponents($COMPONENTS): void
    {
        $this->COMPONENTS = $COMPONENTS;
    }

    /**
     * @param Component $COMPONENT
     */
    public function addComponent(Component $COMPONENT){
        array_push($this->COMPONENTS, $COMPONENT);
    }

    function __construct($ID, $CLASS, $UI_CLASS, $NAME, $ACTION, $URL){
        $this->setID($ID);
        $this->setClass($CLASS);
        $this->setUiClass($UI_CLASS);
        $this->setName($NAME);
        $this->setAction($ACTION);
        $this->setURL($URL);
        $this->setComponents([]);
    }

    public function draw(){
        foreach ($this->getComponents() as $component){
            $component->draw();
        }
    }
}