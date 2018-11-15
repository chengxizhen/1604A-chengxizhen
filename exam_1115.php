<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/15
 * Time: 8:29
 */
function replace($str) {
    $len = strlen($str);
    if ($len <= 0 ) {
        return false;
    }
    $blank = 0;
    for ($i = 0; $i < $len; $i++) {
        if ($str[$i] == ' ') {
            $blank++;
        }
    }
    if ($blank == 0) {
        return false;
    }

    $new_length = ($len + $blank * 2) - 1;

    for ($i = $len-1; $i >=0; $i--) {
        if ($str[$i] == ' ') {
            $str[$new_length--] = '';
            $str[$new_length--] = '';
            $str[$new_length--] = '($array, $sum) ';
        } else {
            $str[$new_length--] = $str[$i];
        }
    }

    return $str;
}


var_dump(replace('Find Numbers'));