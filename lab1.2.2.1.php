
<pre>
<?php

$boolean = true;
echo '$boolean is:';
var_dump($boolean);


$integer =12;
echo '$integer is:';
var_dump($integer);

$float = 42.11;
echo '$float is:';
var_dump($float);

$string = 'test string';
echo '$string is:';
var_dump($string);

$array = [1, 2, 3];
echo '$array is:';
var_dump($array);

$object = new stdClass();
echo '$object is:';
var_dump($object);

$resource = curl_init();
echo '$resource is:';
var_dump($resource);
curl_close($resource);

$null = null;
echo '$null is:';
var_dump($null);