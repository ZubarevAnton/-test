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

$c = ["one" => 1, "two" => 2];

$f = (object)$c;


echo $f->two;