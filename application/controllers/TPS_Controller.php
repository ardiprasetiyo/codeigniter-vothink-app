<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class TPS_Controller extends CI_Controller{

	public function __construct(){

		parent::__construct();
		$this->load->helper(['form', 'url']);
		$this->load->library(['form_validation', 'session']);
		$this->load->model('Admin_model');
		$this->load->model('Peserta_model');
		$this->load->model('Kotak_Suara_model');
		$this->load->model('Kandidat_model');

		if( !$this->session->userdata('p_data') || !$this->session->userdata('p_data')['login_status'] ){
			Redirect('tps/login/peserta');
			die;
		}

	}

	public function coblos(){
		$data_kandidat = $this->Kandidat_model->get_all_kandidat();
		$this->load->view('tps/coblos', ['data_kandidat' => $data_kandidat]);
	}

	public function do_coblos($id_kandidat){
		$param = ['peserta' => $this->session->userdata('p_data')['kode_peserta'],
				  'kandidat_terpilih' => $id_kandidat];
		$result = $this->Kotak_Suara_model->insert_suara_peserta($param);
		if( !$result ){
			$this->session->set_flashdata('err_vote', ['message' => 'Terjadi kesalahan sistem hubungi Admin']);
			die;
		}

		$this->session->unset_userdata('p_data');
		Redirect('tps/login/peserta');

	}

}