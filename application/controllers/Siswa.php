<?php
class Siswa extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Siswa_model');
        $this->load->model('Outbox_model');
        if($this->session->userdata('status') != "login"){
            redirect('login/index');
        }
	}

    function index(){
        $data['siswa'] = $this->Siswa_model->get_all_siswa();
        $data['_view'] = 'siswa/index';
        $this->load->view('layouts/main',$data);
    }
    
    function terima(){
        $data['siswa'] = $this->Siswa_model->get_all_siswa_diterima();
        $data['_view'] = 'diterima/index';
        $this->load->view('layouts/main',$data);
    }

    function add(){   
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
			redirect('siswa');
        }
        else{            
            $data['_view'] = 'siswa/add';
            $this->load->view('layouts/main',$data);
        }
    }

	function edit($nis){
        $data['siswa'] = $this->Siswa_model->get_siswa($nis);

        if(isset($data['siswa']['nis'])){
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
                    );
                }
                else{
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
                        'sekolah_asal' => $this->input->post('sekolah_asal'),
                        'nilai' => $this->input->post('nilai'),
                    );
                }
                
                $siswa_id = $this->Siswa_model->update_siswa($nis,$params);
                redirect('siswa');
            }
            else{
                $data['_view'] = 'siswa/edit';
                $this->load->view('layouts/main',$data);
            }
        }
    }

    function remove($nis){
        $siswa = $this->Siswa_model->get_siswa($nis);

        if(isset($siswa['nis'])){
            $path = './photo/';
            unlink($path.$siswa['photo']);

            $this->Siswa_model->delete_siswa($nis);
            redirect('siswa/index');
        }
    }

    function view($nis){
        $data['siswa'] = $this->Siswa_model->get_siswa($nis);
        $data['_view'] = 'siswa/view';
        $this->load->view('layouts/main',$data);
    }
    
    function view_diterima($nis){
        $data['siswa'] = $this->Siswa_model->get_siswa($nis);
        $data['_view'] = 'diterima/view';
        $this->load->view('layouts/main',$data);
    }

    function diterima(){   
        $qry = $this->db->query("SELECT max(nomor_antrian) as kodeTerbesar FROM status WHERE keterangan = 'Diterima'")->row_array();
        $urutan = (int) substr($qry['kodeTerbesar'], 3, 3);
        $urutan++;
        $huruf = "AB-";
        $kodeAntri = $huruf . sprintf("%03s", $urutan);

        if(isset($_POST) && count($_POST) > 0){   
            $params = array(
                'nis' => $this->input->post('nis'),
                'tanggal' => date('Y-m-d'),
                'keterangan' => "Diterima",
                'nomor_antrian' => $kodeAntri
            );
            $reply = "Selamat Anda telah diterima di SMAN Baiturahmah, Nomor Antrian anda adalah ".$kodeAntri." Silahkan melakukan pembayaran dan pendaftaran ulang, Terimakasih";

            $param = array(
                'DestinationNumber' => $this->input->post('no_hp'),
                'TextDecoded' => $reply
            );
            
            $outbox_id = $this->Outbox_model->add_outbox($param);
            $siswa_id = $this->Siswa_model->status_siswa($params);
			redirect('siswa');
        }
	}
    
    function ditolak(){   
        if(isset($_POST) && count($_POST) > 0){   
            $params = array(
                'nis' => $this->input->post('nis'),
                'tanggal' => date('Y-m-d'),
                'keterangan' => "Ditolak"
            );

            $reply = "Mohon maaf anda tidak diterima di SMAN Baiturahmah, tetap semangat Terimakasih ";

            $param = array(
                'DestinationNumber' => $this->input->post('no_hp'),
                'TextDecoded' => $reply
            );
            
            $outbox_id = $this->Outbox_model->add_outbox($param);
            
            $siswa_id = $this->Siswa_model->status_siswa($params);
			redirect('siswa');
        }
	}
}
