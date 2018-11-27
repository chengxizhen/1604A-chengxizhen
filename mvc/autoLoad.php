<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/27
 * Time: 9:34
*/
function __autoLoad($className){
    echo $className;
    if($className=='display'){
        require_once APP_PATH . '/fromwork/'.$className.'.php';
    }
    switch (substr($className,-5)){
        case 'oller';
            require_once APP_PATH . '/controller/'.$className.'.php';
            break;
        case 'Model';
            require_once APP_PATH . '/Model/'.$className.'.php';
            break;
    }
}