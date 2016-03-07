<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends CI_Controller {

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
        $this->load->model('misc_model');
    }
    
    public function get_locations($city_id) {
        
//        $data = array();
        $locations = $this->misc_model->getLocations($city_id);
        exit(json_encode($locations));
//        $data['content'] = $this->load->view('register', $data, TRUE);
//        $this->load->view('layout/main', $data);
    }
    
    public function featured_property() {
        
//        $data = array();
        $locations = $this->misc_model->addPropertyToFeatured();
        exit(json_encode($locations));
//        $data['content'] = $this->load->view('register', $data, TRUE);
//        $this->load->view('layout/main', $data);
    }

}
