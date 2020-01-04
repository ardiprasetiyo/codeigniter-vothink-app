<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Peserta_Controller extends CI_Controller{

	public function __construct(){

		parent::__construct();
		$this->load->helper(['form', 'url']);
		$this->load->library(['form_validation', 'session']);
		$this->load->model('Admin_model');
		$this->load->model('Peserta_model');

	}

	public function do_add_peserta(){

		// $config = [['field' => 'nama-peserta',
		// 			'label' => 'Nama Peserta',
		// 			'rules' => 'trim|required|max_length[100]'],

		// 		   ['field' => 'jenis-kelamin',
		// 			'label' => 'Jenis Kelamin',
		// 			'rules' => 'trim|required|alpha'],

		// 		   ['field' => 'kelas',
		// 			'label' => 'Kelas',
		// 			'rules' => 'trim|required|numeric']];

		// $is_validform = $this->form_validation->set_rules($config)->run();
		// if( !$is_validform ){
		// 	echo "false" . validation_errors(); // Action Nanti Diganti
		// 	die;
		// }

		// // Generate Kode Peserta
		// $kode_peserta = $this->Peserta_model->get_last_kodepeserta();
		// if( !$kode_peserta ){
		// 	$kode_peserta = 1001;
		// } else {
		// 	$kode_peserta = $kode_peserta[0]['kode_peserta'] + 1;
		// }

		// $fields = ['nama_lengkap' => $this->input->post('nama-peserta', true),
		// 		   'jenis_kelamin' => $this->input->post('jenis-kelamin', true),
		// 		   'kelas' => $this->input->post('kelas', true),
		// 		   'kode_peserta' => $kode_peserta]; //Contoh Nanti Diganti
		// $result = $this->Peserta_model->add_peserta($fields);
		// if( !$result ){
		// 	echo "false akun tidak ditemukan"; // Action Nanti Diganti
		// }

		// echo "true";

	}


}