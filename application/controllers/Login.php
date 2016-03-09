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
    function __construct() {
        parent::__construct();
        $this->load->model('login_model');
        $this->setLayout();
    }
    
    public function index() {
        
        if ($this->input->post('submit')) {
            $result = $this->login_model->validate();
            if (!$result) {
                setNotification('danger', 'Invalid User name or Password.');
                redirect(base_url('login'));
            } else {
                redirect(base_url('admin/dashboard'));
            }
        }
        
        $data = array();
        $this->render('login', $data);
    }

}
