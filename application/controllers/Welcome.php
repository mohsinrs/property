<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Base_Controller {

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
        $this->load->model('property_model');
        $this->load->model('advertisement_model');
//        $this->load->model('user_model');
        $this->setLayout();
    }
    
    public function index() {
        
        $data = array();
        $data['featured_properties'] = $this->property_model->getFeaturedProperties();
        $data['latest_properties'] = $this->property_model->getLatestProperties();
        $data['recent_news'] = array();
        $data['featured_agents'] = array();
        $data['advertisements'] = $this->advertisement_model->getLatestAdvertisements();
//        var_dump($data['featured_properties']); exit;
//        $data['content'] = $this->load->view('index', $data['result'], TRUE);
//        $this->load->view('layout/main', $data);
//        $this->load->view('welcome_message');
        $this->render('index', $data);
    }

}
