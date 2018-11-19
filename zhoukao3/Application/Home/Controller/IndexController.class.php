<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->display(index/add);
    }

    public  function add(){
        $news=M('news');
        $data=I("post.");
        $res=news($data)->add();
        if($res){
            echo "<script>alert('添加成功');location.href='show.html';</script>";
        }else{
            echo "<script>alert('添加失败');location.href='index.html';</script>";
        }
    }

    public function show(){
        $User = M('news'); // 实例化User对象
        $count      = $User->where("$data")->count();
        $Page       = new \Think\Page($count,5);
        $show       = $Page->show();
        $list = $User->where('$data')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('list',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display(); // 输出模板
    }
}