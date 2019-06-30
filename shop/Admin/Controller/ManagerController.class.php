<?php

/**
 * @Author: King
 * @Date:   2018-10-22 23:29:34
 * @Last Modified by:   King
 * @Last Modified time: 2018-11-18 23:26:57
 */
namespace Admin\Controller;
use Tools\AdminController;

class ManagerController extends AdminController {
    //登录
    public function login(){
    	if(!empty($_POST)){
	    	$very=new \Think\Verify();
            $manager=new \Model\ManagerModel();
            //两个逻辑,展示和登录
            if (!empty($_POST)) {
                # code...;
                //1.先验证验证码是否正确
    	    	if ($very->check($_POST['captcha'])) {
    	    		# code...
                    //2.校验姓名和密码
                    //$manager=new \Model\ManagerModel();
                    //在模型里面丰富一个方法
                    //校验成功返回用户信息,失败返回false
                    $info=$manager->checkNamePwd($_POST['ma_name'],$_POST['ma_pwd']);
                    if ($info) {
                        # code...
                        //更新登录时间
                        $manager->updatelogintime($info['ma_id']);
                        //存储信息
                        session('admin_id',$info['ma_id']);
                        session('admin_name',$info['ma_name']);
                        // $_SESSION['admin_id']=$info['ma_id'];
                        //$_SESSION['admin_name']=$info['ma_name'];
    	    		    $this->redirect('Index/index');
                    }else{
                        $this->redirect('Manager/login',array('error'=>'账号或密码错误'));
                    }
    	    	}else{
                      $this->redirect('Manager/login',array('error'=>'验证码错误'));
                    }
        	    }
            }else{
                //给点错误提示
                if(!empty($_GET)){
                    $error=$_GET['error'];
                    $this->assign('error',$error);
                }
                $this->display();
            }
    }
    //退出
    public function logout(){
        session(null);//删除全部session
        //跳转回登录页面
        $this->redirect('Manager/login');
    }
    //验证码
    function verifyImg(){
        $cfg=array(
            'imageH'=>45,//验证码图片高度
            'imageW'=>120,//验证码图片宽度
            'fontSize'=>20,//验证码字体大小
            'length'=>3,//验证码位数
        );
        //实例化验证码Veritfy类
        $very=new \Think\Verify($cfg);
        $very->entry();//输出验证码试试
    }
    //管理员列表
    public function showlist(){
        //指定数据表sw_manager,通过ma_id(全路径)排序
        $info=D('Manager')->order('ma_id')->select();
        $this->assign('info',$info);
        $this->display();
    }
    //管理员删除
    public function delete($ma_id){
       $ma=new \Model\ManagerModel();
       $info=$ma->delete($ma_id);
       if ($info) {
                # code...
                $this->redirect('showlist',array(),1,删除成功);
            }else{
                $this->redirect('showlist',array(),1,删除失败);
            }
    }
}