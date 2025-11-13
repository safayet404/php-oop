<?php 


class MathCalculator{
    private $number;

    static function fibonacci($n){
        self::doSomething();
        echo "Fibonacci series up to {$n}\n ";
    }

    static function doSomething(){
        echo "Doing Something\n";
    }

    function factorial($n){
        $this->doSomething();
        echo "calculating factorial of {$n}\n";
    }
}

$math = new MathCalculator();
$math->factorial(10);

MathCalculator::fibonacci(7);