<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends Base_Controller {

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
        $this->load->model('user_model');
    }
    
    public function index() {

        $data = array();
//        $data['result'] = $this->Offer_model->fetchAllRotation();
        $data['title'] = "My Profile";
        
        $this->render('admin/profile/index', $data);
    }
    
    public function change_password() {

        if ($this->input->post('submit')) {
            try {
                $result = $this->misc_model->change_password($id);
                if ($result == true) {
                    setNotification('success', 'Record updated successfully');
                    redirect(base_url('admin/advertisement'));
                }
            } catch (Exception $e) {
                setNotification('error', 'Error in updating record');
            }
        }        
        $data = array();
        $data['title'] = "Change Password";
        
        $this->render('admin/profile/change_password', $data);
    }
    
     public function user_profile() {

        $data = array();
//        $data['result'] = $this->Offer_model->fetchAllRotation();
        $data['title'] = "User Profile";
        
        $this->render('admin/profile/user_profile', $data);
    }
}
