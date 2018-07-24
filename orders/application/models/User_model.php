<?php

class User_model extends CI_Model{

public function __construct()
	{
		$this->load->database();
	}

public function create_account($post_image, $enc_password)
{
	$data = array(
				'name' => $this->input->post('name'),
				'lname' => $this->input->post('lname'),
				'email' => $this->input->post('kupa'),
				'dob' => $this->input->post('dob'),
				//'email' => $this->input->post('email'),
				'username' => $this->input->post('username'),
				'password' => $enc_password,
				'phone' => $this->input->post('phone'),
				'country' => $this->input->post('country'),
				'city' => $this->input->post('city'),
				'gender' => $this->input->post('gender'),
				'avatar' => $post_image
			);
	return $this->db->insert('user_account', $data);
}
public function check_username_exists($username)
{
	$query = $this->db->get_where('user_account',  array('username' =>$username));
	if (empty($query->row_array())) {
		return true;
	}else{
		return false;
	}
	
}
public function check_email_exists($email)
{
	$query = $this->db->get_where('user_account',  array('email' =>$email));
	if (empty($query->row_array())) {
		return true;
	}else{
		return false;
	}
}
public function signin_user($username, $password)
{
	//validation 
	$this->db->where('username', $username);
	$this->db->where('password', $password);
	$result = $this->db->get('user_account');
	if ($result->num_rows()==1) {
		return $result->row(0)->user_id;
	}else{
		return false;
	}
}
}