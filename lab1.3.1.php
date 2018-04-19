<?php


//$dayID =  date('w');
//
//if ($dayID <= 5){
//    $hour = (int)date('H');
//    $startWorkHour = 9;
//    $endWorkHour = 18;
//
//    if ($startWorkHour < $hour && $hour < $endWorkHour){
//    $hoursToDayEnd = $endWorkHour - $hour;
//    echo 'you have to work just ' . $hoursToDayEnd . ' hours';
//    }elseif ($hour < $endWorkHour){
//        $hoursToStartDay = $startWorkHour - $hour;
//        echo 'you should go to work at ' . $hoursToStartDay . ' hours';
//    }elseif ($hour > $endWorkHour){
//        $hoursAfterWork = $hour - $endWorkHour;
//        echo 'you should go to home ' . $hoursAfterWork . ' hour(s)';
//    }else{
//        echo 'your clock is fucked up ';
//    }
//}else{
//    echo 'Weekend!!';
//}


<?php
if(date('N') < 6) {
    $nowHour = date('H');
    $workDayBegin = 9;
    $workDayEnd = 18;
    if ($nowHour < $workDayEnd &&
        $nowHour >= $workDayBegin){
        $leftToWork = $workDayEnd - $nowHour;
        echo "You should work {$leftToWork} more";
    } elseif ($nowHour < $workDayBegin && $nowHour >=0) {
        $after = $workDayBegin - $nowHour;
        echo "You have {$after} hours until work started";
    } elseif ($nowHour >= $workDayEnd && $nowHour < 24) {
        $after = $nowHour - $workDayEnd;
        echo "You are not working around {$after} hours";
    } else {
        echo  'Unknown day hours';
    }
} else {
    echo 'Today is weekend. Yohoooo!';
}
