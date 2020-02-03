<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_model extends CI_Model {

	/*Insert*/
	public function create_users($data) {

		$this->db->insert('users',$data);
	
	}
	
	public function get_data(){

		$query = $this->db->get('users');

		return $query->result();
	}

	public function get_data_id($id){	
			
		$query = $this->db->get_where('users', array('id' => $id));
		
		// echo "<pre>";
		// print_r($query->row()->id);
		// echo "</pre>";	
		
		return $query->row()->id;
	
	}

	public function get_data_row_id($id){

		$id = $this->get_data_id($id);

		$query = $this->db->query("SELECT * FROM users WHERE id = $id ");
		// echo "<pre>";
        // print_r($query->result_array());
		// echo "</pre>";
		
		return $query->result_array();
	}

	// public function update_data($data,$id){

	// 	// $query = $this->db->get_where('users',array('id' => $id))->result();
	// 	// print_r($query);
	// 	$this->db->where(['id' => $id]);

	// 	$this->db->update('users',$data);

		//$this->db->insert('users',$data);

	    //redirect('table_view');

	//}

	public function delete_data($id){

		return $this->db->delete('users', array('id' => $id));

	}
}