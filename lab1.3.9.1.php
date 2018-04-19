<?php


//function factorial($n){
//    if ($n==0){
//        return 1;
//    } else {
//        return $n * factorial($n -1);
//    }
//}
//
//for ($n=0; $n <= 10; $n++){
//    echo ($n . "!=" . factorial($n) . "\n");
//}



function fact(int $n): int {
    if ($n==1){
        return 1;
    }

    return $n * fact($n - 1);
}

echo fact($argv[1]), "\n";