<?php


$array = range(1, 10);
shuffle($array);

echo 'Implode array:' . PHP_EOL;
print_r($array);
echo 'First element of array:' . current($array) . PHP_EOL;
echo 'Last element of array:' . end($array) . PHP_EOL;
echo 'Count:' . count($array) . PHP_EOL;
echo 'Result:' . implode(',', $array) . PHP_EOL;

echo PHP_EOL . PHP_EOL;

echo 'Explode string:' . PHP_EOL;
$string = 'explode — Разбивает строку с помощью разделителя';
echo 'String:' . $string . PHP_EOL;
$explodeString = explode(' ', $string);
print_r ($explodeString);

echo PHP_EOL . PHP_EOL;

echo 'Array Push:' . PHP_EOL;
$arrayPush = [];
array_push($arrayPush, 'PHP');
array_push($arrayPush, 'HTML');
array_push($arrayPush, 'CSS');
print_r($arrayPush);

echo 'Classic Array:' . PHP_EOL;
$classicArray = ['php' , 'css', 'html'];
print_r($classicArray);

echo 'Result Array:' . PHP_EOL;
print_r(array_merge($arrayPush, $classicArray));















