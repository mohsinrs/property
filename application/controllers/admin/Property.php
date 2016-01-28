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
    
    public function active() {

        $data = array();
        $data['result'] = $this->property_model->fetchAll(getLoginUserId(), 1);
        $data['title'] = "Approved Properties";
        
        $this->render('admin/property/approved', $data);
    }
    
    public function pending() {

        $data = array();
        $data['result'] = $this->property_model->fetchAll(getLoginUserId(), 0);
        $data['title'] = "Pending Properties";

        $this->render('admin/property/pending', $data);
    }
    
    public function rejected() {

        $data = array();
        $data['result'] = $this->property_model->fetchAll(getLoginUserId(), 2);
        $data['title'] = "Rejected Properties";
        
        $this->render('admin/property/rejected', $data);
    }
    
    public function expired() {

        $data = array();
        $data['result'] = $this->property_model->fetchAll(getLoginUserId(), NULL, TRUE);
        $data['title'] = "Expired Properties";
        
        $this->render('admin/property/expired', $data);
    }
    
    public function advance() {

        $data = array();
        $data['purpose_list'] = $this->misc_model->getPropertyPurpose();
        $data['type_list'] = $this->misc_model->getPropertyType();
        $data['cities'] = $this->misc_model->getCities(1); // country_id
        $data['area_units'] = $this->misc_model->getAreaUnits();
        $data['construction_status'] = $this->misc_model->getConstructionStatus();
        $data['title'] = "Post New Listing";

        $this->render('admin/property/advance', $data);
    }
    
    public function quick($id = NULL) {
        
        if ($this->input->post('submit') && $id !== NULL) {
            try {
                $result = $this->property_model->update($id);
                if ($result == true) {
                    setNotification('success', 'Record updated successfully');
                    redirect(base_url('admin/property/pending'));
                }
            } catch (Exception $e) {
                setNotification('error', 'Error in updating record');
            }
        } else if ($this->input->post('submit') && $id == NULL) {
            try {
                $PropertyID = $this->property_model->insert();
                $result = $this->property_model->insertContactPerson($PropertyID);
                if($result) {
                    setNotification('success', 'Record added successfully');
                    redirect(base_url('admin/property/pending'));
                }
            } catch (Exception $e) {
                setNotification('error', 'Error in adding record');
            }
        }
        
        $data = array();
        $data['purpose_list'] = $this->misc_model->getPropertyPurpose();
        $type_list = $this->misc_model->getPropertyType();
        foreach ($type_list as $key => $value) {
            # code...
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
        $data['title'] = "Post New Listing";
        
        $this->render('admin/property/quick', $data);
    }
    
}
