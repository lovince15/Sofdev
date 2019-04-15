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

	function insert_facility($data)
	{
		$query = $this->db->insert('facility',$data);
				return $query;
	}
	
	function list_facility()
	{
		$query = $this->db->select('facility.id as facility_id,facility_name,price,image,locations.id as locations_id,category.id as category_id,
			description,facility.date_created as date_created,location_name,category_name')
						->from('facility','locations','category')
						->join('locations','facility.locations_id = locations.id','left')
						->join('category','facility.category_id = category.id','left')
						->get();
				return $query->result();
	}

	function edit_facility($id)
	{
		$query = $this->db->select('facility.id as facility_id,facility_name,price,image,locations.id as locations_id,category.id as category_id,
			description,facility.date_created as date_created,location_name,category_name')
						->from('facility','locations','category')
						->where('facility.id',$id)
						->join('locations','facility.locations_id = locations.id','left')
						->join('category','facility.category_id = category.id','left')
						->get();
				return $query->row();
	}
	function update_facility($data,$id)
	{
		$query = $this->db
					  ->where('facility.$id',$id)
					  ->update('facility',$data);
					  return $query;
	}
	
	function delete_facility($id)
	{
		$query = $this->db
						->delete('facility',['id'=>$id]);
				return $query;
	}
}
	