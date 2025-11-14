<?php

define('OK',123);

const CITY = "Dhaka\n";

echo CITY;


class MyClass                    {
    const CITY = "Dhaka from class\n";

    function sayHi(){
        echo "\nHi from ".self::CITY;
    }
}

echo MyClass::CITY;
$m = new MyClass();
$m->sayHi();