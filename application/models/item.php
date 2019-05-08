<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Item extends CI_Model {

	function insert_location($location_data)
	{	
		$query = $this->db->insert('locations',$location_data);
		return $query;	
					
	}

	function list_location()
	{
		$query = $this->db->select('*')
							  ->get('locations');
					return $query->result(); 
	}

	function edit_location($id)
	{
		$query = $this->db->select('*')
						   ->where('id',$id)
						   ->get('locations');	
			return $query->row();
	}

	function update_location($name,$id,$date)
	{
		$query = $this->db
							 ->where('id',$id) 
							 ->update('locations',['location_name'=>$name,'date_created'=>$date]);
					return $query;						
	}

	function delete_location($id)
	{
		$query = $this->db
						->delete('locations',['id'=>$id]);
				return $query;
	}

	function insert_category($category_data)
	{
		$query = $this->db
						->insert('category',$category_data);
				return $query;
	}

	function list_category()
	{
		$query = $this->db->select('*')
						->get('category');
				return $query->result();
	}

	function edit_category($id)
	{
		$query = $this->db->select()
							->where('id',$id)
							->get('category');
				return $query->row();
	}

	function update_category($id,$name,$date)
	{
		$query = $this->db
						->where('id',$id)
						->update('category',['category_name'=>$name,'date_created'=>$date]);
				return $query;
	}

	function delete_category($id)
	{
		$query = $this->db
						->delete('category',['id'=>$id]);
				return $query;
	}
	
	
	function insert_facility($facility_data)
	{
		$query = $this->db
						->insert('facility',$facility_data);
				return $query;
	}

	function list_facility()
	{
		$query = $this->db->select('*')
						->get('facility');
				return $query->result();
	}

	function edit_facility($id)
	{
		$query = $this->db->select()
							->where('id',$id)
							->get('facility');
				return $query->row();
	}

	function update_facility($id,$name,$date)
	{
		$query = $this->db
						->where('id',$id)
						->update('facility',['facility_name'=>$name,'date_created'=>$date]);
				return $query;
	}

	function delete_facility($id)
	{
		$query = $this->db
						->delete('facility',['id'=>$id]);
				return $query;
	}

	function insert_trainer($trainer_data)
	{
		$query = $this->db
						->insert('trainer',$trainer_data);
				return $query;
	}
	function list_trainer()
	{
		$query = $this->db->select('*')
						->get('trainer');
				return $query->result();
	}
	function edit_trainer($id)
	{
		$query = $this->db->select()
							->where('id',$id)
							->get('trainer');
				return $query->row();
	}
	function update_trainer($id,$name,$date)
	{
		$query = $this->db
						->where('id',$id)
						->update('trainer',['trainer_name'=>$name,'date_created'=>$date]);
				return $query;
	}
		function delete_trainer($id)
	{
		$query = $this->db
						->delete('trainer',['id'=>$id]);
				return $query;
	}
////////////////////////////////////////////////////////////////////////////////////
	function insert_member($member_data)
	{
		$query = $this->db
						->insert('member',$member_data);
				return $query;
	}
	
	function list_members()
	{
		$query = $this->db->select('*')
					  ->get('member');
					return $query->result();
	}
	function edit_members($id)
	{
		$query = $this->db->select()
							->where('id',$id)
							->get('member');
				return $query->row();
	}
	
	function update_member($id, $name, $gender, $email, $contact, $date)
	{
		$query = $this->db
						->where('id',$id)
						->update('member',['member_name'=>$name,'member_gender'=>$gender,'member_email'=>$email,'member_contact'=>$contact,'date_created'=>$date]);
				return $query;
	}
	
	function delete_member($id)
	{
		$query = $this->db
						->delete('member',['id'=>$id]);
				return $query;
	}
	////////////////////////////////////////////////////////////
	function insert_equipment($equipment_data)
	{
		$query = $this->db
						->insert('equipment',$equipment_data);
				return $query;
	}

	function list_equipment()
	{
		$query = $this->db->select('*')
						->get('equipment');
				return $query->result();
	}

	function edit_equipment($id)
	{
		$query = $this->db->select()
							->where('id',$id)
							->get('equipment');
				return $query->row();
	}

	function update_equipment($id,$name,$date)
	{
		$query = $this->db
						->where('id',$id)
						->update('equipment',['equipment_name'=>$name,'date_created'=>$date]);
				return $query;
	}

	function delete_equipment($id)
	{
		$query = $this->db
						->delete('equipment',['id'=>$id]);
				return $query;
	}
}
