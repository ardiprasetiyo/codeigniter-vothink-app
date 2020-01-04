<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kotak_Suara_model extends CI_Model{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function get_suara_peserta($param){
		$this->db->select('*');
		$this->db->from('vt_kotak_suara');
		$this->db->where($param);
		$result = $this->db->get()->result_array();
		return $result;
	}

	public function insert_suara_peserta($param){
		$result = $this->db->insert('vt_kotak_suara', $param);
		return $result;
	}
}