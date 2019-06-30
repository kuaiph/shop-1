<?php

namespace Model;
use Think\Model;

/**
 * 为数据表aw_good创建的模型类
 */
class UserModel extends Model
{
//批处理
protected $patchValidate=true;
//自动验证
protected $_validate=array(
	//array(字段,验证规则,错误提示[,验证条件,附加规则,验证时间])
	//用户名验证,不能为空
	array('username','require','用户名不能为空'),
	array('username','','用户名已经存在',0,'unique'),
	//密码验证,不能为空
	array('password','require','密码不能为空'),
	//确认密码验证
	array('password2','require','确认密码不能为空'),
	array('password2','password','两次密码必须一致',0,'confirm'),
	//邮箱验证
	array('user_email','email','邮箱格式不正确'),
	//QQ号码验证,纯数字,5-12位
	array('user_qq',"number",'QQ号码必须为纯数字',2),
	array('user_qq','5,12','QQ号码长度为5-12之间',2,'length'),
	//学历验证,必须选择一项
	array('user_xueli','2,5','学历必须选择一项',0,'between'),
	//爱好,必须选择两项以上
	array('user_hobby','check_hobby','爱好必须选择两项或以上',1,'callback')
	);


//验证爱好
//参数$arg代表被验证项目的value值
function check_hobby($arg){
	if (count($arg)<2) {
		# code...
		return false;
	}
	return true;
}
}