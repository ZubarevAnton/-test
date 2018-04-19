<?php


/*if (1 > 10){
    echo 'first condition is correct';
}else{
        echo 'second condition is correct';

}*/


/*$hour = date('H');
if ($hour < 20) {
    echo 'good day';
}else{
    echo 'good night';
}*/


/*$hour = date('Y-m-d H:i:s');
echo $hour;*/


$age = 18; //mt_rand(1,40);
$ageString = ($age < 16)? 'child':'adult';
echo $ageString;