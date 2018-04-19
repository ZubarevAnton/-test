<?php


$keys = [
    'f899139df5e1059396431415e770c6dd',
    '38b3eff8baf56627478ec76a704e9b52',
    'ec8956637a99787bd197eacd77acce5e',
    '6974ce5ac660610b44d9b9fed0ff9548',
    'c9e1074f5b3f9fc8ea15d152add07294',
    '65b9eea6e1cc6bb9f0cd2a47751a186f'
];

do{
    $number = mt_rand(100, 110);
    $hash = md5($number);
} while (in_array($hash, $keys)); // (in_array(md5($number), $key))

echo "the $number is not in array";

