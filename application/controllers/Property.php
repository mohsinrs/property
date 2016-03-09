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
        $this->load->model('front_model');
        $this->setLayout();
    }
    
    public function detail($id = NULL) {
        
        $data = array();
        $data['result'] = $this->front_model->getPropertyDetail($id); // property_id
        $data['purpose_list'] = $this->misc_model->getPropertyPurposeList();
        $type_list = $this->misc_model->getPropertyTypeList();
        $data['type_list'] = sortedPropertyTypes($type_list);
        $data['cities'] = $this->misc_model->getCities(1); // country_id
        $data['featured_properties'] = $this->property_model->getFeaturedProperties();
        
        $this->render('property', $data);
    }

}
