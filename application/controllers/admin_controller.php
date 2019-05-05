<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_controller extends CI_Controller {

	function __construct(){
		parent::__construct();

		$out = $this->session->userdata('security');
		if(!$out){
			return redirect('Login_controller');
		}
		$this->load->model('Item');
	}

	function index()
	{	
		$this->load->view('admin/index');
	}

	function adding_location()
	{
		$this->load->view('admin/locations/add_locations');
	}

	function inserting_location()
{
		if ($this->form_validation->run('location_form') == FALSE)
		{		
		$this->form_validation->set_error_delimiters('<div class="error" style="color:red">','</div>');
        $this->load->view('admin/locations/add_locations');
		}
		else
	{
       $locationname = $this->input->post('location_name');
       $date = date('m/d/y');

       $location_data = array(
       	'location_name' => $locationname , 
		'date_created' => $date 
       );

       $insert_result = $this->Item->insert_location($location_data);

       if ($insert_result) 
       {
       $this->session->set_flashdata('add_location','Data Successfully Entered');
       return redirect('Admin_controller/adding_location'); 	
       }
       else
       {
       $this->session->set_flashdata('add_location','Error Occured Please Try Again');
       return redirect('Admin_controller/adding_location');
       }
	}
}

	function listing_location()
	{
		$list_result = $this->Item->list_location();
		if ($list_result) {
			$this->load->view('admin/locations/list_locations',['list_data'=>$list_result]);
		}
		else{
		$this->load->view('admin/locations/list_locations',['list_data'=>$list_result]);
		}
	}

	function editing_location($id)
	{
		$edit_result = $this->Item->edit_location($id);
		$this->load->view('admin/[locations/edit_locations',['edit_result'=>$edit_result]);
	}

	function updating_location()
	{
		$id = $this->input->post('id');
		$edit_result = $this->Item->edit_location($id);
		if ($this->form_validation->run('location_form') == FALSE)
		{		
		$this->form_validation->set_error_delimiters('<div class="error" style="color:red">','</div>');
        $this->load->view('admin/locations/edit_locations',['edit_result'=>$edit_result]);
		}
else
{
	$id = $this->input->post('id');
	$name = $this->input->post('location_name');
	$date = date('m/d/y');

	$update_result = $this->Item->update_location($name,$id,$date);
		if ($update_result) {
			 $this->session->set_flashdata('list_flash','Record Update Successfully');
       return redirect('Admin_controller/listing_location');
		}
		else{
			 $this->session->set_flashdata('list_flash','Error Occured Please Try Again');
       return redirect('Admin_controller/listing_location');
		}
}
	}

	function deleting_location($id)
	{
		$delete_result = $this->Item->delete_location($id);
		if ($delete_result) {
			$this->session->set_flashdata('list_flash','Record Delete Successfully');
       return redirect('Admin_controller/listing_location');
		}
	}

	function adding_category()
	{
		$this->load->view('admin/categories/add_categories');
	}

	function inserting_category()
	{
		if ($this->form_validation->run('category_form') == FALSE)
		{
			$this->form_validation->set_error_delimiters('<div class="error" style="color:red">','</div>');
			$this->load->view('admin/categories/add_categories');
		}

		else
		{
			$category_name = $this->input->post('category_name');
			$date = date('m/d/y');

			$category_data = array('category_name'=>$category_name,'date_created'=>$date );
			$category_result = $this->Item->insert_category($category_data);
			if ($category_result) {
				$this->session->set_flashdata('add_category','Category Successfully Entered');
				return redirect('Admin_controller/adding_category');
			}
			else
			{
				$this->session->set_flashdata('add_category','Error Entering Category. Please Try Again');
				return redirect('Admin_controller/adding_category');
			}
		}
	}

	function listing_category()
	{
		$category_result = $this->Item->list_category();
		$this->load->view('admin/categories/list_categories',['category_data'=>$category_result]);
	}

	function editing_category($id)
	{
		$category_result = $this->Item->edit_category($id);
		$this->load->view('admin/categories/edit_categories',['category_result'=>$category_result]);
	}
	
	function updating_category()
	{
		$id = $this->input->post('id');
		$category_result = $this->Item->edit_category($id);
		

		if ($this->form_validation->run('category_form') == FALSE) {
			$this->form_validation->set_error_delimiters('<div class="error" style="color:red">','</div>');
			$this->load->view('admin/categories/edit_categories',['category_result'=>$category_result]);
		}
		else {
			$id = $this->input->post('id');
			$name = $this->input->post('category_name');
			$date = date('m/d/y');

			$category_result = $this->Item->update_category($id,$name,$date);
			if ($category_result) {
				$this->session->set_flashdata('flash_category','Category Updated Successfully');
				return redirect('Admin_controller/listing_category');
			}
			else{
				$this->session->set_flashdata('flash_category','Error Updating Category. Please Try Again');
				return redirect('Admin_controller/listing_category');
			}

		}
	}

	function deleting_category($id)
	{
		$category_result = $this->Item->delete_category($id);
		if ($category_result) {
			$this->session->set_flashdata('flash_category','Category Deleted Succcessfully');
			return redirect('Admin_controller/listing_category');
		}
	}
	
	function adding_member()
	{
		$this->load->view('admin/members/add_members');
	}

	function inserting_member()
	{
		if ($this->form_validation->run('member_form') == FALSE)
		{
			$this->form_validation->set_error_delimiters('<div class="error" style="color:red">','</div>');
			$this->load->view('admin/members/add_members');
		}
		else
		{
			$category_name = $this->input->post('member_name');
			$date = date('m/d/y');

			$member_data = array('member_name'=>$category_name,'date_created'=>$date );
			$member_result = $this->Item->insert_member($member_data);
			if ($member_result) {
				$this->session->set_flashdata('add_members','Member Successfully Entered');
				return redirect('Admin_controller/adding_member');
			}
			else
			{
				$this->session->set_flashdata('add_members','Error Entering Member Please Try Again');
				return redirect('Admin_controller/adding_member');
			}
		}
	}
	
	function listing_member()
	{
		$category_result = $this->Item->list_member();
		$this->load->view('admin/members/list_members',['member_data'=>$member_result]);
	}
	
	function editing_member($id)
	{
		$member_result = $this->Item->edit_member($id);
		$this->load->view('admin/members/edit_members',['member_result'=>$member_result]);
	}
	
	function updating_member()
	{
		$id = $this->input->post('id');
		$member_result = $this->Item->edit_member($id);
		

		if ($this->form_validation->run('member_form') == FALSE) {
			$this->form_validation->set_error_delimiters('<div class="error" style="color:red">','</div>');
			$this->load->view('admin/members/edit_members',['member_result'=>$member_result]);
		}
		else {
			$id = $this->input->post('id');
			$name = $this->input->post('member_name');
			$date = date('m/d/y');

			$member_result = $this->Item->update_member($id,$name,$date);
			if ($member_result) {
				$this->session->set_flashdata('flash_member','Member Updated Successfully');
				return redirect('Admin_controller/listing_member');
			}
			else{
				$this->session->set_flashdata('flash_member','Error Updating Member. Please Try Again');
				return redirect('Admin_controller/listing_member');
			}

		}
	}

	function deleting_member($id)
	{
		$member_result = $this->Item->delete_member($id);
		if ($member_result) {
			$this->session->set_flashdata('flash_member','Member Deleted Successfully');
			return redirect('Admin_controller/listing_member');
		}
	}
	
	
	function adding_facility()
	{
		$this->load->view('admin/facilities/add_facilities');
	}
	function inserting_facility()
	{
		if ($this->form_validation->run('facility_form') == TRUE)
		{
			$this->form_validation->set_error_delimiters('<div class="error" style="color:red">','</div>');
			$this->load->view('admin/facilities/add_facilities');
		}
		else
		{
			$facility_name = $this->input->post('facility_name');
			$date = date('m/d/y');
			$facility_data = array('facility_name'=>$facility_name,'date_created'=>$date );
			$facility_result = $this->Item->insert_facility($facility_data);
			if ($facility_result) {
				$this->session->set_flashdata('add_facility','Facility Successfully Entered');
				return redirect('Admin_controller/adding_facility');
			}
			else
			{
				$this->session->set_flashdata('add_facility','Error Entering Facility. Please Try Again');
				return redirect('Admin_controller/adding_facility');
			}
		}
	}
	function listing_facility()
	{
		$facility_result = $this->Item->list_facility();
		$this->load->view('admin/facilities/list_facilities',['facility_data'=>$facility_result]);
	}
	function editing_facility($id)
	{
		$facility_result = $this->Item->edit_facility($id);
		$this->load->view('admin/facilities/edit_facilities',['facility_result'=>$facility_result]);
	}
	
	function updating_facility()
	{
		$id = $this->input->post('id');
		$facility_result = $this->Item->edit_facility($id);
		
		if ($this->form_validation->run('facility_form') == TRUE) {
			$this->form_validation->set_error_delimiters('<div class="error" style="color:red">','</div>');
			$this->load->view('admin/facilities/edit_categories',['facility_result'=>$facility_result]);
		}
		else {
			$id = $this->input->post('id');
			$name = $this->input->post('facility_name');
			$date = date('m/d/y');
			$facility_result = $this->Item->update_facility($id,$name,$date);
			if ($facility_result) {
				$this->session->set_flashdata('flash_facility','Facility Updated Successfully');
				return redirect('Admin_controller/listing_facility');
			}
			else{
				$this->session->set_flashdata('flash_category','Error Updating Category. Please Try Again');
				return redirect('Admin_controller/listing_facility');
			}
		}
	}
	function deleting_facility($id)
	{
		$facility_result = $this->Item->delete_facility($id);
		if ($facility_result) {
			$this->session->set_flashdata('flash_facility','Facility Deleted Succcessfully');
			return redirect('Admin_controller/listing_facility');
		}
	}

	
	function logout()
	{
		$this->session->unset_userdata('security');
		return redirect('login_controller');
	}
}
