<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class alert extends Base_Controller {

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
        $this->load->model('alert_model');
        $this->load->model('misc_model');
        $this->load->model('user_model');
    }
    
    public function index() {
        
        if ($this->input->post('submit')) {
            $result = $this->alert_model->insert();
            if ($result) {
                setNotification('success', 'Record inserted successfully');
                redirect(base_url('user/alert'));
            } else {
                setNotification('error', 'Error in inserting new record');
                redirect(base_url('user/alert'));
            }
        }
        
        $data = array();
        $type_list = $this->misc_model->getPropertyType();
        $data['type_list'] = sortedPropertyTypes($type_list);
        $data['purpose_list'] = $this->misc_model->getPropertyPurpose();
        $data['cities'] = $this->misc_model->getCities(1); // country_id
        $data['agents'] = $this->user_model->fetchAll();
        $data['title'] = "Create Alert";

        $this->render('user/alert/index', $data);
    }

    public function manage() {

        $data = array();
//        $data['result'] = $this->Offer_model->fetchAllRotation();
        $data['title'] = "Manage Alert";

        $this->render('user/alert/manage', $data);
    }

}
