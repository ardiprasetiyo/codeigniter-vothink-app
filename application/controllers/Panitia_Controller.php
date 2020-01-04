<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Panitia_Controller extends CI_Controller{

	public function __construct(){

		parent::__construct();
		$this->load->helper(['form', 'url']);
		$this->load->library(['form_validation', 'session']);
		$this->load->model('Peserta_model');

	}

	public function absen_peserta(){
		$this->load->view('panitia/panitia_absen');
	}

	public function search_peserta(){
		$config = [['field' => 'cari-peserta',
					'label' => 'Cari peserta',
					'rules' => 'trim|required']];
		$is_validform = $this->form_validation->set_rules($config)->run();
		if( !$is_validform ){
			$this->session->set_flashdata('err_search', ['message' => validation_errors()]);
			Redirect('panitia/absen');
			die;
		}

		$data_peserta = $this->Peserta_model->get_similar_peserta(['nama_lengkap' => $this->input->post('cari-peserta', true)]);

		if( !$data_peserta ){
			$this->session->set_flashdata('err_search', ['message' => 'Data tidak ditemukan']);
			Redirect('panitia/absen');
			die;
		}

		$this->session->set_userdata('search_result', $data_peserta);
		Redirect('panitia/absen');
	}
}