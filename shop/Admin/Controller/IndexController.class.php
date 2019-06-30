<?php
namespace Admin\Controller;
use Tools\AdminController;

class IndexController extends AdminController {
    public function head(){
    	$this->display();
    }
    public function left(){
        //1.根据用户ID获得角色ID获得权限
        $admin_id=session('admin_id');
        $manager_info=D('Manager')->find($admin_id);
        $role_id=$manager_info['ma_role_id'];
        $admin_name=$manager_info['ma_name'];
        //2.根据角色ID获得本身记录信息
        $role_info=D('Role')->find($role_id);
        $auth_ids=$role_info['role_auth_ids'];
        //3.根据角色权限记录获得各权限信息
        //如果是超级管理员登录,则显示全部权限
        if($admin_name==='admin'){
         //父类
        $auth_infoA=D('Auth')->where("auth_level=0")->select();
        //子类
        $auth_infoB=D('Auth')->where("auth_level=1")->select();
        }else{
        //父类
        $auth_infoA=D('Auth')->where("auth_level=0 and auth_id in($auth_ids)")->select();
        //子类
        $auth_infoB=D('Auth')->where("auth_level=1 and auth_id in($auth_ids)")->select();
        }
        //载入
        $this->assign('auth_infoA',$auth_infoA);
        $this->assign('auth_infoB',$auth_infoB);
    	$this->display();
    }
    public function right(){
    	$this->display();
    }
    public function index(){
    	$this->display();
    }
}