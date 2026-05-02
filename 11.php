<?php

define('OK',123);

const CITY = "Dhaka\n";

echo CITY;


class MyClass                    {
    const CITY = "Dacca from class\n";

    function sayHi(){
        echo "\nHi from ".$this::CITY;
    }
}

echo MyClass::CITY;
$m = new MyClass();
$m->sayHi();