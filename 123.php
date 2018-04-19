<?php



//function sumFunction ($one, $two)
//{
//    $sum = $one +$two;
//    var_dump ($sum);
//}
//
//sumFunction(4,5);


//function some($arg1 = 1963, $arg2 = 'two', $arg3 = false)
//{
//    var_dump($arg1, $arg2, $arg3);
//}
//
//some();


//function addFive(&$number)//$ссылка
//{
//    $number += 5;
//
//}
//
//$test = 3;
//var_dump($test);
//
//addFive($test);
//
//var_dump($test);


//function sum($a1, $a2, $a3 = 5, $a4 = 8)
//{
//
//    $args = func_get_args();
//    return array_sum($args);
//}
//
//echo 'sum of numbers is: ' . sum(1,2,3,4, 6);



//function sum($arg1, ...$toSum)//summa
//{
//
//    var_dump($args);
//    print_r(func_get_args());
//    print_r($toSum);
//    return array_sum($toSum);
//}
//
//echo 'sum of numbers is: ' . sum(1,2,3,4, 6);



function multiply(...$toMult)
{
    $result = 1;
    foreach ($toMult as $number){
        $result *= $number;
    }
    return $result;
}
echo  'multiply of number is:' . multiply(3,4,5,6,7,8), PHP_EOL;

