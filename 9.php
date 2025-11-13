<?php 

interface BaseAnimal {
    function isAlive();
    function canEat($param1,$param2);
    function breed();
}


class Animal implements BaseAnimal{
    function isAlive()
    {
       echo "Yes ,this animal is alive";
    }

    function canEat($param1,$param2)
    {
        echo "Can eat bhat and Fish";
    }

    function breed()
    {
        echo "This is Persian cat";
    }
}

interface BaseHuman extends BaseAnimal{
    public function canTalk();
}

class Human implements BaseHuman{

     
    function isAlive()
    {
       echo "Yes ,this animal is alive";
    }

    function canEat($param1,$param2)
    {
        echo "Can eat everything literally";
    }

    function breed()
    {
        echo "Finest Breed";
    }

    function canTalk()
    {
        echo "Hello World!";
    }
}

$h = new Human("");
$h->isAlive();