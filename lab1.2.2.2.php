<?php



/*$foo = 0;
$fst = (bool) $foo;


echo $fst;*/



/*$a = 2;
$b = (float) $a;

echo $b;*/


/*$str = '10 students';
$sdf = (int) $str;

echo $str;*/


/*$c = [1, 2, 3];

$f = (string) $c;


echo $f;*/

/*$c = ["one" => 1, "two" => 2];

$f = (object)$c;


echo $f->two;*/

echo 'Boolean "true" to integer: ';
var_dump((int)true);
echo 'Boolean "false" to integer: ';
var_dump((int)false);
echo PHP_EOL;

echo 'Integer "3" to boolean: ';
var_dump((bool)3);
echo 'Integer "0" to boolean: ';
var_dump((bool)0);
echo 'Integer "-5" to boolean: ';
var_dump((bool)-5);
echo PHP_EOL;

echo 'Float "33.22" to integer: ';
var_dump((int)33.22);
echo 'Integer "33" to float: ';
var_dump((float)33);
echo PHP_EOL;

echo 'String "test qwerty" to integer: ';
var_dump((int)'test qwerty');
echo 'String "10 eggs" to integer: ';
var_dump((int)'10 eggs');
echo 'String "10 eggs and 12 chairs" to integer: ';
var_dump((int)'10 eggs and 12 chairs');
echo PHP_EOL;

echo 'Empty string to integer: ';
var_dump((int)'');
echo 'Empty string to float: ';
var_dump((float)'');
echo PHP_EOL;

echo 'String "test string" to array: ';
var_dump((array)'test string');
echo 'Array "[1, 2, 3]" to string: ';
var_dump((string)[1, 2, 3]);
echo 'Array "[1, 2, 3]" to object: ';
var_dump((object)[1, 2, 3]);
