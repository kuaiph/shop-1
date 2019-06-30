<?php

/**
 * @Author: King
 * @Date:   2018-11-18 23:22:36
 * @Last Modified by:   King
 * @Last Modified time: 2018-11-18 23:55:31
 */
namespace Tools;
use Think\Controller;
class AdminController extends Controller{
	function __construct(){
		//避免覆盖父类构造方法,给予其先执行
		parent::__construct();
		//echo "过滤每个方法";

		//获得当前用户访问权限信息"控制器/操作方法"
		$nowac=CONTROLLER_NAME."-".ACTION_NAME;

		//获得用户登陆的信息
		$admin_id=session('admin_id');
		$admin_name=session('admin_name');
		$manager_info=D('Manager')->find($admin_id);
		$roleid=$manager_info['mg_role_id'];

		//根据$roleid获得角色信息
		$roleinfo=D('Role')->find($roleid);
		//获得权限对应信息"控制器-方法"
		$auth_ac=$roleinfo['role_auth_ac'];

		//默认允许权限
		$allow_ac="Manager-login,Manager-logout,Manager-verifyImg,Index-index,Index-left,Index-head,Index-right";

		//判断
		if (strpos($auth_ac,$nowac)===false&&strpos($allow_ac,$nowac)===false&&$admin_name!=='admin') {
			# code...
			exit("您没有权限访问");
		}

		//未登录系统用户判断,如果未登录,则跳转到登录页
		//如果访问的是"登录页,验证码,退出页"则允许访问
		$login_ac="Manager-login,Manager-verifyImg,Manager-logout";
		if (empty($admin_name)&&strpos($login_ac,$nowac)===false) {
			# code...
			$moduleurl=__MODULE__;
			$js=<<<eof
			<script type="text/javascript">
			window.top.location.href="{$moduleurl}/Manager/login";
			</script>
eof;
			echo $js;
			exit();
		}
	}
}