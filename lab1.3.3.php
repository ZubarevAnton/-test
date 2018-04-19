<?php


$dayID = date('w');

switch ($dayID){
    case 1:
        echo 'It\'s Monday';
        break;
    case 2:
        echo 'It\'s Tuesday';
        break;
    case 3:
        echo 'It\'s Wednesday';
        break;
    case 4:
        echo 'It\'s Thurthday';
        break;
    case 5:
        echo 'It\'s Friday';
        break;
    default:
        echo 'Weekend!';
}
    
