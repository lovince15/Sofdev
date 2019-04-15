<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class home_controller extends CI_Controller
 {
function index ()
{

	$this->load->helper('url');
	$this->load->view('homepage');

}
}