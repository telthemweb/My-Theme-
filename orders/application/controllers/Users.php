<?php
class Users extends CI_Controller{
	public function register()
	{
		$data['title'] = 'User Registration';
         
        $this->form_validation->set_rules('name','Name','required');
    	$this->form_validation->set_rules('lname','Lname','required');
        $this->form_validation->set_rules('kupa','Kupa','required|callback_check_email_exists');
    	$this->form_validation->set_rules('dob','Dob','required');
    	//$this->form_validation->set_rules('email','Email','required');
    	$this->form_validation->set_rules('username','Username','required|callback_check_username_exists');
    	$this->form_validation->set_rules('password','Password','required');
    	$this->form_validation->set_rules('cpassword','Cpassword','matches[password]');
    	$this->form_validation->set_rules('phone','Phone','required');
    	$this->form_validation->set_rules('country','Country','required');
    	$this->form_validation->set_rules('city','City','required');
    	$this->form_validation->set_rules('gender','Gender','required');


    	if ($this->form_validation->run()===FALSE) {
    		$this->load->view('templates/header');
	        $this->load->view('users/register', $data);
	        $this->load->view('templates/footer');
    	}
    	else{
    		//upoad image
            $config['upload_path'] = './assets/img/avatar';
            $config['allowed_types'] = 'gif|png|jpg|jpeg';
            $config['max_size'] = '2098';
            $config['max_width'] = '2000';
            $config['max_height'] = '2000';

            $this->load->library('upload',$config);

            if (!$this->upload->do_upload()) {
                $errors = array('error'=>$this->upload->display_errors());
                $post_image = 'noimage.jpg';
            }else{
                $data = array('upload_data'=>$this->upload->data());
                $post_image = $_FILES['userfile']['name'];
                
            }
            $enc_password = md5($this->input->post('password'));
            $this->user_model->create_account($post_image, $enc_password);

            $this->session->set_flashdata('user_registered', 'You are now registered successfully, you can log in');
    		redirect('posts');
    	}
	}
    //check if username exist
    public function check_username_exists($username)
    {
        $this->form_validation->set_message('check_username_exists','Username already taken please choose a different one');
        if ($this->user_model->check_username_exists($username)) {
            return true;
        }
        else{
            return false;
        }
    }
    public function check_email_exists($email)
    {
        $this->form_validation->set_message('check_email_exists','Email is in use please choose a different one');
        if ($this->user_model->check_email_exists($email)) {
            return true;
        }
        else{
            return false;
        }
    }
    public function login()
    {
        $data['title'] = 'User signin';

        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password','Password','required');
        if ($this->form_validation->run()===FALSE) {
            $this->load->view('templates/header');
            $this->load->view('users/login', $data);
            $this->load->view('templates/footer');
        }else{
            //get usersname
            $username = $this->input->post('username');
            //get password
            $password = md5($this->input->post('password'));

            //login user 

            $user_id = $this->user_model->signin_user($username, $password);
            if ($user_id) {
               $user_data = array(
                    'user_id'=>$user_id,
                    'username'=>$username,
                    'logged_in'=>true
               );
               $this->session->set_userdata($user_data);

               $this->session->set_flashdata('user_login_in', 'logged in');
                  redirect('posts'); 
            }
            else{

                //create session
               $this->session->set_flashdata('login_failed', 'Invalid details please try again');
                  redirect('users/login'); 
            }

            
        }

        

    }
    public function logout()
    {
        $this->session->unset_userdata('logged_in');
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('username');

        $this->session->set_flashdata('logged_out', 'You are logged out');
            redirect('users/login');
    }
}