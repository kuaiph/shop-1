<?php

/**
 * @Author: King
 * @Date:   2018-11-16 15:52:05
 * @Last Modified by:   King
 * @Last Modified time: 2018-11-16 16:20:57
 */
namespace Model;
use Think\Model;

/**
 * 为数据表aw_good创建的模型类
 */
class AuthModel extends Model
{
	public function saveData($data){
				// array (size=4)
		  // 'auth_name' => string '退出系统' (length=12)
		  // 'auth_pid' => string '112' (length=3)
		  // 'auth_c' => string 'Manager' (length=7)
		  // 'auth_a' => string 'logout' (length=6)
		//新增数据,获得ID
		$newid=$this->add($data);
		//1.顶级权限的全路径
		if ($data['auth_pid']==0) {
			$path=$newid;
		}else{
			//2.子集权限的全路径
			$pinfo=$this->find($data['auth_pid']);
			$path=$pinfo['auth_path']."-".$newid;
		}
		//3.制作深度auth_level
		$level=substr_count($path,'-');

		//更新
		//$this->auth_path=$path;
		//$this->auth_level=$level;
		//$this->auth_id=$newid;
		$sql="update sw_auth set auth_path='$path',auth_level='$level' where auth_id='$newid'";
		//return $this->save();
		return $this->execute($sql);
	}
}