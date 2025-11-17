<!-- Early binding and late binding 

For early binding it is self::function()
for late binding it is static::function()


-->

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