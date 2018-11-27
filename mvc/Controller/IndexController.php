<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/27
 * Time: 9:22
 */
Class IndexController extends display {
    public function aaa(){
//        echo "111111";
        $model=new tablesModel();
//        var_dump($model);
        $model->findOne();
        $this->fetch('index.php');
    }

    public function bbb(){

    }

}
