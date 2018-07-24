<?php
class Category extends CI_Controller{
    public function index(){
         if (!$this->session->userdata('logged_in')) {
            redirect('users/login');
        }
         $data['title'] = 'List of Category';
         $data['category']= $this->category_model->get_category();

         $this->load->view('templates/header');
        $this->load->view('category/index', $data);
        $this->load->view('templates/footer');
    }
	public function create()
    {
         if (!$this->session->userdata('logged_in')) {
            redirect('users/login');
        }
        $data['title'] = 'Create Category';
        $this->form_validation->set_rules('name','Name','required');

        if ($this->form_validation->run()===FALSE) {
        	$this->load->view('templates/header');
	        $this->load->view('category/create', $data);
	        $this->load->view('templates/footer');
        }
        else{
        	$this->category_model->create_category();
            $this->session->set_flashdata('category_created', 'Your category has been created');
    		redirect('category');
        }
        
    }
    public function posts($id){
         if (!$this->session->userdata('logged_in')) {
            redirect('users/login');
        }
        $data['title'] = $this->category_model->get_categories($id)->name;
        $data['posts'] = $this->post_model->get_post_by_category_id($id);
        $this->load->view('templates/header');
        $this->load->view('posts/index', $data);
        $this->load->view('templates/footer');
    }
}