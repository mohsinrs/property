<?php

class Misc_model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    function getCountries()
    {
        $this->db->select('country_id, name');
        $this->db->from('country');
        $query = $this->db->get();
        
        return $query->result();
    }
    
    function getCities($id = 1) // By default fetch Cities of Pakistan
    {
        $this->db->select('city_id, country_id, name');
        $this->db->from('city');
        $this->db->where('country_id', $id);
        $query = $this->db->get();
        
        return $query->result();
    }
    
    function getLocations($id = 1) // By default fetch Location of Lahore
    {
        $this->db->select('location_id, city_id, name');
        $this->db->from('location');
        $this->db->where('city_id', $id);
        $query = $this->db->get();
        
        return $query->result();
    }
    
    function register()
    {
        $data = $this->input->post();
        $array = array(
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => $data['password'],
            'cell_no' => $data['cell_no'],
            'phone_no' => $data['phone_no'],
            'city_id' => $data['city_id'],
            'location_id' => $data['location_id'],
            'zipcode' => $data['zipcode'],
            'profile_pic' => $data['profile_pic'],
            'address' => $data['address'],
            'about' => $data['about']
        );

        $this->db->insert('user', $array);
        return ($this->db->affected_rows() != 1) ? false : true;
    }

    function getOne($id)
    {
        $query = $this->db->get_where('property', array('property_id' => $id), NULL, NULL);
        return $query->result();
    }

    function insert()
    {
        $data = $this->input->post();
        $array = array(
            'property_purpose_id' => $data['property_purpose_id'],
            'property_type_id' => $data['property_type_id'],
            'city_id' => $data['city_id'],
            'location_id' => $data['location_id'],
            'title' => $data['title'],
            'description' => $data['description'],
            'price' => $data['price'],
            'area' => $data['area'],
            'area_unit_id' => $data['area_unit_id']
        );

        $this->db->insert('property', $array);
        return ($this->db->affected_rows() != 1) ? false : true;
    }
    
    function update($id)
    {
        $data = $this->input->post();
        $array = array(
            'property_purpose_id' => $data['property_purpose_id'],
            'property_type_id' => $data['property_type_id'],
            'city_id' => $data['city_id'],
            'location_id' => $data['location_id'],
            'title' => $data['title'],
            'description' => $data['description'],
            'price' => $data['price'],
            'area' => $data['area'],
            'area_unit_id' => $data['area_unit_id']
        );

        $this->db->where('property_id', $id);
        $this->db->update('property', $array);
        //return ($this->db->affected_rows() != 1) ? false : true;
        return true;
    }
    
//    function confirm($id, $pass)
//    {
//        $array = array(
//            'ConfirmationSent' => 1 ,
//            'Password' => md5 ($pass)
//        );
//
//        $this->db->where('property_id', $id);
//        $this->db->update('property', $array);
//
//        return true;
//    }
    
    function change_password($id, $pass)
    {
        $array = array(
            'ConfirmationSent' => 1 ,
            'Password' => md5 ($pass)
        );

        $this->db->where('property_id', $id);
        $this->db->update('property', $array);

        return true;
    }

    function delete($id)
    {
        $this->db->where('property_id', $id);
        $this->db->delete('property');

        return ($this->db->affected_rows() != 1) ? false : true;
    }
    
}