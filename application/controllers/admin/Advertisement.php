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
        $this->load->helper(array('form', 'url'));
    }

    public function index() {

        $this->load->model('advertisement_model');
        $data = array();
        $data['result'] = $this->advertisement_model->fetchAll();
        $data['title'] = "All Advertisement";
        $this->render('admin/advertisement/index', $data);
    }

    public function view($id = NULL) {

        $data = array();
        $this->load->model('advertisement_model');

        if ($this->input->post('submit') && $id !== NULL) {
            try {
                $result = $this->advertisement_model->update($id);
                if ($result == true) {
                    setNotification('success', 'Record updated successfully');
                    redirect(base_url('admin/advertisement'));
                }
            } catch (Exception $e) {
                setNotification('error', 'Error in updating record');
            }
        } else if ($this->input->post('submit') && $id == NULL) {
            try {
                $result = $this->advertisement_model->insert();
                if ($result == true) {
                    setNotification('success', 'Record added successfully');
                    redirect(base_url('admin/advertisement'));
                }
            } catch (Exception $e) {
                setNotification('error', 'Error in adding record');
            }
        }

        if (!is_null($id)) {
            $result = $this->advertisement_model->fetch($id);
            if (isset($result[0])) {
                $data['result'] = $result[0];
            }
        }
        $data['title'] = ($id == NULL) ? "New Advertisement" : "Edit Advertisement";
        $this->render('admin/advertisement/view');
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

    function do_upload() {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '100';
        $config['max_width'] = '1024';
        $config['max_height'] = '768';

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload()) {
            $error = array('error' => $this->upload->display_errors());

            $this->load->view('view', $error);
        } else {
            $data = array('upload_data' => $this->upload->data());

            $this->load->view('index', $data);
        }
    }

}
