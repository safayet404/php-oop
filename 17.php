<?php

class Student{
    public $name,$age;
    function __construct($name,$age)
    {

        $this->name = $name;

        if($age<4)
        {

            throw new \Exception('Not a valid age');
        }

        $this->age = $age;

    }
}

$s = new Student("Hamza",1);