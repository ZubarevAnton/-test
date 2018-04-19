<?php


$counter = 5;

while($counter>0){
    if(in_array($counter, [2,3])){
        $counter--;
        continue;
    }
    echo "current iterator is {$counter}" . PHP_EOL;
    $counter--;
}