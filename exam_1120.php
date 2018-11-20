<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/20
 * Time: 8:33
 */

//function count1($n) {
//    $r = 0;
//    while($n !=0)
//    {
//
//        if(($n%2) !=0 )
//        {
//            $r++;
//        }
//        $n=$n/2;
//    }
//
//    return $r;
//}
//
//echo count1(8);

function count1($n) {
    $r = 0;
    while ($n != 0) {
        $r++;
        $n &= ($n - 1);
    }

    return $r;
}

echo count1(11);
