<?php
/**
 * Created by PhpStorm.
 * User: bmmah
 * Date: 1/23/2019
 * Time: 12:01 AM
 */

class Main_model extends CI_Model
{
  function can_login($username,$password){
  	$this->db->where('username',$username);
	  $this->db->where('password',$password);
	  $query = $this->db->get('admin');
	  //SELECT * FROM users WHERE username = '$username' AND password = '$password'
	  if($query->num_rows()>0){
	  	return true;
	  }else{
	  	return false;
	  }
  }
	function staff_can_login($username,$password){
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		$query = $this->db->get('staff');
		//SELECT * FROM users WHERE username = '$username' AND password = '$password'
		if($query->num_rows()>0){
			return true;
		}else{
			return false;
		}
	}
}
