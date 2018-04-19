<?php



/*echo (int)("1" == "01"), "\n";
echo (int)("1" === "01");

$left = "ABC";
$right = "ABD";

var_dump ((int) ($left > $right));

$left = 'apple';
$right = 'Apple';

echo (int) ($left > $right);

$or = $left || $right;
var_dump ($or);*/

//Bitwise Operators

$result = 15 & 20;
$result = 15 | 20;
$result = 15 ^ 20;

$result = 405 >> 2;
$result = 4005 << 2;



//suppression and backtick operators

echo @undeclaredFunction();


$a = `dir -l`;
echo $a;
