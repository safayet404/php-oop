<?php

class Human{
    public $name;
    public $age;

    function __construct($name, $age = 0){
        echo "A new human is born!\n";
        $this->name = $name;
        $this->age = $age;
    }

    function sayHi(){
        echo "Salamatzisba\n";
        $this->getName();
    }

    private function getName(){
        if($this->age)
        {

            echo "My name is {$this->name} and i am {$this->age} years old\n";
        }else{
            echo "My name is {$this->name} and I am a puppy\n";
        }
    }
}

class Cat{
    function sayHi(){
        echo "Meooooow\n";
    }
}

class Dog{
    function sayHi(){
        echo "Woof Gheu Gheu\n";
    }
}

$h1 = new Human("Federic Valverde - Uruguay", 25);
$h2 = new Human("Cristiano Ronaldo - Portugal", 36);
$h3 = new Human("Arda Guler - Turkey", 20);

$c1 = new Cat();
$d1 = new Dog();

$h1->sayHi();
$h2->sayHi();
$h3->sayHi();

$c1->sayHi();
$d1->sayHi();
