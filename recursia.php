<?php


function degree ($x, $y)
{
    if($y == 1) {
        return $x;
    }
    $result = $x * degree($x, $y-1);
}
echo (degree(2,4));