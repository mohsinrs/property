<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Property extends Base_Controller {

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
        $this->load->model('property_model');
        $this->load->model('misc_model');
    }
    
    public function approved() {

        $data = array();
//        $data['result'] = $this->Offer_model->fetchAllRotation();
        $data['title'] = "Approved Properties";
        
        $this->render('admin/property/approved', $data);
    }
    
    public function pending() {

        $data = array();
//        $data['result'] = $this->Offer_model->fetchAllRotation();
        $data['title'] = "Approved Properties";
        
        $this->render('admin/property/pending', $data);
    }
    
    public function rejected() {

        $data = array();
//        $data['result'] = $this->Offer_model->fetchAllRotation();
        $data['title'] = "Rejected Properties";
        
        $this->render('admin/property/rejected', $data);
    }
    
    public function view() {

        $data = array();
        $data['purpose_list'] = $this->misc_model->getPropertyPurpose();
        $data['type_list'] = $this->misc_model->getPropertyType();
        $data['cities'] = $this->misc_model->getCities(1); // country_id
        $data['area_units'] = $this->misc_model->getAreaUnits();
        $data['construction_status'] = $this->misc_model->getConstructionStatus();
        $data['title'] = "Post New Listing";
//        var_dump($data['purpose_list']); exit;
        $this->render('user/property/add_new_advance', $data);
    }

}
