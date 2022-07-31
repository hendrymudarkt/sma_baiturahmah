<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Siswa_model');
		$this->load->model('Pembayaran_model');

        if($this->session->userdata('status') != "login" && $this->session->userdata('sebagai') != 'admin'){
            redirect('login/index');
        }
	} 

	function pendaftaran(){
		$data['siswa'] = $this->Siswa_model->get_all_siswa();
		$data['_view'] = 'laporan/pendaftaran';
        $this->load->view('layouts/main2',$data);
	}
	
	function siswa(){
		$data['siswa'] = $this->Siswa_model->get_all_siswa_diterima();
		$data['_view'] = 'laporan/siswa';
        $this->load->view('layouts/main2',$data);
	}
	
	function pembayaran(){
		$data['pembayaran'] = $this->Pembayaran_model->get_all_pembayaran();
        $data['_view'] = 'laporan/pembayaran';
        $this->load->view('layouts/main2',$data);
	}
}
