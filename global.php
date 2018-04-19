<?php

function foo(){
    global $bar;
    echo $bar, PHP_EOL;
    $bar = 'qwerty';
}

$bar = 'test';

var_dump($bar);

foo();
var_dump($bar);