<?php

/**
 * @Author: King
 * @Date:   2018-11-15 22:10:26
 * @Last Modified by:   King
 * @Last Modified time: 2018-11-18 23:26:55
 */
namespace Admin\Controller;
use Tools\AdminController;

class RoleController extends AdminController {
	//角色列表
	function showlist(){
		$info=D('Role')->select();
		$this->assign('info',$info);
		$this->display();
	}
	//权限分配列表
	public function distribute($role_id){
		//两个逻辑,展示和收集表单
		$role=new \Model\RoleModel();
		if(!empty($_POST)){
			//存储信息
			$z=$role->saveAuth($_POST['role_id'],$_POST['auth_id']);
			if ($z) {
				# code...
				$this->redirect('showlist',array(),2,'分配权限成功');
			}else{
				$this->redirect('distribute',array('role_id'=>$role_id),2,'分配权限失败');
			}
		}else{
			//获得权限分配信息
			$role_info=D('Role')->find($role_id);
			//查找已有权限
			$have_authids=$role_info['role_auth_ids'];
			$have_authids=explode(',',$have_authids);
	     	//父类
	        $auth_infoA=D('Auth')->where("auth_level=0")->select();
	        //子类
	        $auth_infoB=D('Auth')->where("auth_level=1")->select();
	        $this->assign('auth_infoA',$auth_infoA);
	        $this->assign('auth_infoB',$auth_infoB);
	        $this->assign('have_authids',$have_authids);
	        $this->assign('role_info',$role_info);
	        $this->display();
    	}
	}
}