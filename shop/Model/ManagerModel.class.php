<?php

/**
 * @Author: King
 * @Date:   2018-11-15 17:58:19
 * @Last Modified by:   King
 * @Last Modified time: 2018-11-16 14:06:55
 */
namespace Model;
use Think\Model;

class ManagerModel extends Model
{
	//批处理
	protected $patchValidate=true;
	//自动验证
	protected $_validate=array(
	//array(字段,验证规则,错误提示[,验证条件,附加规则,验证时间])
	//验证码captcha
	array('captcha','captcha','验证码不正确'),
	);

	public function checkNamePwd($name,$pwd){
		# code...
	  $info = $this -> where("ma_name='$name'")->find();
        //dump($info);//有结果返回结果的记录信息，否则返回null
        //② 如果$nm的记录存在，就让记录的密码和 $pwd做比较
        if($info){
            if($info['ma_pwd']===$pwd)
                return $info;
        }
        return null;

        //分割线,上面是大佬的,下面是小弟我的,思想很重要啊

		// $sql="select * from sw_manager where ma_name=$name and ma_pwd='$pwd'";
		// $info=$this->find($sql);
		// return $info;
	}

	public function updatelogintime($ma_id){
		$this->ma_time=$ma_time=time();
		$this->ma_id=$ma_id;
		$this->save();
	}
}