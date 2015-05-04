<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Example_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function get() {
    	$query = $this->db->get('videos');
        return $query->result();
    }
    function update(){
        $query = $this->db->get_where('videos', array('id' => $id));
        return json_encode($query->result());
    }
}