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
    public function index() {
        
        $this->load->model('misc_model');
        
        if ($this->input->post('submit')) {
            try {
                $result = $this->misc_model->register();
                if ($result == true) {
                    setNotification('success', 'Your account created sucessfully.');
                    redirect(base_url('welcome'));
                }
            } catch (Exception $e) {
                setNotification('danger', 'Error. Coudn\'t register. Try later.');
            }
        }
        
        $data = array();
        $data['cities'] = $this->misc_model->getCities(1); // country_id
        $data['result'] = array();
        $data['content'] = $this->load->view('register', $data, TRUE);
        $this->load->view('layout/main', $data);
    }

}
