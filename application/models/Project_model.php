<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Project_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function get_product() {
    	$query = $this->db->get('product');
        return $query->result();
    }

    function insert_entry($data) {
        if(count($data) != 0){
            $receiveddata = array(
                    'name' => $data['name'],
                    'description' => $data['description'],
                    'width' => $data['width'],
                    'length' => $data['length'],
                    'height' => $data['height'],
                    'weight' => $data['weight'],
                    'value' => $data['value']
                );
            $this->db->insert('product', $receiveddata);     
            return true;
        }else {
            return false;
        }
        
    }

    function delete_item($id) {

        $this->db->delete('product', array('id' => $id)); 
    }

    function edit_item($id) {
        // $sql = "SELECT * FROM product WHERE id = ?"; 
        $query = $this->db->get_where('product', array('id' => $id));
        return json_encode($query->result());
    }

    function save_item($data) {
         $receiveddata = array(
            'id' => $data['id'],
            'name' => $data['name'],
            'description' => $data['description'],
            'width' => $data['width'],
            'length' => $data['length'],
            'height' => $data['height'],
            'weight' => $data['weight'],
            'value' => $data['value']
        );
        return $this->db->update('product', $receiveddata, array('id' => $data['id']));
    }
}