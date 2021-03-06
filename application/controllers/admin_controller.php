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
		if ($this->form_validation->run('member_form') == TRUE)
		{
			$this->form_validation->set_error_delimiters('<div class="error" style="color:red">','</div>');
			$this->load->view('admin/members/add_members');
		}
		else
		{
			$member_name = $this->input->post('member_name');
			$date = date('m/d/y');
			$member_gender= $this->input->post('member_gender');
			$member_email= $this->input->post('member_email');
			$member_contact= $this->input->post('member_contact');

			$member_data = array('member_name'=>$member_name,'date_created'=>$date,'member_gender'=>$member_gender,'member_email'=>$member_email,'member_contact'=>$member_contact );
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
		$member_result = $this->Item->list_members();
		$this->load->view('admin/members/list_members',['member_data'=>$member_result]);
	}
	
	function editing_member($id)
	{
		$member_result = $this->Item->edit_members($id);
		$this->load->view('admin/members/edit_members',['member_result'=>$member_result]);
	}
	
	function updating_member()
	{
		$id = $this->input->post('id');
		$member_result = $this->Item->edit_members($id);
		

		if ($this->form_validation->run('member_form') == TRUE) {
			$this->form_validation->set_error_delimiters('<div class="error" style="color:red">','</div>');
			$this->load->view('admin/members/edit_members',['member_result'=>$member_result]);
		}
		else {
			$id = $this->input->post('id');
			$name = $this->input->post('member_name');
			$gender = $this->input->post('member_gender');
			$email = $this->input->post('member_email');
			$contact = $this->input->post('member_contact');
			$date = date('m/d/y');

			$member_result = $this->Item->update_member($id,$name,$gender,$email,$contact,$date);
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
	function adding_equipment()
	{
		$this->load->view('admin/equipments/add_equipments');
	}
	function inserting_equipment()
	{
		if ($this->form_validation->run('equipment_form') == FALSE)
		{
			$this->form_validation->set_error_delimiters('<div class="error" style="color:red">','</div>');
			$this->load->view('admin/equipments/add_equipments');
		}
		else
		{
			$equipment_name = $this->input->post('equipment_name');
			$date = date('m/d/y');
			$equipment_data = array('equipment_name'=>$equipment_name,'date_created'=>$date );
			$equipment_result = $this->Item->insert_equipment($equipment_data);
			if ($equipment_result) {
				$this->session->set_flashdata('add_equipment','Equipment Successfully Entered');
				return redirect('Admin_controller/adding_equipment');
			}
			else
			{
				$this->session->set_flashdata('add_equipment','Error Entering Equipment. Please Try Again');
				return redirect('Admin_controller/adding_equipment');
			}
		}
	}
	function listing_equipment()
	{
		$equipment_result = $this->Item->list_equipment();
		$this->load->view('admin/equipments/list_equipments',['equipment_data'=>$equipment_result]);
	}
	function editing_equipment($id)
	{
		$equipment_result = $this->Item->edit_equipment($id);
		$this->load->view('admin/equipments/edit_equipments',['equipment_result'=>$equipment_result]);
	}
	function updating_equipment()
	{
		$id = $this->input->post('id');
		$equipment_result = $this->Item->edit_equipment($id);
		
		if ($this->form_validation->run('equipment_form') == FALSE) {
			$this->form_validation->set_error_delimiters('<div class="error" style="color:red">','</div>');
			$this->load->view('admin/equipments/edit_equipments',['equipment_result'=>$equipment_result]);
		}
		else {
			$id = $this->input->post('id');
			$name = $this->input->post('equipment_name');
			$date = date('m/d/y');
			$equipment_result = $this->Item->update_equipment($id,$name,$date);
			if ($equipment_result) {
				$this->session->set_flashdata('flash_equipment','Equipment Updated Successfully');
				return redirect('Admin_controller/listing_equipment');
			}
			else{
				$this->session->set_flashdata('flash_equipment','Error Equipment. Please Try Again');
				return redirect('Admin_controller/listing_equipment');
			}
		}
	}	
	function deleting_equipment($id)
	{
		$equipment_result = $this->Item->delete_equipment($id);
		if ($equipment_result) {
			$this->session->set_flashdata('flash_equipment','Equipment Deleted Succcessfully');
			return redirect('Admin_controller/listing_equipment');
		}
	}
		function adding_trainer()
	{
		$this->load->view('admin/trainers/add_trainers');
	}
		function inserting_trainer()
	{
		if ($this->form_validation->run('trainer_form') == TRUE)
		{
			$this->form_validation->set_error_delimiters('<div class="error" style="color:red">','</div>');
			$this->load->view('admin/trainers/add_trainers');
		}
		else
		{
			$trainer_name = $this->input->post('trainer_name');
			$date = date('m/d/y');
			$trainer_data = array('trainer_name'=>$trainer_name,'date_created'=>$date );
			$trainer_result = $this->Item->insert_trainer($trainer_data);
			if ($trainer_result) {
				$this->session->set_flashdata('add_trainer','Trainer Successfully Entered');
				return redirect('Admin_controller/adding_trainer');
			}
			else
			{
				$this->session->set_flashdata('add_trainer','Error Entering Trainer. Please Try Again');
				return redirect('Admin_controller/adding_trainer');
			}
		}
	}
	function listing_trainer()
	{
		$trainer_result = $this->Item->list_trainer();
		$this->load->view('admin/trainers/list_trainers',['trainer_data'=>$trainer_result]);
	}
	function editing_trainer($id)
	{
		$trainer_result = $this->Item->edit_trainer($id);
		$this->load->view('admin/trainers/edit_trainers',['trainer_result'=>$trainer_result]);
	}
	function updating_trainer()
	{
		$id = $this->input->post('id');
		$trainer_result = $this->Item->edit_trainer($id);
		
		if ($this->form_validation->run('trainer_form') == TRUE) {
			$this->form_validation->set_error_delimiters('<div class="error" style="color:red">','</div>');
			$this->load->view('admin/trainers/edit_trainers',['trainer_result'=>$trainer_result]);
		}
		else {
			$id = $this->input->post('id');
			$name = $this->input->post('trainer_name');
			$date = date('m/d/y');
			$trainer_result = $this->Item->update_trainer($id,$name,$date);
			if ($trainer_result) {
				$this->session->set_flashdata('flash_trainer','Trainer Updated Successfully');
				return redirect('Admin_controller/listing_trainer');
			}
			else{
				$this->session->set_flashdata('flash_trainer','Error Updating Trainer. Please Try Again');
				return redirect('Admin_controller/listing_trainer');
			}
		}
	}
	function deleting_trainer($id)
	{
		$trainer_result = $this->Item->delete_trainer($id);
		if ($trainer_result) {
			$this->session->set_flashdata('flash_trainer','Trainer Deleted Succcessfully');
			return redirect('Admin_controller/listing_trainer');
		}
	}

	function logout()
	{
		$this->session->unset_userdata('security');
		return redirect('login_controller');
	}
}
