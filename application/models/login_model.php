<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	function admin_login($login,$password)
	{	
		$this->load->database();
		$loginn = $this->db->select()
				->where(['username'=>$login, 'password'=>$password])
				->or_where(['email'=>$login, 'password'=>$password])
				->get('admin');
				return $loginn->row();	
					
	}
}
	