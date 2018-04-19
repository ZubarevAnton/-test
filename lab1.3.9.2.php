<?php

function recursiveCounter($number = 1)
{
    echo $number, PHP_EOL;
    return $number < 100 ? recursiveCounter($number + 1) : 100;
}

recursiveCounter(83);