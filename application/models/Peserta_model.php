<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Peserta_model extends CI_Model{

	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function get_peserta($param){

		$this->db->select('*');
		$this->db->from('vt_peserta');
		$this->db->where($param);
		$result = $this->db->get()->result_array();
		return $result;

	}


	public function get_similar_peserta($param){
		$this->db->select('*');
		$this->db->from('vt_peserta');
		$this->db->like($param);
		$result = $this->db->get()->result_array();
		return $result;
	}

	// public function get_all_peserta_join_suara(){
	// 	$this->db->select('*');
	// 	$this->db->from('')
	// }

	public function get_all_peserta(){
		$this->db->select('*');
		$this->db->from('vt_peserta');
		$result = $this->db->get()->result_array();
		return $result;
	}

	public function get_last_kodepeserta(){
		$this->db->select('*');
		$this->db->from('vt_peserta');
		$this->db->order_by('kode_peserta', 'desc');
		$this->db->limit(1);
		$result = $this->db->get()->result_array();
		return $result;
	}

	public function add_peserta($param){
		$result = $this->db->insert('vt_peserta', $param);
		return $result;
	}

}