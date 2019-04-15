<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user_login_model extends CI_Model {

	function user_login($login,$password)
	{	
		$this->load->database();
		$loginn = $this->db->select()
				->where(['username'=>$login, 'password'=>$password])
				->get('user');
				return $loginn->row();	
					
	}
}
	