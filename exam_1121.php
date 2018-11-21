<?php
function binsearch($arr,$num){
    $count = count($arr);
    $lower = 0;
    $high = $count - 1;
    global $i;
    while($lower <= $high){
        $i ++; //计数器
        if($arr[$lower] == $num){
            return $lower;
        }
        if($arr[$high] == $num){
            return $high;
        }
        $middle = intval(($lower + $high) / 2);
        if($num < $arr[$middle]){
            $high = $middle - 1;
        }else if($num > $arr[$middle]){
            $lower = $middle + 1;
        }else{
            return $middle;
        }
    }
    //返回-1表示查找失败
    return -1;
}
$arr = array(0,1,16,24,35,47,59,62,73,88,99);
$pos = binsearch($arr,62);
print($pos);
echo "<br>";
echo $i;


function getValue4($num,$arr,$start = 0,$end = 100){
    //采用二分法查找
    $middle = floor(($end + $start) / 2);

    //判断
    if($arr[$middle] == $num){
        //已经找到了，递归的出口
        return $middle + 1;
    }elseif($arr[$middle] < $num){
        //要查找的元素在数组的后半段
        $start = $middle + 1;
        //边界值
        if($start >= $end){
            //没有找到，但是已经超出边界值，递归出口
            return false;
        }
        //调用自己去查找：递归点
        return getValue4($num,$arr,$start,$end);    //getValue4($num,$arr,51,100)
    }else{
        //要查找的元素在数组的前半段
        $end = $middle - 1;
        //判断边界值
        if($end < 0)return false;

        //调用自己：递归点
        return getValue4($num,$arr,$start,$end);    //getValue4($num,$arr,0,49)
    }

    //都没有找到
    return false;
}
