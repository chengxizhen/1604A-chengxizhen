<?php
//for($k= 0; $k< 10; $k++)
//{
//    $day = 10 - $k;
//    $num = $num * 2 + 1;
//}
//echo "第一天共摘了".$num."个桃子";cd

//类实现封装是为了不让外面的类随意的修改一个类的成员变量，所以在定义一个类的成员的时候，我们使用private关键字设置这个成员的访问权限只能被这个类的其他成员方法调用，而不能被其他类中的方法调用，即通过本类中提供的方法来访问本类中的私有属性。
//class Person{
//    private $name;
//    private $age;
//    public function __construct($name,$age){
//        $this->name = $name;
//        $this->age = $age;
//    }
//    function setAge($age){
//        if($age>=0&&$age<=120){
//            $this->age = $age;
//        }else{
//            error_log("年龄设置有误！");
//        }
//    }
//    function getAge(){
//        return $this->age;
//    }
//    public function say(){
//        echo "我叫{$this->name},我今年{$this->age}岁了";
//    }
//    function __get($name){
//        switch ($name) {
//            case 'name':
//                return $this ->$name."这是读取时加的文字";
//            case 'age':
//                return "0".$this ->$name;
//            default:
//                return $this ->$name;
//        }
//    }
//    function __set($key,$value){
//        if($key=="name"){
//            $this->$key = $value."这是设置时加的文字<br>";
//        }else{
//            $this->$key = $value;
//        }
//    }
//    function __isset($name){
//        return isset($this->$name);
//    }
//    function __unset($name){
//        if($name=="age"){
//            return;
//        }
//        unset($this->$name);
//    }
//}
//$zhangsan = new Person("zhangsan",14);
//$zhangsan->setAge(12);
//echo $zhangsan->getAge()."<br>";
//var_dump(isset($zhangsan->name));
//unset($zhangsan->age);
//echo $zhangsan->age;


function cube( $n )
{
    return $n * $n * $n;
}

function is_narcissistic ( $n )
{
    $hundreds = floor( $n / 100);    //分解出百位
    $tens = floor( $n / 10 ) % 10;    //分解出十位
    $ones = floor( $n % 10 );    //分解出个位
    return (bool)(cube($hundreds)+cube($tens)+cube($ones) == $n);
}
for ( $i = 100; $i < 1000; ++ $i )
{
    if ( is_narcissistic($i) )
        echo $i."\n";
}

?>