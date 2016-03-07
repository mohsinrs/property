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
    }
    
    public function index() {

        $UserID = getLoginUserId();
        if ($this->input->post('submit')) {
            $result = $this->misc_model->update_profile($UserID);
            if ($result) {
                $this->do_upload($UserID);
                setNotification('success', 'Record updated successfully');
                redirect(base_url('admin/profile'));
            } else {
                setNotification('error', 'Error in updating record');
                redirect(base_url('admin/profile'));
            }
        }
        
        $data = array();
//        $data['image_path'] = 'http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image';
        $data['result'] = $this->user_model->fetch($UserID);
        $data['image_path'] = "http://" . $_SERVER['SERVER_NAME'].'/property/public/uploads/user/'.$UserID.'/'.$data['result']->profile_pic;

        $data['title'] = "My Profile";
        
        $this->render('admin/profile/index', $data);
    }
    
    public function change_password() {

        if ($this->input->post('submit')) {
            try {
                $Verify_Result = $this->misc_model->verify_password(getLoginUserId());
                if(is_object($Verify_Result)) {
                    $result = $this->misc_model->update_password(getLoginUserId());
                    if ($result) {
                        setNotification('success', 'Record updated successfully');
                        redirect(base_url('admin/profile/change_password'));
                    }                    
                } else {
                    setNotification('danger', 'New & Confirm password does not match.');
                    redirect(base_url('admin/profile/change_password'));
                }
            } catch (Exception $e) {
                setNotification('danger', 'Error in updating record');
            }
        }        
        $data = array();
        $data['title'] = "Change Password";
        
        $this->render('admin/profile/change_password', $data);
    }
    
     public function user_profile() {

        $data = array();
//        $data['result'] = $this->Offer_model->fetchAllRotation();
        $data['title'] = "User Profile";
        
        $this->render('admin/profile/user_profile', $data);
    }

    private function do_upload($id) {

        $config['upload_path'] = $_SERVER['DOCUMENT_ROOT'].'/property/public/uploads/user/'.$id;
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
//        $config['max_size'] = 100;
//        $config['max_width'] = 1024;
//        $config['max_height'] = 768;
        $config['overwrite'] = TRUE;

        if (!file_exists($config['upload_path']) && !is_dir($config['upload_path'])) {
            mkdir($config['upload_path'], 0777, TRUE);
        } 

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        
        if (!$this->upload->do_upload('profile_pic')) {
            $error = $this->upload->display_errors();
            var_dump($error); exit;
            setNotification('danger', 'Error. File not uploaded.');
            return false;
        }
        return true;
    }
}
