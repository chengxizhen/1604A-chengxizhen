<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/27
 * Time: 9:15
 */
define('APP_PATH',dirname(__FILE__));
//require_once APP_PATH.'/controller/'.$Pm[0].'.php';
require_once APP_PATH.'.\autoLoad.php';
$Pm =explode('/',$_GET['c']);
$aa=(string)"new ".$Pm[0]."Controller()";
$C=eval("return $aa;");
$C->$Pm[1]();



