<?php
function getIntAdd($a,$b){
    $c = '';
    $bCount = strlen($b);
    $aCount = strlen($a);
    $count = max($bCount,$aCount);
    $aDiff = $count - $aCount;
    $bDiff = $count - $bCount;
    for($i = $count - 1;$i >= 0;$i--){
        $aVal = $count - $i <= $aCount ? intval($a[$i - $aDiff]) : 0;
        $bVal = $count - $i <= $bCount ? intval($b[$i - $bDiff]) : 0;
        $v = $aVal + $bVal;
        if(strlen($c) > 0 && strlen($c) >= $count - $i){
            $c = ($v + intval($c[0])).substr($c,1,strlen($c) - 1);
        }else{
            $c = $v.$c.'';
        }
    }
    return $c;
}
$a = 'num1';
$b = 'num2';
$c = getIntAdd($a,$b);
print_r($c);




