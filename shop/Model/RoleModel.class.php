<?php

/**
 * @Author: King
 * @Date:   2018-11-16 14:59:48
 * @Last Modified by:   King
 * @Last Modified time: 2018-11-16 15:18:04
 */
namespace Model;
use Think\Model;

class RoleModel extends Model{
	public function saveAuth($roleid,$authid){
		//制作需要的role_auth_ids
		$auth_ids=implode(',',$authid);

		//制作控制器和操作方法连接的字符串
		$authinfo=D('Auth')->select($auth_ids);
		$s="";
		foreach ($authinfo as $k => $v) {
			# code...
			if (!empty($v['auth_c'])&&!empty($v['auth_a'])) {
				# code...
				$s.=$v['auth_c']."-".$v['auth_a'].",";
			}
			$s=rtrim($s,',');
			$this->role_id=$roleid;
			$this->role_auth_ids=$auth_ids;
			$this->role_auth_ac=$s;
			return $this->save();
		}
	}
}