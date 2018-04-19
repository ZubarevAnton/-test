<?php


$counter = 5;

while($counter>0){
    if ($counter<3){
        break;
    }

    echo "current iterator is {$counter}" . PHP_EOL;
    $counter--;
}