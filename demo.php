<?php
/usr/bin/bash: wq: command not found

// $age=array("Bill"=>"60","Steve"=>"56","Mark"=>"31");
// print_r(array_change_key_case($age,CASE_UPPER));



// array_chunk 把数组分割为带有两个元素的数组：
// $cars=array("Volvo","BMW","Toyota","Honda","Mercedes","Opel");
// print_r(array_chunk($cars,4));


// array_column();返回输入数组中某个单一列的值。

//array_combine() 通过合并两个数组来创建一个新数组，其中的一个数组元素为键名，另一个数组元素为键值;

// $fname=array("Bill","Steve","Mark");
// $age=array("60","56","31");

// print_r($c=array_combine($fname,$age));

// array_count_values();对数组中的所有值进行计数

// $a = array("A","Cat","A","Dog");
// print_r(array_count_values($a));


//array_diff(); 函数返回两个数组的差集数组。该数组包括了所有在被比较的数组中，但是不在任何其他参数数组中的键值

// $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
// $a2=array("e"=>"red","f"=>"green","g"=>"blue");

// print_r($result=array_diff($a1,$a2));

//array_diff_key();比较数组，返回差集（只比较键名）
//array_diff_assoc();比较数组，返回差集（比较键名和键值）。
//array_diff_uassoc();比较数组，返回差集（比较键名和键值，使用用户自定义的键名比较函数）。
//array_diff_ukey();比较数组，返回差集（只比较键名，使用用户自定义的键名比较函数）。



// $a = 'hello';
// $hello = 'hello everyone';
// echo $$a.'<br />';

// $b = 'John';
// $c = 'Mary';
// $e = 'Joe';

// $students = array('b','c','e');

// echo ${$students[1]};
/*
foreach($students as $seat){
    echo $$seat.'<br />';
}
 $$var[1]
 ${$var[1]} for #1
*/

// echo '<p>shift & unshift </p>';
// $numbers = array(1,2,3,4,5,6);
// print_r($numbers);
// echo '<br />';
// // shifts first elemnt out of an array
// // the index will reset
// $a = array_shift($numbers);

// echo 'a: '.$a.'<br />';
// print_r($numbers);

// // push element to the front of array
// // returns the count of array and reset array index
// $b = array_unshift($numbers, 'first');
// echo '<br />b: '.$b.'<br />';
// print_r($numbers);

// echo '<hr />';
// echo '<p>pop & push </p>';
// // pop the last element out of array
// $c = array_pop($numbers);
// print_r($numbers);
// echo '<br />';

// // push the element to the last of array
// $d = array_push($numbers, 'last');
// echo 'd: '.$d.'<br />';

// print_r($numbers);


echo 'SERVER details:<br />'; 
echo 'SERVER_NAME: '.$_SERVER['SERVER_NAME'].'<br />'; 

echo 'SERVER_ADD: '.$_SERVER['SERVER_ADDR'].'<br />'; 
echo 'SERVER_PORT: '.$_SERVER['SERVER_PORT'].'<br />'; 
echo 'DOCUMENT_ROOT: '.$_SERVER['DOCUMENT_ROOT'].'<br />'; 
echo '<br />'; 

echo 'Page details:<br />'; 
echo 'REMOTE_ADDR: '.$_SERVER['REMOTE_ADDR'].'<br />'; 
echo 'REMORT_PORT: '.$_SERVER['REMOTE_PORT'].'<br />'; 
echo 'REQUEST_URI: '.$_SERVER['REQUEST_URI'].'<br />'; 
echo 'QUERY_STRING: '.$_SERVER['QUERY_STRING'].'<br />'; 
echo 'REQUEST_METHOD: '.$_SERVER['REQUEST_METHOD'].'<br />'; 
echo 'REQUEST_TIME: '.$_SERVER['REQUEST_TIME'].'<br />'; 
echo 'HTTP_USER_AGENT: '.$_SERVER['HTTP_USER_AGENT'].'<br />'; 
echo '<br />'; 
?>
