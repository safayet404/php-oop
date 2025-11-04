<?php



class Animal{

    public $name;

    function __construct($name)
    {
        $this->name = $name;
    }
    public function eat(){
        echo "I am eating \n";
    }

     public function run(){
        echo "I am running \n";
    }

     public function sleeping(){
        echo "I am sleeping \n";
    }

    public function greet(){
        echo " {$this->name} says Mewo \n";
    }
}


class Fantik extends Animal{

    public function sayHi()
    {
        echo "Hello homies \n";
    }

    public function greet(){
        echo " {$this->name} Assalamualaikum bhai \n";
    }
}

$h1 = new Animal("Tom");

$h1->run();
$h1->greet();

$w = new Fantik("Jimmy");
$w->sleeping();
$w->greet();