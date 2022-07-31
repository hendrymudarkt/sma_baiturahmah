<?php
class Login extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Login_model');

		$this->load->library('encryption');
	}

	function index()
	{
		$this->load->view('login');
	}

	function aksi_login()
	{
		$username = $this->security->xss_clean($this->input->post('username'));
		$password = $this->security->xss_clean($this->input->post('password'));
		$level = $this->security->xss_clean($this->input->post('level'));

		$data = $this->Login_model->cek_login($username);
		$data2 = $this->Login_model->cek_login_siswa($username);
		$passb = $this->encryption->decrypt($data['password']);
		$passc = $this->encryption->decrypt($data2['password']);
		if ($level == 1) {
			if ($password == $passc){
				$data_session = array(
					'username' => $username,
					'status' => "login",
					'sebagai' => "siswa",
					'nama' => $data2['nama'],
					'nis' => $data2['nis']
				);
				$this->session->set_userdata($data_session);
				redirect('dashboard');
			} else {
				$this->session->set_flashdata('msg', 'Gagal');
				redirect(base_url(''));
			}
		} else {
			if ($password == $passb){
				$data_session = array(
					'username' => $username,
					'status' => "login",
					'sebagai' => "admin",
					'nama' => $data['nama'],
					'id' => $data['id']
				);
				$this->session->set_userdata($data_session);
				redirect('dashboard');
			} else {
				$this->session->set_flashdata('msg', 'Gagal');
				redirect(base_url(''));
			}
		}
	}

	function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url(''));
	}
}
