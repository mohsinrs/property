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
    
    // Funtion to approve a property
    // ADMIN ONLY
    public function approve($PropertyID) {
        try {
            $result = $this->property_model->approve($PropertyID);
            if ($result) {
                setNotification('success', 'Record updated successfully');
                redirect(base_url('admin/dashboard'));
            }
        } catch (Exception $e) {
            setNotification('error', 'Error in updating record');
            redirect(base_url('admin/dashboard'));
        }
    }
    
    // Function to reject a property
    // ADMIN ONLY
    public function reject($PropertyID) {
        try {
            $result = $this->property_model->reject($PropertyID);
            if ($result) {
                setNotification('success', 'Record updated successfully');
                redirect(base_url('admin/dashboard'));
            }
        } catch (Exception $e) {
            setNotification('error', 'Error in updating record');
            redirect(base_url('admin/dashboard'));
        }
    }
    
    // Get approved properties from all users
    // ADMIN ONLY
    public function approved() {

        $data = array();
        $data['result'] = $this->property_model->fetchAll(getLoginUserId(), 0);
        $data['title'] = "Approved Properties";

        $this->render('admin/property/pending', $data);
    }
    
    // Get all active properties of User
    public function active() {

        $data = array();
        $data['result'] = $this->property_model->fetchAll(getLoginUserId(), 1); // Approved
        $data['title'] = "Active Properties";
        
        $this->render('admin/property/active', $data);
    }
    
    // Get all pending properties of User
    public function pending() {

        $data = array();
        $data['result'] = $this->property_model->fetchAll(getLoginUserId(), 0); // Pending
        $data['title'] = "Pending Properties";

        $this->render('admin/property/pending', $data);
    }
    
    // Get all rejected properties of User
    public function rejected() {

        $data = array();
        $data['result'] = $this->property_model->fetchAll(getLoginUserId(), 2); // Rejected
        $data['title'] = "Rejected Properties";
        
        $this->render('admin/property/rejected', $data);
    }
    
    // Get all expired properties of User
    public function expired() {

        $data = array();
        $data['result'] = $this->property_model->fetchAll(getLoginUserId(), NULL, TRUE);
        $data['title'] = "Expired Properties";
        
        $this->render('admin/property/expired', $data);
    }
    
    public function advance($id = NULL) {

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
                if ($result) {
                    setNotification('success', 'Record updated successfully');
                    redirect(base_url('admin/property/pending'));
                }
            } catch (Exception $e) {
                setNotification('error', 'Error in updating record');
            }
        } else if ($this->input->post('submit') && $id == NULL) {
            try {
                $PropertyID = $this->property_model->insert();
                $PostData = $this->input->post();
                if(array_key_exists('is_client_property', $PostData) && $PostData['is_new_client'] == 'true') {
                    $this->property_model->insertClient();
                }
                $this->property_model->insertContactPerson($PropertyID);
                if($PropertyID) {
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
//        foreach ($type_list as $value) {
//            if($value->parent_property_type_id == NULL) {
//                $data['type_list'][] = $value;
//                foreach ($type_list as $value2) {
//                    if($value2->parent_property_type_id == $value->property_type_id) {
//                        $data['type_list'][] = $value2;
//                    }
//                }
//            }
//        }
        $data['type_list'] = sortedPropertyTypes($type_list);

        $data['cities'] = $this->misc_model->getCities(1); // country_id
        $data['area_units'] = $this->misc_model->getAreaUnits();
        $data['construction_status'] = $this->misc_model->getConstructionStatus();
        $data['clients'] = $this->misc_model->getClients(getLoginUserId());
        $data['title'] = "Post New Listing";
        
        $this->render('admin/property/quick', $data);
    }
    
    // Funtion to delete a property
    public function delete($PropertyID) {
        try {
            $result = $this->property_model->delete($PropertyID);
            if ($result) {
                setNotification('success', 'Record deleted successfully');
                redirect(base_url('admin/dashboard')); // Pending: Get last state and redirect there...
            }
        } catch (Exception $e) {
            setNotification('error', 'Error in deleting record');
            redirect(base_url('admin/dashboard')); // Pending: Get last state and redirect there...
        }
    }
    
}
