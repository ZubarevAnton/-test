<?php

$result = [];
for ($i = 10; $i <= 20 ;$i++){
    if ($i % 2 ===0){
        $result[] = $i;//array_push($result, $i)

//        array_shift()
//        array_unshift()
//        array_pop()
    }
}

echo implode(';', $result);

