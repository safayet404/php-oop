<?php



class Animal{
    public function eat(){
        echo "I am eating";
    }

     public function run(){
        echo "I am running";
    }

     public function sleeping(){
        echo "I am sleeping";
    }
}


class Fantik extends Animal{

    public function sayHi()
    {
        echo "Hello homies";
    }
}

$h1 = new Animal();

$h1->run();

$w = new Fantik();
$w->sleeping();