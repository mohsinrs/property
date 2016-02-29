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
    function __construct() {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('misc_model');
    }
    
    public function index() {
        
        if ($this->input->post('submit') && $this->input->post('submit') == 'submit_profile') {
            $result = $this->user_model->updateProfile(getLoginUserId());
            if ($result) {
                setNotification('success', 'Record updated successfully');
                redirect(base_url('admin/profile'));
            } else {
                setNotification('error', 'Error in updating record');
                redirect(base_url('admin/profile'));
            }
        }
        // Change Profile image
        if ($this->input->post('submit') && $this->input->post('submit') == 'submit_profile_pic') {
            try {
                $config['upload_path'] = $_SERVER['DOCUMENT_ROOT'].'/property/public/uploads/user/'.getLoginUserId();
                $config['allowed_types'] = 'gif|jpg|jpeg|png';
                $config['overwrite'] = TRUE;

                if (!file_exists($config['upload_path']) && !is_dir($config['upload_path'])) {
                    mkdir($config['upload_path'], 0777, TRUE);
                }
                
                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                if (!$this->upload->do_upload('profile_pic')) {
                    $error = $this->upload->display_errors();
                    setNotification('danger', 'Error. File not uploaded. ' . $error);
                } else {
                    $result = $this->user_model->updateProfileImage(getLoginUserId());
                    if($result) {
                        setNotification('success', 'Profile image updated successfully');
                        $data = array('upload_data' => $this->upload->data());                        
                    }
                }
                redirect(base_url('user/profile'));
            } catch (Exception $e) {
                setNotification('danger', 'Error. Coudn\'t register. Try later.');
            }
        }
        // Change Password
        if ($this->input->post('submit') && $this->input->post('submit') == 'submit_change_password') {
            try {
                $Verify_Result = $this->misc_model->verify_password(getLoginUserId());
                if(is_object($Verify_Result)) {
                    $result = $this->misc_model->update_password(getLoginUserId());
                    if ($result) {
                        setNotification('success', 'Password updated successfully');
                        redirect(base_url('user/profile'));
                    }                    
                } else {
                    setNotification('danger', 'New & Confirm password does not match.');
                    redirect(base_url('user/profile'));
                }
            } catch (Exception $e) {
                setNotification('danger', 'Error in updating record');
            }
        }
        // Save Roles
        if ($this->input->post('submit') && $this->input->post('submit') == 'submit_user_roles') {
            try {
                $result = $this->user_model->updateUserRoles(getLoginUserId());
                if ($result) {
                    setNotification('success', 'Your user roles sent for approval sucessfully.');
                    redirect(base_url('user/profile'));
                }
            } catch (Exception $e) {
                setNotification('danger', 'Error. Coudn\'t save data. Try later.');
            }
        }
        
        $data = array();
        $data['user'] = $this->user_model->fetch(getLoginUserId());
        $data['image_path'] = "http://" . $_SERVER['SERVER_NAME'].'/property/public/uploads/user/'.$data['user']->user_id.'/'.$data['user']->profile_pic;
        $data['cities'] = $this->misc_model->getCities(1); // country_id
        // Follwoing code will fetch all possible user roles
        $UserRoles = $this->user_model->getUserRoles(getLoginUserId());
        $data['role_list'] = sortedUserRoles($UserRoles);
        $data['title'] = "My Profile";

        $this->render('user/profile/index', $data);
    }

}
