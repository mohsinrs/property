<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    function __construct() {
        parent::__construct();
        $this->load->model('misc_model');
    }

    public function index() {

        if ($this->input->post('submit')) {
            try {
                $config['upload_path'] = base_url().'public/uploads/';
                $config['allowed_types'] = 'gif|jpg|jpeg|png';
//                $config['max_size'] = 100;
//                $config['max_width'] = 1024;
//                $config['max_height'] = 768;
                $config['overwrite'] = TRUE;

                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('profile_pic')) {
                    $error = $this->upload->display_errors();
                    setNotification('danger', 'Error. File not uploaded.');
                } else {
                    $data = array('upload_data' => $this->upload->data());
                }
                $result = $this->misc_model->register();
                if ($result) {
                    setNotification('success', 'Your account created sucessfully.');
                    redirect(base_url('welcome'));
                }
            } catch (Exception $e) {
                setNotification('danger', 'Error. Coudn\'t register. Try later.');
            }
        }

        $data = array();
        $data['cities'] = $this->misc_model->getCities(1); // country_id
        $data['content'] = $this->load->view('register', $data, TRUE);
        $this->load->view('layout/main', $data);
    }

}
