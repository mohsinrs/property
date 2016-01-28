<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class property extends Base_Controller {

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
    public function add_new_advance() {

        $data = array();
//        $data['result'] = $this->Offer_model->fetchAllRotation();
        $data['title'] = "Post New Listing";

        $this->render('user/property/add_new_advance', $data);
    }

    public function active() {

        $data = array();
//        $data['result'] = $this->Offer_model->fetchAllRotation();
        $data['title'] = "Expired Listing";

        $this->render('user/property/active', $data);
    }

    public function for_approval() {

        $data = array();
//        $data['result'] = $this->Offer_model->fetchAllRotation();
        $data['title'] = "Expired Listing";

        $this->render('user/property/for_approval', $data);
    }

    public function not_approved() {

        $data = array();
//        $data['result'] = $this->Offer_model->fetchAllRotation();
        $data['title'] = "Expired Listing";

        $this->render('user/property/not_approved', $data);
    }

    public function expired() {

        $data = array();
//        $data['result'] = $this->Offer_model->fetchAllRotation();
        $data['title'] = "Expired Listing";

        $this->render('user/property/expired', $data);
    }

}
