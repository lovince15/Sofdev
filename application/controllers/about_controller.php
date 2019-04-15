<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class about_controller extends CI_Controller
 {
function index ()
{

	$this->load->helper('url');
	$this->load->view('about');

}
}