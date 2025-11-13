<?php

class Shapesss {

}

class Shapes {
    private $shapes;

    public function __construct()
        {
            $this->shapes = array();
        }

    public function addShape(Shapesss $shape){
        array_push($this->shapes,$shape);
    }

    public function totalShapes(){
        return count($this->shapes);
    }

}

class Rectanglesss extends Shapesss{

}

class Trianglesss extends Shapesss{

}

class Student{

}


$addShape = new Shapes();

$addShape->addShape(new Trianglesss());
$addShape->addShape(new Rectanglesss());

echo $addShape->totalShapes();