<?php

class category_model extends CI_Model{
	public function __construct()
	{
		$this->load->database();
	}
	public function create_category()
	{
		$data = array(
				'name' => $this->input->post('name'),
				
			);
		return $this->db->insert(' b_catigory', $data);
	}
	public function get_category()
	{
		$this->db->order_by('name');
		$query = $this->db->get('b_catigory');
		return $query->result_array();
	}
	public function get_categories($id)
	{
		$query = $this->db->get_where('b_catigory',  array('c_id' =>$id));
		return $query->row();
	}
}