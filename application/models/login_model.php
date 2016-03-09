<?php

class Login_model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    public function validate() {

        $email = $this->input->post('email');
        $password = md5($this->input->post('password'));
        if(!empty($email) && !empty($password))
        {
            $this->db->select('user_id, name, email, cell_no, phone_no, address, zipcode, country_id, city_id, location_id, profile_pic, about, listing_quota_id, user_type');
            $this->db->from('user');
            $this->db->where('email', $email);
            $this->db->where('password', ($password));
            $this->db->where('user_status', 1);
            $this->db->where('is_deleted', 0);
            $this->db->limit(1);
            $query = $this->db->get();
            if ($query->num_rows() == 1) {
                $row = $query->row();
                $this->session->set_userdata('USER', $row);
                return true;
            }
            return false;
        } else {
            return false;
        }
    }
    
}