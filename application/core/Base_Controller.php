<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Base_Controller extends CI_Controller {

    protected $layout = 'admin/layout/main';
    protected $enableLayout = true;
    protected $user;

    public function __construct() {
        parent::__construct();

        if ($this->router->fetch_class() !== 'login') {
            $user_data = $this->session->userdata('USER');
            if (empty($user_data)) {
                redirect(base_url('admin/login'));
            } else {
                $this->user = $user_data;
            }
        }
    }

    protected function render($file = NULL, $viewData = array())
    {
//        if ($this->enableLayout === false) {
//            $this->load->view($file, $viewData);
//        } else {
            $data['user_id'] = $this->user->user_id;
            $data['user_name'] = $this->user->name;
            $data['user_email'] = $this->user->email;
            $data['user_image'] = $this->user->profile_pic;

            $data['content'] = $this->load->view($file, $viewData, TRUE);
//                $data['admin'] = $this->session->userdata('USER');
            $this->load->view($this->layout, $data);
//        }
    }

    protected function disableLayout() 
    {
        $this->enableLayout = false;
    }
    
//    public function setLayout($layout = 'main') {
//        
//        $this->layout = 'layout/'.$layout;
//    }

}