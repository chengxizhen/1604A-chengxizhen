<?php
header("Content-type:text/html;charset=utf-8");
//算法（递归遍历文件夹）
//$path = '..';
//function get_filetree($path){
//    $tree = array();
//    foreach(glob($path.'/*') as $single){
//        if(is_dir($single)){
//            $tree = array_merge($tree,get_filetree($single));
//        }else{
//            $tree[] = $single;
//            }
//        }return $tree;
//    }
//    print_r(get_filetree($path));

// 单例模式类
// final修饰类->不能被继承
//final class single{
//    // 定义一个私有属性，在构造方法中显示
//    private $random;
//    // 定义一个静态私有属性，为的是实例化后赋值给obj
//    static private $obj;
//    // 构造方法中random判断实例化的次数，并可进行比较
//    private function __construct(){
//        return $this->random=rand(1,999999999);
//    }
//    static public function getins(){
//        // instanceof判断对象是否实例化
//        if(self::$obj instanceof single)
//        {
//            return self::$obj;
//        }else{
//            return self::$obj = new single();
//        }
//    }
//    // final类防止被克隆后实例化类被重写
//    // public function __clone(){
//    // 	echo "单例模式失败";
//    // }
//    private function __clone(){
//        echo "单例模式失败";
//    }
//}
//// 调用静态方法getins()验证实例化次数
//$sing = single::getins();
//$sings= single::getins();
//var_dump($sing);
//echo "
//";
//var_dump($sings);
//echo "
//";
//// 检测是否只实例化过一次(验证该类只有一个实例);
//if($sing == $sings)
//{
//    echo "单例模式成功";
//}else {
//    echo "单例模式失败";
//}


//数字的组合（如1、2、3三个数字计算能组合出多少个不重复的三位数）
//$array = array();
//for($i=1;$i<=8;$i++){
//
//    for($j=1;$j<=8;$j++){
//        if($j == $i) continue;
//        $br1 = 0;
//        foreach($array as $val){
//            if(preg_match('/'.$i.'/',$val) && preg_match('/'.$j.'/',$val)){
//                $br1 = 1;
//                break;
//            }
//        }
//        if($br1 == 1) continue;
//
//        for($k=1;$k<=8;$k++){
//            if($k == $i || $k == $j) continue;
//            $br2 = 0;
//            foreach($array as $val){
//                if(preg_match('/'.$i.'/',$val) && preg_match('/'.$j.'/',$val)){
//                    $br2 = 1;
//                    break;
//                }
//                if(preg_match('/'.$i.'/',$val) && preg_match('/'.$k.'/',$val)){
//                    $br2 = 1;
//                    break;
//                }
//                if(preg_match('/'.$j.'/',$val) && preg_match('/'.$k.'/',$val)){
//                    $br2 = 1;
//                    break;
//                }
//            }
//            if($br2 == 1) continue;
//            $tmp = $i.$j.$k;
//            $array[] = $tmp;
//        }
//    }
//}
//print_r($array);

?>
