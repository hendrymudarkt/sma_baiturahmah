<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct(){
        parent::__construct();
        $this->load->model('Siswa_model');
	} 

	function index(){
        $this->load->view('layouts/home');
    }
    
    function daftar(){   
        if(isset($_POST) && count($_POST) > 0){ 
            $config['upload_path']          = 'photo/';
            $config['allowed_types']        = 'jpeg|jpg|png|pdf';
            $config['overwrite']            = TRUE;
            $config['encrypt_name']         = TRUE;
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('photo')) {
                $file = $this->upload->data();
                $photo = $file['file_name'];
                
                $params = array(
                    'nis' => $this->input->post('nis'),
                    'nama' => $this->input->post('nama'),
                    'tmpt_lahir' => $this->input->post('tmpt_lahir'),
                    'tgl_lahir' => date('Y-m-d', strtotime($this->input->post('tgl_lahir'))),
                    'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                    'alamat_sekarang' => $this->input->post('alamat_sekarang'),
                    'alamat_asal' => $this->input->post('alamat_asal'),
                    'no_hp' => $this->input->post('no_hp'),
                    'agama' => $this->input->post('agama'),
                    'nama_ayah' => $this->input->post('nama_ayah'),
                    'pekerjaan_ayah' => $this->input->post('pekerjaan_ayah'),
                    'pendidikan_ayah' => $this->input->post('pendidikan_ayah'),
                    'nama_ibu' => $this->input->post('nama_ibu'),
                    'pekerjaan_ibu' => $this->input->post('pekerjaan_ibu'),
                    'pendidikan_ibu' => $this->input->post('pendidikan_ibu'),
                    'photo' => $photo,
                    'sekolah_asal' => $this->input->post('sekolah_asal'),
                    'nilai' => $this->input->post('nilai'),
                    'password' => $this->encryption->encrypt($this->input->post('nis'))
                );
            }
            else{
                $error = array('error' => $this->upload->display_errors());
                $this->load->view($error);
            }
            
            $siswa_id = $this->Siswa_model->add_siswa($params);
            $this->session->set_flashdata('msg', 'Berhasil');
			redirect('');
        }
	}
}
