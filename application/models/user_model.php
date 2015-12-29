<?php

class User_model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    function fetchAll($type = 1) // By defualt fetch Approved Users
    {
        $this->db->select('user_id, name, email, phone_no, user_status, created_on');
        $this->db->from('user');
        $this->db->where('is_deleted', 0);
        $this->db->where('user_status', $type);
        $this->db->where('user_type', 2);
        $query = $this->db->get();
        
        return $query->result();
    }

    function getOne($id)
    {
        $query = $this->db->get_where('user', array('user_id' => $id), NULL, NULL);
        return $query->result();
    }

    function insert()
    {
        $data = $this->input->post();
        $array = array(
            'name' => $data['name'],
            'email' => $data['email'],
            'cell_no' => $data['cell_no'],
            'phone_no' => $data['phone_no'],
            'address' => $data['address'],
            'zipcode' => $data['zipcode'],
            'country_id' => $data['country_id'],
            'city_id' => $data['city_id'],
            'location_id' => $data['location_id'],
            'listing_quota_id' => $data['listing_quota_id']
        );

        $this->db->insert('user', $array);
        
        return ($this->db->affected_rows() != 1) ? false : true;
    }
    
    function update($id)
    {
        $data = $this->input->post();
        $array = array(
            'name' => $data['name'],
            'email' => $data['email'],
            'cell_no' => $data['cell_no'],
            'phone_no' => $data['phone_no'],
            'address' => $data['address'],
            'zipcode' => $data['zipcode'],
            'country_id' => $data['country_id'],
            'city_id' => $data['city_id'],
            'location_id' => $data['location_id'],
            'listing_quota_id' => $data['listing_quota_id']
        );

        $this->db->where('user_id', $id);
        $this->db->update('user', $array);
        //return ($this->db->affected_rows() != 1) ? false : true;
        return true;
    }
    
    function updateStatus($id, $status)
    {
        $array = array(
            'user_status' => $status
        );

        $this->db->where('user_id', $id);
        $this->db->update('user', $array);

        return ($this->db->affected_rows() != 1) ? false : true;
    }

    function delete($id)
    {
        $array = array(
            'is_deleted' => 1
        );
        
        $this->db->where('user_id', $id);
        $this->db->update('user', $array);

        return ($this->db->affected_rows() != 1) ? false : true;
    }
    
}