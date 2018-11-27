<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/27
 * Time: 15:38
 */
class display {
    public function fetch($file){
        include_once APP_PATH."/view/".$file;
    }
}