<?php

class Human{
    public $name;

    function __construct($name){
        echo "A new human is born!\n";
        $this->name = $name;
    }

    function sayHi(){
        echo "Salam\n";
        $this->getName();
    }

    private function getName(){
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

$h1 = new Human("Federic Valverde");
$h2 = new Human("Cristiano Ronaldo");

$c1 = new Cat();
$d1 = new Dog();

$h1->sayHi();
$h2->sayHi();

$c1->sayHi();
$d1->sayHi();
