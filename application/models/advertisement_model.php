<?php

class Advertisement_model extends CI_Model {

    function __construct() {
        // Call the Model constructor
        parent::__construct();
    }

    function fetchAll() {
        $this->db->select('advertisement.advertisement_id, user.name, user.email, user.phone_no, advertisement.from_date, advertisement.to_date');
        $this->db->from('advertisement');
        $this->db->where('advertisement.is_deleted', 0);
        $this->db->join('user', 'advertisement.user_id = user.user_id');
        $this->db->order_by('advertisement.advertisement_id', 'ASC');
        $query = $this->db->get();

        return $query->result();
    }

    function fetch($id) {
        $query = $this->db->get_where('advertisement', array('advertisement_id' => $id), NULL, NULL);
        return $query->row();
    }

    function insert() {

        $data = $this->input->post();
        if(isset($_FILES) && isset($_FILES['image_name'])) {
            $data['image_name'] = $_FILES['image_name']['name'];
        }
        $array = array(
            'user_id' => $data['user_id'],
            'from_date' => calendarToDBDate($data['from_date']),
            'to_date' => calendarToDBDate($data['to_date']),
            'image_name' => $data['image_name'],
            'created_on' => date('Y-m-d H:i:s')
        );

        $this->db->insert('advertisement', $array);
        return ($this->db->affected_rows() != 1) ? false : $this->db->insert_id();
    }

    function update($id) {

        $data = $this->input->post();
        if(isset($_FILES) && isset($_FILES['image_name'])) {
            $data['image_name'] = $_FILES['image_name']['name'];
        }
        $array = array(
            'user_id' => $data['user_id'],
            'from_date' => calendarToDBDate($data['from_date']),
            'to_date' => calendarToDBDate($data['to_date']),
            'modified_on' => date('Y-m-d H:i:s')
        );
        if ($data['image_name'] != '') {
            $array['image_name'] = $data['image_name'];
        }

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
