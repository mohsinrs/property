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
    public function index() {

        $data = array();
//        $data['result'] = $this->Offer_model->fetchAllRotation();
        $data['title'] = "Add Advertisement";

        $this->render('admin/advertisement/index', $data);
    }

    public function add_new() {
        $this->load->model('advertisement_model');
        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');
        $data = array();
//        $data['result'] = $this->Offer_model->fetchAllRotation();
        $viewdata['title'] = "Add Advertisement";
        $this->form_validation->set_rules('datepicker1', 'Date Picker', 'required');
        if ($this->form_validation->run() == FALSE) {

            $this->render('admin/advertisement/new');
            //$this->form_validation->set_message('Date Picker', 'The %s field can not be the word "test"');
        } else {
            $data['from_date'] = $this->input->post('datepicker1');
            $data['to_date'] = $this->input->post('datepicker1');
            //var_dump($data);
            //die;
//            $array = array(
//                'user_id' => $data['user_id'],
//                'from_date' => $data['from_date'],
//                'to_date' => $data['to_date'],
//                'image_name' => $data['image_name'],
//                'is_deleted' => 0,
//                'created_on' => $data['created_on']
//            );

            $this->advertisement_model->insert($data, 'update');
            $this->render('admin/advertisement/new');
        }
    }

}
