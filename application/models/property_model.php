<?php

class Property_model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function dashboardProperties()
    {
        $this->db->select('p.property_id, pp.name AS property_purpose_name, pt.name AS property_type_name, loc.name AS location_name, p.price, p.created_on, p.property_status, p.area, au.name AS area_unit_name, u.name AS user_name');
        $this->db->from('property p');
        $this->db->join('property_purpose pp', 'pp.property_purpose_id = p.property_purpose_id');
        $this->db->join('property_type pt', 'pt.property_type_id = p.property_type_id');
        $this->db->join('location loc', 'loc.location_id = p.location_id');
        $this->db->join('area_unit au', 'au.area_unit_id = p.area_unit_id');
        $this->db->join('user u', 'u.user_id = p.created_by');
        $this->db->where('property_status', 0); // Pending properties
        $this->db->where('p.is_deleted', 0);
        
        $query = $this->db->get();
        return $query->result();
    }

    function fetchAll($UserID, $property_status = NULL, $is_expired = FALSE)
    {
//        $this->db->select('*');
        $this->db->select('p.property_id, pp.name AS property_purpose_name, pt.name AS property_type_name, loc.name AS location_name, p.price, p.created_on, p.property_status, p.area');
        $this->db->from('property p');
        $this->db->join('property_purpose pp', 'pp.property_purpose_id = p.property_purpose_id');
        $this->db->join('property_type pt', 'pt.property_type_id = p.property_type_id');
        $this->db->join('location loc', 'loc.location_id = p.location_id');
        if($property_status !== NULL)
            $this->db->where('property_status', $property_status);
        if($is_expired === FALSE)
            $this->db->where('expires_after <=', date("Y-m-d H:i:s"));
        else
            $this->db->where('expires_after >', date("Y-m-d H:i:s"));
        $this->db->where('created_by', $UserID);
        $this->db->where('is_deleted', 0);
        $query = $this->db->get();
        
        return $query->result();
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
            'area_unit_id' => $data['area_unit_id'],
            'expires_after' => date("Y-m-d H:i:s"), // Pending: add one month to current date as automatic date...
//            'construction_status_id' => NULL, // Added in DB default value
//            'property_status' => $data['property_status'] // Property Status will automatically saved as Pending (0)
            'created_on' => date("Y-m-d H:i:s"),
            'created_by' => getLoginUserId()
        );
        if(array_key_exists('is_client_property', $data) && $data['is_new_client'] == 'false') {
            $array['client_id'] = $data['client_id'];
        }

        $this->db->insert('property', $array);
        return ($this->db->affected_rows() != 1) ? NULL : $this->db->insert_id();
    }
    
    function insertClient()
    {
        $data = $this->input->post();
        $array = array(
            'user_id' => getLoginUserId(),
            'name' => $data['client_name'],
            'phone' => $data['client_phone'],
            'cell' => $data['client_cell'],
            'fax' => $data['client_fax'],
            'email' => $data['client_email'],
            'address' => $data['client_address'],
            'zipcode' => $data['client_zipcode'],
            'type' => $data['client_type'],
            'rating' => $data['client_rating'],
            'future_opportunity' => array_key_exists('future_opportunity', $data) ? 1 : 0,
            'int_opportunity' => array_key_exists('int_opportunity', $data) ? 1 : 0,
            'local_opportunity' => array_key_exists('local_opportunity', $data) ? 1 : 0,
            'created_on' => date("Y-m-d H:i:s"),
        );

        $this->db->insert('contact_person', $array);
        return ($this->db->affected_rows() != 1) ? false : true;
    }
    
    function insertContactPerson($property_id)
    {
        $data = $this->input->post();
        $array = array(
            'property_id' => $property_id,
            'name' => $data['cp_name'],
            'cell_no' => $data['cp_cell_no'],
            'phone_no' => $data['cp_phone_no'],
            'email' => $data['cp_email'],
            'created_on' => date("Y-m-d H:i:s"),
            'created_by' => getLoginUserId()
        );

        $this->db->insert('contact_person', $array);
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

//    function delete($id)
//    {
//        $this->db->where('property_id', $id);
//        $this->db->delete('property');
//
//        return ($this->db->affected_rows() != 1) ? false : true;
//    }
    
    function approve($id)
    {
        $array = array(
            'property_status' => 1, // Approved
            'modified_on' => date("Y-m-d H:i:s"),
            'modified_by' => getLoginUserId()
        );

        $this->db->where('property_id', $id);
        $this->db->update('property', $array);
        
        return ($this->db->affected_rows() != 1) ? false : true;
    }
    
    function reject($id)
    {
        $array = array(
            'property_status' => 2, // Rejected
            'modified_on' => date("Y-m-d H:i:s"),
            'modified_by' => getLoginUserId()
        );

        $this->db->where('property_id', $id);
        $this->db->update('property', $array);
        
        return ($this->db->affected_rows() != 1) ? false : true;
    }
    
    function delete($id)
    {
        $array = array(
            'is_deleted' => 1, // Rejected
            'modified_on' => date("Y-m-d H:i:s"),
            'modified_by' => getLoginUserId()
        );

        $this->db->where('property_id', $id);
        $this->db->update('property', $array);
        
        return ($this->db->affected_rows() != 1) ? false : true;
    }
    
}