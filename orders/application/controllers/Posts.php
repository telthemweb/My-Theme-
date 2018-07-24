<?php
class Posts extends CI_Controller{
    public function index($offset = 0)
    {
        //pagination config
        $this->load->library('pagination');
        $config['base_url'] = base_url().'posts/index/';
        $config['total_rows'] = $this->db->count_all('blog');
        $config['per_page'] = 3;
        $config['uri_segment'] = 3;
        $config['attributes'] = array('class' => 'pagination-links');

        //init pagenation
        $this->pagination->initialize($config);

    	$data['title'] = 'Latest Posts';

    	$data['posts'] = $this->post_model->get_posts(FALSE,$config['per_page'], $offset);
    	
        
        $this->load->view('templates/header');
        $this->load->view('posts/index', $data);
        $this->load->view('templates/footer');
    }
    public function view($slug = NULL)
    {
    	$data['post'] = $this->post_model->get_posts($slug);
        $b_id = $data['post']['b_id'];
        $data['comments'] = $this->comment_model->get_comments($b_id);
    	if (empty($data['post'])) {
    		show_404();
    	}
    	//$data['title'] = $data['post']['title'];
    	
        
        $this->load->view('templates/header');
        $this->load->view('posts/view', $data);
        $this->load->view('templates/footer');
    }
       public function create()
    {
        if (!$this->session->userdata('logged_in')) {
            redirect('users/login');
        }
    	//$data['post'] = $this->post_model->get_posts($slug);
    	
    	$data['title'] = 'Create A Post';
        $data['category'] = $this->post_model->get_category();

    	$this->form_validation->set_rules('title','Title','required');
    	$this->form_validation->set_rules('body','Body','required');

    	if ($this->form_validation->run()===FALSE) {
    		$this->load->view('templates/header');
	        $this->load->view('posts/create', $data);
	        $this->load->view('templates/footer');
    	}else{
            //upoad image
            $config['upload_path'] = './assets/img/posts';
            $config['allowed_types'] = 'gif|png|jpg|jpeg|mp3';
            $config['max_size'] = '2098';
            $config['max_width'] = '500';
            $config['max_height'] = '500';

            $this->load->library('upload',$config);

            if (!$this->upload->do_upload()) {
                $errors = array('error'=>$this->upload->display_errors());
                $post_image = 'noimage.jpg';
            }else{
                $data = array('upload_data'=>$this->upload->data());
                $post_image = $_FILES['userfile']['name'];
                
            }

    		$this->post_model->create_post($post_image);
            $this->session->set_flashdata('post_created', 'Your post has been created');
    		redirect('posts');
    	}
    }
    public function delete($b_id)
    {
    	 if (!$this->session->userdata('logged_in')) {
            redirect('users/login');
        }
    	$this->post_model->delete_post($b_id);
        $this->session->set_flashdata('post_deleted', 'Your post has been deleted');
    	redirect('posts');
    }
    public function edit($slug)
    {
         if (!$this->session->userdata('logged_in')) {
            redirect('users/login');
        }

        //check if it is the user
        if ($this->session->userdata('user_id') !=$this->post_model->get_posts($slug)['user_id']) {
            redirect('posts');
        }
    $data['post'] = $this->post_model->get_posts($slug);
    $data['category'] = $this->post_model->get_category();
    	if (empty($data['post'])) {
    		show_404();
    	}
    	$data['title'] = 'Edit Post';
    	
        
        $this->load->view('templates/header');
        $this->load->view('posts/edit', $data);
        $this->load->view('templates/footer');
    }
     public function update()
    {
         if (!$this->session->userdata('logged_in')) {
            redirect('users/login');
        }
    	$this->post_model->update_posts();
        $this->session->set_flashdata('post_updated', 'Your post has been updated');
    	redirect('posts');
    }

}

