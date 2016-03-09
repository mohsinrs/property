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
            $data['advertisements'] = $this->advertisement_model->getLatestAdvertisements();
            $data['content'] = $this->load->view($file, $viewData, TRUE);
//                $data['admin'] = $this->session->userdata('USER');
            $this->load->view($this->layout, $data);
//        }
    }
    
    protected function setLayout($layout = 'layout/main') {
        
        $this->layout = $layout;
    }
    
    protected function uploadImage($Path, $FileName) {

        $config['upload_path'] = $_SERVER['DOCUMENT_ROOT'].'/property/public/uploads/'.$Path;
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
//        $config['max_size'] = 100;
//        $config['max_width'] = 1024;
//        $config['max_height'] = 768;
        $config['overwrite'] = TRUE;

        if (!file_exists($config['upload_path']) && !is_dir($config['upload_path'])) {
            mkdir($config['upload_path'], 0777, TRUE);
        } 

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        
        if (!$this->upload->do_upload($FileName)) {
            $error = $this->upload->display_errors();
            setNotification('danger', 'Error. File not uploaded.');
            return false;
        }
        return true;
    }
    
}