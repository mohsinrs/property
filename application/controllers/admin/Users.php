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
    function __construct() {
        parent::__construct();
        $this->load->model('user_model');
    }
    
    public function roles() {

        $data = array();
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
    
    public function update_status($user_id, $status) {

        $result = $this->user_model->updateStatus($user_id, $status);
        if ($result) {
            setNotification('success', 'User status updated successfully');
            redirect(base_url('admin/profile'));
        } else {
            setNotification('error', 'Error in updating record');
            redirect(base_url('admin/profile'));
        }        
    }
    
    public function delete($user_id) {

        $result = $this->user_model->delete($user_id);
        if ($result) {
            setNotification('success', 'User deleted successfully');
            redirect(base_url('admin/profile'));
        } else {
            setNotification('error', 'Error in deleting record');
            redirect(base_url('admin/profile'));
        }        
    }
    
    public function profile($user_id) {

        if ($this->input->post('submit')) {
//            var_dump($_FILES); exit;  
            $result = $this->user_model->update($user_id);
            if ($result) {
                setNotification('success', 'User updated successfully');
                redirect(base_url('admin/profile'));
            } else {
                setNotification('error', 'Error in updating record');
                redirect(base_url('admin/profile'));
            }
        }
        $this->load->model('misc_model');
        $this->load->model('property_model');
        $data = array();
        $result = $this->user_model->fetch($user_id);
        if(isset($result)) {
            $data['result'] = $result[0];
        }
        $data['properties'] = $this->property_model->fetchAll($user_id);
        $data['cities'] = $this->misc_model->getCities(1); // country_id
        $data['locations'] = $this->misc_model->getLocations($data['result']->city_id);
        $data['title'] = "User Profile";

        $this->render('admin/users/profile', $data);
    }

}
