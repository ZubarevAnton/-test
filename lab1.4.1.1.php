<?php


function multiplication($a, $b) {
    return $a * $b;
}

function division($a, $b) {
    return $a / $b;
}

function addition($a, $b) {
    return $a + $b;
}

function substraction($a, $b) {
    return $a - $b;
}

function numPrint($a, $b) {
    return [$a, $b];
}

$operations = [
    '+' => 'addition',
    '-' => 'substraction',
    '*' => 'multiplication',
    '/' => 'division',
];

//print_r($argv);
$functionName = $operations[$argv[2]] ?? 'numPrint';
var_dump($functionName($argv[1], $argv[3]));