<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends Base_Controller {

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
    }
    
    public function index() {

        $data = array();
        $data['purpose_list'] = $this->misc_model->getPropertyPurpose();
        $type_list = $this->misc_model->getPropertyType();
        foreach ($type_list as $value) {
            if($value->parent_property_type_id == NULL) {
                $data['type_list'][] = $value;
                foreach ($type_list as $value2) {
                    if($value2->parent_property_type_id == $value->property_type_id) {
                        $data['type_list'][] = $value2;
                    }
                }
            }
        }

        $data['cities'] = $this->misc_model->getCities(1); // country_id
        $data['area_units'] = $this->misc_model->getAreaUnits();
        $data['construction_status'] = $this->misc_model->getConstructionStatus();
        $data['clients'] = $this->misc_model->getClients(getLoginUserId());
        $data['title'] = "Search";
        
        $this->render('admin/search', $data);
    }

}
