<?php

class Planet{
    static function echoName(){
        echo static::getName();
    }

    static function getName(){
        return "planet";
    }
}

class Earth extends Planet{
    static function getName()
    {
        return "Earth";
    }
}


Earth::echoName();