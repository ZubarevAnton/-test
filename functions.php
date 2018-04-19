<?php

//echo phpversion();

//phpinfo(INFO_LICENSE);


//defining a function
function helloWorld()
{
    echo 'Hello World!';
}


function bayGuys()
{
    echo 'bay Guys!';
}


$number = mt_rand(0, 100);

if ($number < 50) {
    helloWorld();
} else {
    bayGuys();
}

