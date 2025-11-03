<?php

class RGB{
    private $color;
    private $red;
    private $green;
    private $blue;

    function __construct($colorCode = ''){
        $this->color = ltrim($colorCode,'#');
            $this->parseColor();

    }

    function getColor(){
        return $this->color;
    }

    function setColor($colorCode){
        $this->color = ltrim($colorCode,'#');
        $this->parseColor();
    }

    function readRGB()
    {
        echo "Red : {$this->red}\nGreen : {$this->green}\nBlue : {$this->blue} \n";
    }

    private function parseColor(){
       list($this->red, $this->green,$this->blue) = sscanf($this->color,'%02x%02x%02x');
    }

    function getRed()
    {
        return $this->red;
    }

     function getGreen()
    {
        return $this->green;
    }

     function getBlue()
    {
        echo $this->blue;
    }
}

$myColor = new RGB("#ffef27");

$myColor->readRGB();

 $myColor->getBlue();

