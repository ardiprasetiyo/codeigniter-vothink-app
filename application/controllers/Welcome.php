<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	use PhpOffice\PhpSpreadsheet\Spreadsheet;
	use PhpOffice\PhpSpreadsheet\Reader\Csv;
	use PhpOffice\PhpSpreadsheet\Reader\Xlsx;

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper(['url', 'file']);
		$this->load->database();
	}


	public function get_last_kodekelas(){
		$this->db->select('*');
		$this->db->from('vt_kelas');
		$this->db->order_by('kode_kelas', 'desc');
		$this->db->limit(1);
		$result = $this->db->get()->result_array();
		return $result;
	}

	public function index()
	{
		// $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
		// $spreadsheet = $reader->load(FCPATH . '/data/data_siswa.xlsx');
		// $sheetData = $spreadsheet->getActiveSheet()->toArray();
		// for($i = 1;$i < count($sheetData);$i++)
		// {
		// 	$nama_siswa = $sheetData[$i]['1'];
		// 	$jenis_kelamin = $sheetData[$i]['2'];
		// 	$kelas = $sheetData[$i]['3'];
		// 	$kode_peserta = $sheetData[$i]['4'];
		// 	$this->db->insert('vt_peserta', ['nama_lengkap' => $nama_siswa,
		// 								   'jenis_kelamin' => $jenis_kelamin,
		// 								   'kelas' => $kelas,
		// 								   'kode_peserta' => $kode_peserta]);
		// }
	}
}
