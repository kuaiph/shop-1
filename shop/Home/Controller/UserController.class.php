<?php

/**
 * @Author: King
 * @Date:   2018-10-22 22:55:42
 * @Last Modified by:   King
 * @Last Modified time: 2018-11-15 12:05:33
 */
namespace Home\Controller;
use Think\Controller;
//前台用户控制器
class UserController extends Controller {
	//登录界面
    public function login(){
    	//echo "用户注册界面";
    	$this->display();
    }
    //注册界面
    public function register(){
        $user=new \Model\UserModel();
        //两个逻辑,验证提交,展示收集
        if (!empty($_POST)) {
            # code...
            //收集表单信息,并返回触发表单自动验证,过滤非法字段
            $shuju=$user->create();
            if($shuju)
            {
                $shuju['user_hobby']=implode(',', $shuju['user_hobby']);
                //将爱好数据由array变成string
                $shuju['last_time']=time();
                $shuju['user_time']=time();
                //将时间也注入数据库
                //dump($shuju);exit;
                if($user->add($shuju)){
                    $this->redirect('Index/index');
                }
            }else{
                $this->assign('errorInfo',$user->getError());
            }
        }
    	$this->display();
    }
}