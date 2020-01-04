<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kandidat_model extends CI_Model{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function get_all_kandidat(){
		$this->db->select('*');
		$this->db->from('vt_kandidat');
		$result = $this->db->get()->result_array();
		return $result;
	}
}