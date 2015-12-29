<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends Base_Controller {

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
    public function roles() {

        $data = array();
//        $data['result'] = $this->Offer_model->fetchAllRotation();
        $data['title'] = "User Role Approval";

        $this->render('admin/users/roles', $data);
    }

    public function approved() {

        $data = array();
        $data['result'] = $this->user_model->fetchAll(1);
        $data['title'] = "Approved Users";

        $this->render('admin/users/approved', $data);
    }

    public function pending() {

        $this->load->model('user_model');
        $data = array();
        $data['result'] = $this->user_model->fetchAll(0);
        $data['title'] = "Pending Users";

        $this->render('admin/users/pending', $data);
    }

    public function rejected() {

        $data = array();
        $data['result'] = $this->user_model->fetchAll(2);
        $data['title'] = "Rejected Users";

        $this->render('admin/users/rejected', $data);
    }

}
