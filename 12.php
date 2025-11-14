<?php

class Student{
    private  $name;
    private $age;
    private $class;

    function __construct($name='',$age='',$class='')
    {
        $this->name = $name;
        $this->age = $age;
        $this->class = $class;
    }

    function getName(){
        return $this->name;
    }

    function setName($name){
        $this->name = $name;
    }  
    function getAge(){
        return $this->age;
    }

    function setAge($age){
        $this->age = $age;
    }

    function getClass(){
        return $this->class;
    }

    function setClass($class){
        $this->class = $class;
    }

}

$s = new Student();

$s->setAge("25");
echo $s->getAge();


$s->setName("\nSafayet Hossain\n");
echo $s->getName();

$s->setClass("Hons Pass korsi bhai \n");
echo $s->getClass();