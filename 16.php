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

    function __get($name)
    {
        echo $this->$name;
    }

}

$pulsar = new MotorCycle('150cc','16ltr','40kmph');

echo $pulsar->getDisplacement();
echo $pulsar->displacement;
