<?php

/**
 * @Author: King
 * @Date:   2018-10-22 22:58:02
 * @Last Modified by:   King
 * @Last Modified time: 2018-11-15 12:23:56
 */
namespace Home\Controller;
use Think\Controller;
class GoodController extends Controller {
     //商品列表类
    public function detail(){
        $good=new \Model\GoodModel();
        $info=$good->select();
        var_dump($info);
     	$this->display();
    }
    public function gwc1(){
    	$this->display();
    }
    public function gwc2(){
    	$this->display();
    }
    public function gwc3(){
    	$this->display();
    }
}