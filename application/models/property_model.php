<?php

class Property_model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    function fetchAll($id)
    {
        $this->db->select('p.property_id, pp.name AS property_purpose_name, pt.name AS property_type_name, loc.name AS location_name, p.price, p.created_on, p.property_status');
        $this->db->from('property p');
        $this->db->join('property_purpose pp', 'pp.property_purpose_id = p.property_type_id');
        $this->db->join('property_type pt', 'pt.property_type_id = p.property_type_id');
        $this->db->join('location loc', 'loc.location_id = p.location_id');
        $this->db->where('created_by', $id);
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

    function delete($id)
    {
        $this->db->where('property_id', $id);
        $this->db->delete('property');

        return ($this->db->affected_rows() != 1) ? false : true;
    }
    
}