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
    public function index() {

        $data = array();
//        $data['result'] = $this->Offer_model->fetchAllRotation();
        $data['title'] = "My Profile";
        
        $this->render('admin/profile/index', $data);
    }
    
    public function change_password() {

        $data = array();
//        $data['result'] = $this->Offer_model->fetchAllRotation();
        $data['title'] = "Change Password";
        
        $this->render('admin/profile/change_password', $data);
    }
}
