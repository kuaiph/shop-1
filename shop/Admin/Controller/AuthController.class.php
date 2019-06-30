<?php

/**
 * @Author: King
 * @Date:   2018-11-15 22:10:26
 * @Last Modified by:   King
 * @Last Modified time: 2018-11-18 23:26:02
 */
namespace Admin\Controller;
use Tools\AdminController;

class AuthController extends AdminController {
	//权限列表
	public function showlist(){
		//指定数据表sw_Auth,通过auth_path(全路径)排序
		$info=D('Auth')->order('auth_path')->select();
		$this->assign('info',$info);
		$this->display();
	}
	//权限添加
	public function add(){
		$auth=new \Model\AuthModel();
		//两个逻辑
		if (!empty($_POST)) {
			# code...
			 //dump($_POST);exit();
			$z=$auth->saveData($_POST);
				if($z){
				# code...
					$this->redirect('showlist',array(),2,添加成功);
				}else
					$this->redirect('add',array(),2,添加失败);
		}else{
		//获得顶级权限信息
		$auth_infoA=$auth->where('auth_level=0')->select();
		$this->assign('auth_infoA',$auth_infoA);
		$this->display();
		}
	}
}