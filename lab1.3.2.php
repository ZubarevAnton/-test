<?php


$ballsAmount=mt_rand(0, 100);
$n = $ballsAmount % 10;

echo "we have $ballsAmount ball",
($n !=1 || $ballsAmount == 11) ? 's' : '';