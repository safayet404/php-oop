<?php

class DistrictCollection implements IteratorAggregate{
    private $districts;

    function __construct()
    {
        $this->districts = array();
    }

    function add($district)
    {
        array_push($this->districts,$district);
    }

    function getDistricts()
    {
        return $this->districts;
    }

    function getIterator():Traversable
    {
        return new ArrayIterator($this->districts);
    }

}



$districts = new DistrictCollection();

$districts->add("Dhaka");
$districts->add("Kishoreganj");
$districts->add("Katadia");
$districts->add("rajshahi");
$districts->add("Sylhet");



foreach($districts as $_dis)
{
    echo $_dis."\n";
}