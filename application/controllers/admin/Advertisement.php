<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class advertisement extends Base_Controller {

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
//        $this->load->helper(array('form', 'url'));
    }

    public function index() {
        
        $data = array();
        $data['result'] = $this->advertisement_model->fetchAll();
        $data['title'] = "All Advertisement";
        $this->render('admin/advertisement/index', $data);
    }

    public function view($id = NULL) {

        $data = array();
        $data['image_path'] = 'http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image';
        if ($this->input->post('submit') && $id !== NULL) {
            try {
                $result = $this->advertisement_model->update($id);
                if ($result) {
                    $this->do_upload($id);
                    setNotification('success', 'Record updated successfully');
                    redirect(base_url('admin/advertisement'));
                }
            } catch (Exception $e) {
                setNotification('error', 'Error in updating record');
            }
        } else if ($this->input->post('submit') && $id == NULL) {
            try {
                $result = $this->advertisement_model->insert();
                if ($result) {
                    $this->do_upload($result);
                    setNotification('success', 'Record added successfully');
                    redirect(base_url('admin/advertisement'));
                }
            } catch (Exception $e) {
                setNotification('error', 'Error in adding record');
            }
        }
        if (!is_null($id)) {
            $data['result'] = $this->advertisement_model->fetch($id);
            $data['image_path'] = "http://" . $_SERVER['SERVER_NAME'].'/property/public/uploads/advertisement/'.$id.'/'.$data['result']->image_name;
        }
        $data['title'] = ($id == NULL) ? "New Advertisement" : "Edit Advertisement";
        $data['users'] = $this->user_model->fetchAll();
        $this->render('admin/advertisement/view', $data);
    }

    public function delete($id) {
        if (empty($id)) {
            setNotification('notice', 'Record not found');
            redirect(base_url('admin/advertisement'));
        }
        try {
            $this->load->model('advertisement_model');
            $result = $this->advertisement_model->delete($id);
            if ($result == true) {
                setNotification('success', 'Record deleted successfully');
                redirect(base_url('admin/advertisement'));
            }
        } catch (Exception $e) {
            setNotification('error', 'Error in deleting record');
            redirect(base_url('admin/advertisement'));
        }
    }

    private function do_upload($id) {

//        $path = $_SERVER['DOCUMENT_ROOT'].'/property/public/uploads/advertisement';
        $config['upload_path'] = $_SERVER['DOCUMENT_ROOT'].'/property/public/uploads/advertisement/'.$id;
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
        
        if (!$this->upload->do_upload('image_name')) {
            $error = $this->upload->display_errors();
            setNotification('danger', 'Error. File not uploaded.');
            return false;
        }
        return true;
    }

}
