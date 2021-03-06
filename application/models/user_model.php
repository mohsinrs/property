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

    function fetch($id)
    {
        $query = $this->db->get_where('user', array('user_id' => $id), NULL, NULL);
        return $query->row();
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
            'city_id' => $data['city_id'],
            'location_id' => $data['location_id'],
            'listing_quota_id' => $data['listing_quota_id'],
            'zipcode' => $data['zipcode'],
            'address' => $data['address'],
            'about' => $data['about'],
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
    
    function getUserRoles()
    {
        $this->db->select('role_id, parent_role_id, name');
        $this->db->from('role');
//        $this->db->select('r.role_id, r.parent_role_id, r.name, u.user_id');
//        $this->db->from('role r');
//        $this->db->join('user_role u', 'u.role_id = r.role_id', 'left');
        $query = $this->db->get();
        
        return $query->result();
    }
    
    function getAgentUserRoles($UserID)
    {
        $this->db->select('user_role_id, role_id, user_id');
        $this->db->from('user_role');
        $this->db->where('user_id', $UserID);
        $this->db->where('is_deleted', 0);
        $query = $this->db->get();
        
        return $query->result();
    }
    
    function updateUserRoles($id)
    {
        // DELETE all roles which already exist
        $array = array(
            'is_deleted' => 1
        );
        
        $this->db->where('user_id', $id);
        $this->db->update('user_role', $array);
        
        // INSERT new roles
        $data = $this->input->post('user_roles');
        foreach($data as $RoleID) {
            $array = array(
                'role_id' => $RoleID,
                'user_id' => $id
            );
            $this->db->insert('user_role', $array);        
        }

        return ($this->db->affected_rows() != 1) ? false : true;
    }
    
    function updateProfile($id)
    {
        $data = $this->input->post();
        $array = array(
            'name' => $data['name'],
            'email' => $data['email'],
            'cell_no' => $data['cell_no'],
            'phone_no' => $data['phone_no'],
            'city_id' => $data['city_id'],
            'location_id' => $data['location_id'],
            'zipcode' => $data['zipcode'],
            'address' => $data['address'],
            'about' => $data['about'],
            'modified_on' => date("Y-m-d H:i:s"),
            'modified_by' => getLoginUserId()
        );

        $this->db->where('user_id', $id);
        $this->db->update('user', $array);
        //return ($this->db->affected_rows() != 1) ? false : true;
        return true;
    }
    
    function updateProfileImage($id)
    {
        if(isset($_FILES) && isset($_FILES['profile_pic'])) {
            $array['profile_pic'] = $_FILES['profile_pic']['name'];
        }

        $this->db->where('user_id', $id);
        $this->db->update('user', $array);

        return ($this->db->affected_rows() != 1) ? false : true;
    }

}