<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function get_admin($param){
		$this->db->select('*');
		$this->db->from('vt_admin');
		$this->db->where($param);
		$result = $this->db->get()->result_array();
		return $result;
	}
}