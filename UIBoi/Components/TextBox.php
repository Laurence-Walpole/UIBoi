<?php namespace UIBoi\Components;

use UIBoi\Component;

class TextBox extends Component
{
    private $PLACEHOLDER;

    /**
     * @return string
     */
    public function getPlaceholder()
    {
        return $this->PLACEHOLDER;
    }

    /**
     * @param string $PLACEHOLDER
     */
    public function setPlaceholder($PLACEHOLDER): void
    {
        $this->PLACEHOLDER = $PLACEHOLDER;
    }

    public function __construct($ID, $CLASS, $NAME, $PLACEHOLDER)
    {
        $DEFAULT_CONSTRUCTOR = "<input type='text' id='{$ID}' class='{$CLASS}' name='{$NAME}' placeholder='{$PLACEHOLDER}'>";
        parent::__construct($ID, $CLASS, $NAME, $DEFAULT_CONSTRUCTOR);
    }
}