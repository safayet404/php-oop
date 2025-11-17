<!--  Magic Method get set -->

<?php

class MotorCycle{
    private $displacement,$capacity,$mileage;

    function __construct($displacement,$capacity,$mileage)
    {
        $this->mileage = $mileage;
        $this->displacement = $displacement;
        $this->capacity = $capacity;
    }


    function getDisplacement()
    {
        return $this->displacement;
    }

    function setDisplacement($displacement)
    {
        $this->displacement = $displacement;
    }


     function getMileage()
    {
        return $this->mileage;
    }

    function setMileage($mileage)
    {
        $this->mileage = $mileage;
    }

     function getCapacity()
    {
        return $this->capacity;
    }

    function setCapacity($capacity)
    {
        $this->capacity = $capacity;
    }

    function __get($prop)
    {
        return $this->$prop;
    }

    function __set($prop,$value){
        $this->$prop = $value;
    }

}

$pulsar = new MotorCycle('150cc','16ltr','40kmph');

echo $pulsar->getDisplacement();

$pulsar->displacement = "\n165cc \n";
echo $pulsar->displacement;
