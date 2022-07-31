<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Outbox extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Outbox_model');
		$this->load->model('Pembayaran_model');

        if($this->session->userdata('status') != "login" && $this->session->userdata('sebagai') != 'admin'){
            redirect('login/index');
        }
	} 

	function index(){
		$data['outbox'] = $this->Outbox_model->get_all_outbox();
		$data['_view'] = 'outbox/index';
        $this->load->view('layouts/main',$data);
	}
}
