<?php


$myArray = range(1, 100);

//greater then 25 and less than 32

$filteredArray = array_filter($myArray, function($v){
    return $v > 25 && $v < 32;
});

print_r($filteredArray);


array_walk($filteredArray, function(&$v){
    $v *= $v;
});

print_r($filteredArray);