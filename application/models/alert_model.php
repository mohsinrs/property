<?php

class Alert_model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    function fetchAll($user_id)
    {
        $this->db->select('client_id, name');
        $this->db->from('alert');
        $this->db->where('created_by', $user_id);
        $query = $this->db->get();
        
        return $query->result();
    }

    function getOne($id)
    {
        $query = $this->db->get_where('alert', array('alert_id' => $id), NULL, NULL);
        return $query->row();
    }

    function insert()
    {
        $data = $this->input->post();
        $array = array(
            'alert_type' => $data['alert_type'],
            'property_type_id' => $data['property_type_id'],
            'property_purpose_id' => $data['property_purpose_id'],
            'price_range' => $data['price_range'],
            'beds' => $data['beds'],
            'baths' => $data['baths'],
            'city_id' => $data['city_id'],
            'location_id' => $data['location_id'],
            'keyword' => $data['keyword'],
            'covered_area' => $data['covered_area'],
            'agent_id' => $data['agent_id'],
            'created_on' => date("Y-m-d H:i:s"),
            'created_by' => getLoginUserId()
        );

        $this->db->insert('alert', $array);
        return ($this->db->affected_rows() != 1) ? false : true;
    }
    
    function update($id)
    {
        $data = $this->input->post();
        $array = array(
            'alert_type' => $data['alert_type'],
            'property_type_id' => $data['property_type_id'],
            'property_purpose_id' => $data['property_purpose_id'],
            'price_range' => $data['price_range'],
            'beds' => $data['beds'],
            'baths' => $data['baths'],
            'city_id' => $data['city_id'],
            'location_id' => $data['location_id'],
            'keyword' => $data['keyword'],
            'covered_area' => $data['covered_area'],
            'agent_id' => $data['agent_id'],
            'modified_on' => date("Y-m-d H:i:s"),
            'modified_by' => getLoginUserId()
        );

        $this->db->where('alert_id', $id);
        $this->db->update('alert', $array);
        //return ($this->db->affected_rows() != 1) ? false : true;
        return true;
    }

    function delete($id)
    {
        $array = array(
            'is_deleted' => 1
        );

        $this->db->where('alert_id', $id);
        $this->db->update('alert', $array);

        return ($this->db->affected_rows() != 1) ? false : true;
    }
    
}