<?php
header('Content-Type: text/html; charset=utf-8');
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/12
 * Time: 9:13
 */
//1:有[1,2,3,4]4个数字，能组成多少个互不相同且无重复数字的三位数
//$t=0;
//for($i=1;$i<5;$i++)
//{
//    for($j=1;$j<5;$j++)
//    {
//        if($i!=$j)
//        {
//            for($a=1;$a<5;$a++)
//            {
//                if($a!=$i&&$a!=$j)
//                {
//                    echo $i.$j.$a.' ';
//                    $t++;
//                }
//            }
//        }
//    }
//}
//echo '
//能组成'.$t.'个互不相同且无重复数字的三位数';

//2．编写一个单例模式类
//class Singleton{
//    //存放实例
//    private static $_instance=null;
//    //私有的构造方法
//    private function __construct()
//    {
//        echo "单例模式的实例化被构造";
//    }
//    //私有化克隆方法
//    private function __clone()
//    {
//        // TODO: Implement __clone() method.
//    }
//    //公共化获取实例方法
//    public static function getInstance(){
//        if (!(self::$_instance instanceof Singleton)){
//            self::$_instance = new Singleton();
//        }
//        return self::$_instance;
//    }
//}
//$singleton=Singleton::getInstance();

//3、编写php函数，实现遍历指定文件夹下的所有文件和子文件夹
function my_scandir($dir)
{
    $files = array();
    if ( $handle = opendir($dir) ) {
        while ( ($file = readdir($handle)) !== false ) {
            if ( $file != ".." && $file != "." ) {
                if ( is_dir($dir . "/" . $file) ) {
                    $files[$file] = scandir($dir . "/" . $file);
                }else {
                    $files[] = $file;
                }
            }
        }
        closedir($handle);
        return $files;
    }
}

$files=my_scandir('E:\phpStudy\PHPTutorial\WWW');
print_r($files);
?>

