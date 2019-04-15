<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_controller extends CI_Controller
 {
	function __construct(){
		parent::__construct();
		$in = $this->session->userdata('security');
		if($in){
			return redirect('admin_controller');
		}
	}		
	function index()
	{
		$this->load->view('admin/admin2/login');
	}

	function login_next()
	{
			if ($this->form_validation->run('login_form') == FALSE)
			{
				$this->form_validation->set_error_delimiters('<div class="error" style="color:red">','</div>');
				$this->load->view('admin/admin2/login');
			}
			else
			{
				$login = $this->input->post('Login');
				$password = $this->input->post('Password');

				$this->load->model('login_model');
				$login_outcome = $this->login_model->admin_login($login,$password);

				if ($login_outcome) {
				$this->session->set_userdata('security',$login_outcome);
				 	return redirect ('admin_controller');
				 }
				else {
				 	$this->session->set_flashdata('error_login','Invalid Username/Email or Password Please Try Again.'); 
				 	return redirect ('login_controller');
				 }
			}

	}
}
	