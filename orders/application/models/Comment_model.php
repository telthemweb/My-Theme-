<?php

class Comment_model extends CI_Model{
	public function __construct()
	{
		$this->load->database();
	}
	//get all the comment from database
	public function create_comment($b_id)
	{
		$data = array(
			    'b_id'=>$b_id,
				'name' => $this->input->post('name'),
				//'email' => $this->input->post('email'),
				'comment' => $this->input->post('comment')
				
			);
		return $this->db->insert('comments', $data);
	}
	public function get_comments($b_id)
	{
		$query = $this->db->get_where('comments',array('b_id'=>$b_id));
		return $query->result_array();
	}
	
}