<?php



class Animal{
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
        echo "Mewo \n";
    }
}


class Fantik extends Animal{

    public function sayHi()
    {
        echo "Hello homies \n";
    }

    public function greet(){
        echo "Assalamualaikum bhai \n";
    }
}

$h1 = new Animal();

$h1->run();
$h1->greet();

$w = new Fantik();
$w->sleeping();
$w->greet();