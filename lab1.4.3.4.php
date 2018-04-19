<?php



print_r($argv);

$params = array_slice($argv, 1);
//unset($params[0]);
//array_shift($params);
//print_r($params);

$params = array_chunk($params, 2);
//print_r($params);

$keys = [];
foreach($params as $param) {
    $key = $param[0];
    $value = $param[1] ?? '';


    $isFullKey = substr($key, 0, 2) == '--';
    $isShortKey = $key{0} == '-' && strlen($key) == 2;

    if($key != '--' && ($isFullKey || $isShortKey)) {
        $keys[$key] = $value;
    }
}

print_r($keys);