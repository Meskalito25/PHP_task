<?php
//    function info($word) {
//        echo $word . '<br>';
//    }
//
//    function summary($x, $y) {
//        $res = $x + $y;
//        info($res);
//
//        return $res;
//    }
//
//    $res1 = summary(5,8);
//    $res2 = summary(50,8);
//    if($res1 > $res2) info($res1);
//    else info($res2);
//
//

//Практичне застосування
//function summary($arr) {
//    $sum = 0;
//    foreach ($arr as $value)
//        $sum += $value;
//
//    return $sum;
//}
//
//    $list1 = [4, 6, 3, 9, 9];
//    $list2 = [4, 6, 3, 9, 9, 10];
//
//    $res = summary($list1);
//    echo $res. '<br>';
//    echo summary($list2);

// Область видимості

//    function info()  {
//        global $x;
//        $x = 0;
//    }
//
//    $x = 10;
//    info();
//    echo $x;


function click()    {
    static $count = 0;
    $count++;
    echo $count. '<br>';
}

click();
click();
click();
