<?php
class Post_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}
	public function get_posts($slug = FALSE, $limit = FALSE, $offset= FALSE)
	{
		if ($limit) {
			$this->db->limit($limit, $offset);
		}
		if ($slug === FALSE) {
			$this->db->order_by('b_id', 'DESC');
			$this->db->join('b_catigory','b_catigory.c_id = catigory_id');
			$query = $this->db->get('blog');
			return $query->result_array(); 
		}
		
		$query = $this->db->get_where('blog',array('slug'=>$slug));
		return $query->row_array(); 
	}
	//create_post()
	public function create_post($post_image)
	{
		$slug = url_title($this->input->post('title'));
		$data = array(
				'title' => $this->input->post('title'),
				'slug' => $slug,
				'body' => $this->input->post('body'),
				'catigory_id' => $this->input->post('catigory_id'),
				'user_id' => $this->session->userdata('user_id'),
				'post_image' => $post_image
			);
		return $this->db->insert('blog', $data); 
	}

	public function delete_post($b_id)
	{
		$this->db->where('b_id', $b_id); 
		$this->db->delete('blog');
		return true;
	}
	//update_posts();
	public function update_posts()
	{
		$slug = url_title($this->input->post('title'));
		$data = array(
				'title' => $this->input->post('title'),
				'slug' => $slug,
				'body' => $this->input->post('body'),
				'catigory_id' => $this->input->post('catigory_id')
			);
		$this->db->where('b_id',$this->input->post('b_id'));
		return $this->db->update('blog', $data);
	}
	//get_category()
		public function get_category()
	{
		$this->db->order_by('name');
		$query = $this->db->get('b_catigory');
		return $query->result_array();
	}
	public function get_post_by_category_id($id)
	{
		$this->db->order_by('b_id', 'DESC');
		$this->db->join('b_catigory','b_catigory.c_id = catigory_id');
		$query = $this->db->get_where('blog', array('c_id' =>$id));
		return $query->result_array();
	}
}