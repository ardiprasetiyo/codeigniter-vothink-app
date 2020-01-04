<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Controller extends CI_Controller{

	public function __construct(){

		parent::__construct();
		$this->load->helper(['form', 'url']);
		$this->load->library(['form_validation', 'session']);
		$this->load->model('Admin_model');
		$this->load->model('Peserta_model');
		$this->load->model('Kotak_Suara_model');
		$this->load->model('Kandidat_model');

		if( !$this->session->userdata('u_data') || !$this->session->userdata('u_data')['login_status'] ){
			Redirect('login/admin');
			die;
		}

	}

		public function home(){
			$this->load->view('admin/template/header');
			$this->load->view('admin/home');
			$this->load->view('admin/template/footer');

		}

		public function live_count(){
			$dataSuara = [];
			$dataKandidat = $this->Kandidat_model->get_all_kandidat();
			$jumlah_peserta = count($this->Peserta_model->get_all_peserta());
			$total_suara = 0;
			foreach( $dataKandidat as $kandidat ){
				$jumlah_suara = $this->Kotak_Suara_model->get_suara_peserta(['kandidat_terpilih' => $kandidat['id_kandidat']]);
				$data = ['id_kandidat' => $kandidat['id_kandidat'],
						 'nama_kandidat' => $kandidat['nama_kandidat'],
						 'visi_misi_kandidat' => $kandidat['visi_misi_kandidat'],
						 'foto_kandidat' => $kandidat['foto_kandidat'],
						 'jumlah_suara' => count($jumlah_suara)];

				$total_suara += $data['jumlah_suara'];
				$dataSuara[] = $data;

			}

			$this->load->view('admin/template/header');
			$this->load->view('admin/live_count', ['perolehan_suara' => $dataSuara,
												   'jumlah_peserta' => $jumlah_peserta,
												   'total_suara' => $total_suara]);
			$this->load->view('admin/template/footer');
		}

		// Suspended Features

		// public function peserta_lookup($pages = false){
		// 	$jumlahPeserta = $this->Peserta_model->get_all_peserta();
		// 	$this->load->view('admin/template/header');
		// 	$this->load->view('admin/peserta_lookup');
		// 	$this->load->view('admin/template/footer');
		// }

	
}