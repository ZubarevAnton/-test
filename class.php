<?php


class FirstClass{
    var $a;

    function increace()
    {
        $this->a++;
    }
}

$firstObject = new FirstClass();
$firstObject->increace();
//var_dump($firstObject);

$secondObject = new FirstClass();
var_dump($secondObject);