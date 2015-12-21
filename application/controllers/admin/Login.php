<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends Base_Controller {

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

        $data = array();
        $data['title'] = "Login";
        $this->load->view('admin/login', $data);
    }
    
    public function process() {

        $this->load->model('login_model');
        $result = $this->login_model->validate();
        if (!$result) {
            setNotification('danger', 'Invalid User name or Password.');
            redirect(base_url('admin/login'));
        } else {
            redirect(base_url('admin/dashboard'));
        }
    }
    
    public function logout() 
    {
        $this->session->unset_userdata('USER');
        redirect(base_url('admin/login'));
    }

    public function forgot() 
    {
        $this->load->library('email');

        $this->email->from('info@my_property.com', 'My Property');
        $this->email->to('admin@my_property.com'); 
//        $this->email->cc('another@another-example.com'); 
//        $this->email->bcc('them@their-example.com'); 

        $this->email->subject('Password Recovery');
        $this->email->message('Your new password is "123456". Kindly change your password from tools to more secure password.');
//        $this->email->send();
        
        setNotification('success', 'Check your inbox.');
        
        redirect(base_url('admin/login'));
    }

}
