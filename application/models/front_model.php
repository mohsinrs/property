<?php

class Front_model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function getPropertyDetail($id)
    {
        $this->db->select('p.property_id, p.title, p.description, pp.name AS property_purpose_name, pt.name AS property_type_name, loc.name AS location_name, p.price, p.created_on, p.property_status, p.area, au.name AS area_unit_name, u.name AS user_name, cp.name AS cp_name, cp.email, cp.cell_no, cp.phone_no');
        $this->db->from('property p');
        $this->db->join('property_purpose pp', 'pp.property_purpose_id = p.property_purpose_id');
        $this->db->join('property_type pt', 'pt.property_type_id = p.property_type_id');
        $this->db->join('location loc', 'loc.location_id = p.location_id');
        $this->db->join('area_unit au', 'au.area_unit_id = p.area_unit_id');
        $this->db->join('user u', 'u.user_id = p.created_by');
        $this->db->join('contact_person cp', 'cp.property_id = p.property_id');
        $this->db->where('p.is_deleted', 0);
        $this->db->where('p.property_id', $id);
        
        $query = $this->db->get();
        return $query->row();
    }
    
    function getAgentDetail($id)
    {
        $this->db->select('u.user_id, u.name, u.email, u.cell_no, u.phone_no, u.about, c.name AS city_name');
        $this->db->from('user u');
        $this->db->join('city c', 'c.city_id = u.city_id');
        $this->db->where('u.user_type', 2);
        $this->db->where('u.user_status', 1);
        $this->db->where('u.is_deleted', 0);
        $this->db->where('u.user_id', $id);
        
        $query = $this->db->get();
        return $query->row();
    }
    
    function getAgentProperties($AgentID)
    {
        $this->db->select('p.property_id, p.title, pp.name AS property_purpose_name, pt.name AS property_type_name, loc.name AS location_name, p.price, p.created_on, p.property_status, p.area');
        $this->db->from('property p');
        $this->db->join('property_purpose pp', 'pp.property_purpose_id = p.property_purpose_id');
        $this->db->join('property_type pt', 'pt.property_type_id = p.property_type_id');
        $this->db->join('location loc', 'loc.location_id = p.location_id');
        $this->db->where('property_status', 1);
        $this->db->where('expires_after <=', date("Y-m-d H:i:s"));
        $this->db->where('created_by', $AgentID);
        $this->db->where('is_deleted', 0);
        $query = $this->db->get();
        
        return $query->result();
    }
    
    function addAgentToFavoriteList()
    {
        $data = $this->input->post();

        $this->db->select('*');
        $this->db->from('favorite_agent');
        $this->db->where('agent_id', $data['agent_id']);
        $this->db->where('is_deleted', 0);
        $this->db->where('created_by', getLoginUserId());
        
        $query = $this->db->get();
        $result =  $query->row();
        
        if($result == null) {
            $array = array(
                'agent_id' => $data['agent_id'],
                'created_by' => getLoginUserId(),
            );

            $this->db->insert('favorite_agent', $array);

            return ($this->db->affected_rows() != 1) ? false : true;
        } else {
            $array = array(
                'is_deleted' => 1
            );

            $this->db->where('agent_id', $data['agent_id']);
            $this->db->where('created_by', getLoginUserId());
            $this->db->update('favorite_agent', $array);
            
            return ($this->db->affected_rows() != 1) ? false : true;
        }
    }
    
    function addPropertyToFavoriteList()
    {
        $data = $this->input->post();

        $this->db->select('*');
        $this->db->from('favorite_property');
        $this->db->where('property_id', $data['property_id']);
        $this->db->where('is_deleted', 0);
        $this->db->where('created_by', getLoginUserId());
        
        $query = $this->db->get();
        $result =  $query->row();
        
        if($result == null) {
            $array = array(
                'property_id' => $data['property_id'],
                'created_by' => getLoginUserId(),
            );

            $this->db->insert('favorite_property', $array);

            return ($this->db->affected_rows() != 1) ? false : true;
        } else {
            $array = array(
                'is_deleted' => 1
            );

            $this->db->where('property_id', $data['property_id']);
            $this->db->where('created_by', getLoginUserId());
            $this->db->update('favorite_property', $array);
            
            return ($this->db->affected_rows() != 1) ? false : true;
        }
    }
    
}