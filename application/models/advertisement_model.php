<?php

class Advertisement_model extends CI_Model {

    function __construct() {
        // Call the Model constructor
        parent::__construct();
    }

    function fetchAll() {
        $this->db->select('advertisement.advertisement_id, user.name, user.email, user.phone_no, advertisement.	from_date, advertisement.to_date');
        $this->db->from('advertisement');
        $this->db->where('is_deleted', 0);
        $this->db->join('user', 'advertisement.user_id = user.user_id');
        $query = $this->db->get();

        return $query->result();
    }

    function getOne($id) {
        $query = $this->db->get_where('advertisement', array('advertisement_id' => $id), NULL, NULL);
        return $query->result();
    }

    function insert() {
        if ($type == 'new') {
            $this->db->insert('advertisement', $array);
        } else {
            $this->db->update('advertisement', $array);
        }
        return ($this->db->affected_rows() != 1) ? false : true;
    }

    function update($id) {
        $data = $this->input->post();
        $array = array(
            'user_id' => $data['user_id'],
            'from_date' => $data['from_date'],
            'to_date' => $data['to_date'],
            'image_name' => $data['image_name'],
            'is_deleted' => 0,
            'modified_on' => $data['modified_on']
        );

        $this->db->where('advertisement_id', $id);
        $this->db->update('advertisement', $array);
        //return ($this->db->affected_rows() != 1) ? false : true;
        return true;
    }

    function delete($id) {
        $array = array(
            'is_deleted' => 1
        );

        $this->db->where('advertisement_id', $id);
        $this->db->update('advertisement', $array);

        return ($this->db->affected_rows() != 1) ? false : true;
    }

}
