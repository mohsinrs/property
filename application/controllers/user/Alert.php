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
    
    public function index($id = NULL) {
        
        if ($this->input->post('submit') && $id == NULL) {
            $result = $this->alert_model->insert();
            if ($result) {
                setNotification('success', 'Alert created successfully');
                redirect(base_url('user/alert/manage'));
            } else {
                setNotification('error', 'Error in adding alert');
                redirect(base_url('user/alert/manage'));
            }
        } else if ($this->input->post('submit') && $id != NULL) {
            $result = $this->alert_model->update($id);
            if ($result) {
                setNotification('success', 'Alert updated successfully');
                redirect(base_url('user/alert/manage'));
            } else {
                setNotification('error', 'Error in updating alert');
                redirect(base_url('user/alert/manage'));
            }
        }
        
        $data = array();
        if($id !== NULL) {
            $data['result'] = $this->alert_model->getOne($id);
//            var_dump($data); exit;
        }
        
        $type_list = $this->misc_model->getPropertyTypeList();
        $data['type_list'] = sortedPropertyTypes($type_list);
        $data['purpose_list'] = $this->misc_model->getPropertyPurposeList();
        $data['cities'] = $this->misc_model->getCities(1); // country_id
        $data['agents'] = $this->user_model->fetchAll();
        $data['title'] = "Create Alert";

        $this->render('user/alert/index', $data);
    }

    public function manage() {

        $data = array();
        $data['result'] = $this->alert_model->fetchAll(getLoginUserId());
        $data['title'] = "Manage Alert";

        $this->render('user/alert/manage', $data);
    }
    
    // Funtion to delete an alert
    public function delete($AlertID) {
        try {
            $result = $this->alert_model->delete($AlertID);
            if ($result) {
                setNotification('success', 'Record deleted successfully');
                redirect(base_url('user/alert/manage'));
            }
        } catch (Exception $e) {
            setNotification('error', 'Error in deleting record');
            redirect(base_url('user/alert/manage'));
        }
    }

}
