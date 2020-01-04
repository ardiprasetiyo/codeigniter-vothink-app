<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_Controller extends CI_Controller{

	public function __construct(){

		parent::__construct();
		$this->load->helper(['form', 'url']);
		$this->load->library(['form_validation', 'session']);
		$this->load->model('Admin_model');
		$this->load->model('Peserta_model');
		$this->load->model('Kotak_Suara_model');

	}

	// VIEW LOGIN ADMIN
	public function login_admin(){

		// Jika sudah login
		if( $this->session->userdata('u_data') && $this->session->userdata('u_data')['login_status'] == true ){
			echo "Redirect ke Halaman Admin";
			die;
		}

		$this->load->view('admin/login_admin');

	}


	// VIEW LOGIN PESERTA
	public function login_peserta(){

		// Jika sudah login
		if( $this->session->userdata('p_data') && $this->session->userdata('p_data')['login_status'] == true){
			Redirect('tps');
			die;
		}

		$this->load->view('tps/login_peserta');


	}


	// LOGIC LOGIN ADMIN
	public function do_login_admin (){

		$config = [['field' => 'vt-username',
					'label' => 'Username',
					'rules' => 'trim|required'],

				   ['field' => 'vt-password',
				    'label' => 'Password',
					'rules' => 'trim|required']];

		$is_validform = $this->form_validation->set_rules($config)->run();
		if( !$is_validform ){
			$this->session->set_flashdata('err_login', ['message' => validation_errors()]);
			Redirect('login/admin');
			die;
		}

		$fields = ['username' => $this->input->post('vt-username', true),
				   'password' => hash('sha256', $this->input->post('vt-password', true))];
		$result = $this->do_verify_admin($fields);
		if( !$result ){
			$this->session->set_flashdata('err_login', ['message' => 'Username atau Password Salah']);
			Redirect('login/admin');
			die;
		}

		Redirect('admin');

	}

	public function logout_admin(){
		$this->session->unset_userdata('u_data');
		Redirect('login/admin');
	}

	private function do_verify_admin($fields){
		
		$valid_admin = $this->Admin_model->get_admin($fields);
		if( !$valid_admin ){
			return false;
			die;
		}

		$this->session->set_userdata('u_data', ['id_admin' => $valid_admin[0]['id_admin'],
											    'login_status' => true]);

		return true;

	}


	// LOGIC LOGIN PESERTA
	public function do_login_peserta (){

		$config = [['field' => 'id-peserta',
					'label' => 'ID Peserta',
					'rules' => 'trim|required|numeric|max_length[4]']];
		$is_validform = $this->form_validation->set_rules($config)->run();
		if( !$is_validform ){
			$this->session->set_flashdata('err_login', ['message' => validation_errors()]);
			Redirect('tps/login/peserta');
			die;
		}

		$fields = ['kode_peserta' => $this->input->post('id-peserta', true)];
		$result = $this->do_verify_peserta($fields);
		if( !$result ){
			$this->session->set_flashdata('err_login', ['message' => 'ID Peserta tidak ditemukan']);
			Redirect('tps/login/peserta');
			die;
		}

		Redirect('tps/coblos/');

	}

	private function do_verify_peserta($fields){

		$valid_peserta = $this->Peserta_model->get_peserta($fields);
		if( !$valid_peserta ){
			return false;
			die;
		}

		$is_voted = $this->Kotak_Suara_model->get_suara_peserta(['peserta' => $valid_peserta[0]['kode_peserta']]);

		if( $is_voted ){
			$this->session->set_flashdata('err_login', ['message' => 'Peserta sudah memilih']);
			Redirect('tps/login/peserta');
			die;
		}

		$this->session->set_userdata('p_data', ['kode_peserta' => $valid_peserta[0]['kode_peserta'],
												'nama_lengkap' => $valid_peserta[0]['nama_lengkap'],
											    'login_status' => true]);
		return true;

	}

}