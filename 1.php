<?php

class Human{
    public $name;
    function sayHi(){
        echo "Salam\n";
    }

    function getName(){
        echo "My name is {$this->name}\n";
    }
}

class Cat{
    function sayHi(){
        echo "Meow\n";
    }
}

class Dog{
    function sayHi(){
        echo "Wooof\n";
    }
}

$h1 = new Human();
$h1->name = "Rubel";
$c1 = new Cat();
$d1 = new Dog();

$h1->sayHi();
$h1->getName();
$c1->sayHi();
$d1->sayHi();
