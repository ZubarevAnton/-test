<?php


$glob = '-----------------------------';
$content = $argv[1];


function drawDelimetr()
{
    global $glob;
    echo $glob . "\n";
};



$drawContentString = function() use ($content){
    echo $content . "\n";
};




//drawDelimetr();
//$drawContentString();
//drawDelimetr();


print_r($argv);
print_r($_GET);