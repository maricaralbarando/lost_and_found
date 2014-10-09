<?php

class Users extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('users_model');
    }

    public function index()
    {
      $this->load->view('include/header');
//    echo("test");
        $data['users'] = $this->users_model->get_users();
        $this->load->view('users/index', $data);

      $this->load->view('include/footer');
    }

    public function view($slug)
    {
      $this->load->view('include/header');
//    echo ("test");
        $data['user'] = $this->users_model->get_users($slug);
        if(empty($data['user']))
        {
            show_404();
        }
//        echo ($slug);
//        $data['user'] = $data['users']['title'];
        $this->load->view('users/view', $data);
      $this->load->view('include/footer');
    }

    public function create()
    {
//        $this->output->enable_profiler(TRUE);

      $this->load->view('include/header');
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Create new user';

        $this->form_validation->set_rules('userid', 'Userid', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('userid', 'User ID', 'required');
        $this->form_validation->set_rules('firstname', 'First Name', 'required');
        $this->form_validation->set_rules('firstname', 'Last Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');

        echo ("run");
        if ($this->form_validation->run() === FALSE)
        {
//    		$this->load->view('templates/header', $data);
            $this->load->view('users/create');
//    		$this->load->view('templates/footer');

        }
        else
        {
        echo("INSERT ME");
            echo $this->users_model->set_user();
            $this->load->view('users/success');
            echo $this->db->_error_message();
        }

      $this->load->view('include/footer');
    }

}
