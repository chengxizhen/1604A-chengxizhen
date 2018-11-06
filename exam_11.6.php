<?php
class Person{
private $name;
private $age;

public function __construct($name,$age){
$this->name = $name;
$this->age = $age;
}
function setAge($age){
if($age>=0&&$age<=120){
$this->age = $age;
}else{
error_log("年龄设置有误！");
}
}

function getAge(){
return $this->age;
}
public function say(){
echo "我叫{$this->name},我今年{$this->age}岁了";
}

function __get($name){
switch ($name) {
case 'name':
return $this ->$name."这是读取时加的文字";
case 'age':
return "0".$this ->$name;
default:
return $this ->$name;
}

}
function __set($key,$value){

if($key=="name"){
$this->$key = $value."这是设置时加的文字<br>";
}else{
$this->$key = $value;
}
}
function __isset($name){
return isset($this->$name);
}

function __unset($name){
if($name=="age"){
return;
}
unset($this->$name);
}
}

$zhangsan = new Person("zhangsan",14);
$zhangsan->setAge(12);
echo $zhangsan->getAge()."<br>";
var_dump(isset($zhangsan->name));
unset($zhangsan->age);
echo $zhangsan->age;
?>