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
    
    function getListingQuota()
    {
        $this->db->select('listing_quota_id, name, quota');
        $this->db->from('listing_quota');
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
    
    function getPropertyPurpose()
    {
        $this->db->select('property_purpose_id, name');
        $this->db->from('property_purpose');
        $query = $this->db->get();
        
        return $query->result();
    }
    
    function getPropertyType()
    {
        $this->db->select('property_type_id, parent_property_type_id, name');
        $this->db->from('property_type');
        $query = $this->db->get();
        
        return $query->result();
    }
    
    function getAreaUnits()
    {
        $this->db->select('area_unit_id, name');
        $this->db->from('area_unit');
        $query = $this->db->get();
        
        return $query->result();
    }
    
    function getConstructionStatus()
    {
        $this->db->select('construction_status_id, name');
        $this->db->from('construction_status');
        $query = $this->db->get();
        
        return $query->result();
    }
    
    function getClients($user_id)
    {
        $this->db->select('client_id, name');
        $this->db->from('client');
        $this->db->where('user_id', $user_id);
        $query = $this->db->get();
        
        return $query->result();
    }
    
    function register()
    {
        $data = $this->input->post();
        if(isset($_FILES) && isset($_FILES['profile_pic'])) {
            $data['profile_pic'] = $_FILES['profile_pic']['name'];
        }

        $array = array(
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => md5($data['password']),
            'cell_no' => $data['cell_no'],
            'phone_no' => $data['phone_no'],
            'city_id' => $data['city_id'],
            'location_id' => $data['location_id'],
            'zipcode' => $data['zipcode'],
            'profile_pic' => $data['profile_pic'],
            'address' => $data['address'],
            'about' => $data['about'],
            'created_on' => date("Y-m-d H:i:s")
        );

        $this->db->insert('user', $array);
        return ($this->db->affected_rows() != 1) ? false : true;
    }

    function update_profile($id)
    {
        $data = $this->input->post();
        $array = array(
            'name' => $data['name'],
            'email' => $data['email'],
            'cell_no' => $data['cell_no'],
            'phone_no' => $data['phone_no'],
            'zipcode' => $data['zipcode'],
            'address' => $data['address'],
            'modified_on' => date("Y-m-d H:i:s"),
            'modified_by' => getLoginUserId()
        );
        if(isset($_FILES) && isset($_FILES['profile_pic'])) {
            $array['profile_pic'] = $_FILES['profile_pic']['name'];
        }

        $this->db->where('user_id', $id);
        $this->db->update('user', $array);
        //return ($this->db->affected_rows() != 1) ? false : true;
        return true;
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

    function verify_password($id)
    {
        $data = $this->input->post();
        if($data['password'] == $data['confirm_password']) {
            $query = $this->db->get_where('user', array('user_id' => $id, 'password' => md5($data['current_password'])), NULL, NULL);
            return $query->row();            
        } else {
            return false;
        }
    }
    
    function update_password($id)
    {
        $data = $this->input->post();
        $array = array(
            'Password' => md5 ($data['password'])
        );

        $this->db->where('user_id', $id);
        $this->db->update('user', $array);

        return true;
    }

    function delete($id)
    {
        $this->db->where('property_id', $id);
        $this->db->delete('property');

        return ($this->db->affected_rows() != 1) ? false : true;
    }
    
}