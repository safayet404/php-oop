<?php

abstract class OurClass{
    final function doSomething(){
        echo "Doing Something";
    }

    abstract function greet();
}
class MyClass extends OurClass{

    public function greet(){
        echo "hello from abstract class";
    }

}

$mc = new MyClass();
$mc->doSomething();
$mc->greet();