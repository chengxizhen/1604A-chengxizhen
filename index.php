<?php
/**
 * Created by PhpStorm.
 * User: ChengXizhen
 * Date: 2018/11/5
 * Time: 9:09
 */
//计算方式
//$sum=0;
//for($i=1;$i<=100;$i++)
//{
//    $sum+=$i;
//}
//echo  $sum;

//递归实现
//function get_sum($n){
//    return $n==1?1:$n+get_sum($n-1);
//}
//echo get_sum(100);

//实现N! = N*（N-1）*（N-2）*...*1
//function factorial($n){
//    if($n<=1){
//        return 1;
//    }
//    if($n>1){
//        return $n*factorial($n-1);
//    }
//}
////求1！+2！+3！+4！+……+n
//function sum_factorial($n){
//    $sum=0;
//    for($i=1;$i<=$n;$i++){
//        $sum+=factorial($i);
//    }
//    return $sum;
//}
////输出N阶的结果
//echo factorial(5);
//
//echo sum_factorial(5);

public class Person{
    //姓名
    private String name;
    //年龄
    private int age;
    public String getName(){
        return name;
}
public void setName(String name){
        this.name=name;
}
public int getAge(){
        return age;
}
public void serAge(int age){
        this.age=age;
}
public void SarHello(){
        System.out.println("我是：+name+",我的年龄是："+age+");
}
}
public class Chinese extends Person{
    public static void main(String[] args){
        //声明类，调用父类属性
        Chinese chinese=new Chinese();
        chinese.setName('中国人');
        chinese.setAge(20);
        chinese.SayHello();


}
}

