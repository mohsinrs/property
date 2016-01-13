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
        $this->load->model('misc_model');
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
                $Verify_Result = $this->misc_model->verify_password(getLoginUserId());
                if(is_object($Verify_Result)) {
                    $result = $this->misc_model->update_password(getLoginUserId());
                    if ($result) {
                        setNotification('success', 'Record updated successfully');
                        redirect(base_url('admin/profile/change_password'));
                    }                    
                } else {
                    setNotification('danger', 'New & Confirm password does not match.');
                    redirect(base_url('admin/profile/change_password'));
                }
            } catch (Exception $e) {
                setNotification('danger', 'Error in updating record');
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
