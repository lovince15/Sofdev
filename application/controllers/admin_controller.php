<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_controller extends CI_Controller {

	function __construct(){
		parent::__construct();

		$out = $this->session->userdata('security');
		if(!$out){
			return redirect('login_controller');
		}
		$this->load->model('item');
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

       $insert_result = $this->item->insert_location($location_data);

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
		$list_result = $this->item->list_location();
		if ($list_result) {
			$this->load->view('admin/locations/list_locations',['list_data'=>$list_result]);
		}
		else{
		$this->load->view('admin/locations/list_locations',['list_data'=>$list_result]);
		}
	}

	function editing_location($id)
	{
		$edit_result = $this->item->edit_location($id);
		$this->load->view('admin/[locations/edit_locations',['edit_result'=>$edit_result]);
	}

	function updating_location()
	{
		$id = $this->input->post('id');
		$edit_result = $this->item->edit_location($id);
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

	$update_result = $this->item->update_location($name,$id,$date);
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
		$delete_result = $this->item->delete_location($id);
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
			$category_result = $this->item->insert_category($category_data);
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
		$category_result = $this->item->list_category();
		$this->load->view('admin/categories/list_categories',['category_data'=>$category_result]);
	}

	function editing_category($id)
	{
		$category_result = $this->item->edit_category($id);
		$this->load->view('admin/categories/edit_categories',['category_result'=>$category_result]);
	}
	
	function updating_category()
	{
		$id = $this->input->post('id');
		$category_result = $this->item->edit_category($id);
		

		if ($this->form_validation->run('category_form') == FALSE) {
			$this->form_validation->set_error_delimiters('<div class="error" style="color:red">','</div>');
			$this->load->view('admin/categories/edit_categories',['category_result'=>$category_result]);
		}
		else {
			$id = $this->input->post('id');
			$name = $this->input->post('category_name');
			$date = date('m/d/y');

			$category_result = $this->item->update_category($id,$name,$date);
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
		$category_result = $this->item->delete_category($id);
		if ($category_result) {
			$this->session->set_flashdata('flash_category','Category Deleted Succcessfully');
			return redirect('Admin_controller/listing_category');
		}
	}

	function adding_facility()
	{
		$list_result['location'] = $this->item->list_location();
		$list_result['category'] = $this->item->list_category();
		$this->load->view('admin/facilities/add_facilities',['result'=>$list_result]);
	}

	function inserting_facility(){
		if (empty($_FILES['upload_file']['name'])) {
		$this->form_validation->set_rules('upload_file','File','required');
		}
		$list_result['location'] = $this->item->list_location();
		$list_result['category'] = $this->item->list_category();

		if ($this->form_validation->run('facility_form') == FALSE) {
			$this->form_validation->set_error_delimiters('<div class="error" style="color:red">','</div>');
			return $this->adding_facility();
		}

		else{ 
			$config['upload_path']          = './templates/img';
                $config['allowed_types']        = 'jpg|png';
                $config['max_size']				= 3000;
                $this->load->library('upload', $config);
                
                if ( ! $this->upload->do_upload('upload_file'))
                {
                        $error = array('error' => $this->upload->display_errors());
                        //print_r($error);die;
                        

                }
                else{
                		$file_name = $this->upload->data();
                		
                		$data['image'] = $file_name['file_name'];
                		$data['facility_name'] = $this->input->post('facility_name');
                		$data['price'] = $this->input->post('price');
                		$data['locations_id'] = $this->input->post('location_id');
                		$data['category_id'] = $this->input->post('category_id');
                		$data['description'] = $this->input->post('description');
                		$data['date_created'] = date('d/m/y');

                		$item_result = $this->item->insert_facility($data);
                		if ($item_result) {
                			$this->session->set_flashdata('facility_flash','Facility Added Successfully');
                			return redirect('Admin_controller/adding_facility');
                		}
                		else{
                			echo "Error Occured. Please Try Again";
                		}
                }
		}
	}

	function listing_facility()
	{
	$list_item = $this->item->list_facility();
	//echo"<pre>";print_r($list_item);die;
	$this->load->view('admin/facilities/list_facilities',['list_data'=>$list_item]);	
	}

	function editing_facility($id)
	{
		$edit_data = $this->item->edit_facility($id);
		//print_r($edit_data);die;
		$result['location'] = $this->item->list_location();
		$result['category'] = $this->item->list_category();
		
		$this->load->view('admin/facilities/edit_facilities',['edit_data'=>$edit_data,'result'=>$result]);
	}

	function updating_facility()
	{

				if (empty($_FILES['upload_file']['name'])) {
		$this->form_validation->set_rules('upload_file','File','required');
		}
		$list_result['location'] = $this->item->list_location();
		$list_result['category'] = $this->item->list_category();

		if ($this->form_validation->run('facility_form') == FALSE) {
			$this->form_validation->set_error_delimiters('<div class="error" style="color:red">','</div>');
			return $this->editing_facility();
		}

		else{ 
			$config['upload_path']          = './templates/img';
                $config['allowed_types']        = 'jpg|png';
                $config['max_size']				= 3000;
                $this->load->library('upload', $config);
                
                if ( ! $this->upload->do_upload('upload_file'))
                {
                        $error = array('error' => $this->upload->display_errors());
                        //print_r($error);die;
                        

                }
                else{
                		$file_name = $this->upload->data();
                		
                		$data['image'] = $file_name['file_name'];
                		$data['facility_name'] = $this->input->post('facility_name');
                		$data['price'] = $this->input->post('price');
                		$data['locations_id'] = $this->input->post('location_id');
                		$data['category_id'] = $this->input->post('category_id');
                		$data['description'] = $this->input->post('description');
                		$data['date_created'] = date('d/m/y');

                		$item_result = $this->item->update_facility($data,$id);
                		if ($item_result) {
                			$this->session->set_flashdata('facility_flash','Facility Updated Successfully');
                			return redirect('Admin_controller/adding_facility');
                		}
                		else{
                			echo "Error Occured. Please Try Again";
                		}
                }
		}
		
	}

	function deleting_facility($id)
	{
		$delete_result = $this->item->delete_facility($id);
		if ($delete_result) {
			$this->session->set_flashdata('flash_category','Item Deleted Successfully');
			return redirect('Admin_controller/listing_facility');
		}
		else{
			$this->session->set_flashdata('flash_category','Error Occured. Please Try Again');
			return redirect('Admin_controller/listing_facility');
		}
	}

	function logout()
	{
		$this->session->unset_userdata('security');
		return redirect('login_controller');
	}
}