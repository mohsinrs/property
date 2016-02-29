<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Base_Controller extends CI_Controller {

    protected $layout = 'admin/layout/main';
    protected $enableLayout = true;
    protected $user;

    public function __construct() {
        
        parent::__construct();

//        if ($this->router->fetch_class() !== 'login') {
//            $user_data = $this->session->userdata('USER');
//            if (empty($user_data)) {
//                redirect(base_url('admin/login'));
//            } else {
//                $this->user = $user_data;
//            }
//        }
    }

    protected function render($file = NULL, $viewData = array())
    {
        if($this->layout === 'admin/layout/main') {
            if ($this->router->fetch_class() !== 'login') {
                $user_data = $this->session->userdata('USER');
                if (empty($user_data)) {
                    redirect(base_url('admin/login'));
                } else {
                    $this->user = $user_data;
                }
            }
        }
        
//        if ($this->enableLayout === false) {
//            $this->load->view($file, $viewData);
//        } else {
            // Remove following items & Use $this->user instead
            if($this->user) {
                $data['user_id'] = $this->user->user_id;
                $data['user_name'] = $this->user->name;
                $data['user_email'] = $this->user->email;
                $data['user_image'] = $this->user->profile_pic;
                $data['user_type'] = $this->user->user_type;
            }

            $data['content'] = $this->load->view($file, $viewData, TRUE);
//                $data['admin'] = $this->session->userdata('USER');
            $this->load->view($this->layout, $data);
//        }
    }
    
    public function setLayout($layout = 'layout/main') {
        
        $this->layout = $layout;
    }

}