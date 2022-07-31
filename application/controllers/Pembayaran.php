<?php
class Pembayaran extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Pembayaran_model');
        if($this->session->userdata('status') != "login"){
            redirect('login/index');
        }
	}

    function index(){
        $nis = $this->session->userdata('nis');
        if ($this->session->userdata('sebagai') == 'siswa') {
            $data['pembayaran'] = $this->Pembayaran_model->get_pembayaran_siswa($nis);
        }else{
            $data['pembayaran'] = $this->Pembayaran_model->get_all_pembayaran();
        }
        $data['_view'] = 'pembayaran/index';
        $this->load->view('layouts/main',$data);
    }
    
    function terima(){
        $data['pembayaran'] = $this->Pembayaran_model->get_all_pembayaran_diterima();
        $data['_view'] = 'diterima/index';
        $this->load->view('layouts/main',$data);
    }

    function add(){   
        if(isset($_POST) && count($_POST) > 0){   
            $config['upload_path']          = 'bukti/';
            $config['allowed_types']        = 'jpeg|jpg|png|pdf';
            $config['overwrite']            = TRUE;
            $config['encrypt_name']         = TRUE;
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('bukti_pembayaran')) {
                $file = $this->upload->data();
                $bukti_pembayaran = $file['file_name'];
                
                $params = array(
                    'nis' => $this->input->post('nis'),
                    'nama_bank' => $this->input->post('nama_bank'),
                    'rekening' => $this->input->post('rekening'),
                    'rekening_tujuan' => $this->input->post('rekening_tujuan'),
                    'jumlah' => $this->input->post('jumlah'),
                    'tgl_transfer' => date('Y-m-d', strtotime($this->input->post('tgl_transfer'))),
                    'bukti_pembayaran' => $bukti_pembayaran,
                    'status' => "Pending"
                );
            }
            else{
                $error = array('error' => $this->upload->display_errors());
                $this->load->view($error);
            }
            
            $pembayaran_id = $this->Pembayaran_model->add_pembayaran($params);
			redirect('pembayaran');
        }
        else{            
            $data['_view'] = 'pembayaran/add';
            $this->load->view('layouts/main',$data);
        }
	}

	function edit($id){
        $data['pembayaran'] = $this->Pembayaran_model->get_pembayaran($id);

        if(isset($data['pembayaran']['id'])){
            if(isset($_POST) && count($_POST) > 0){   
                $config['upload_path']          = 'bukti/';
                $config['allowed_types']        = 'jpeg|jpg|png|pdf';
                $config['overwrite']            = TRUE;
                $config['encrypt_name']         = TRUE;
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('bukti_pembayaran')) {
                    $file = $this->upload->data();
                    $bukti_pembayaran = $file['file_name'];
                    
                    $params = array(
                        'nis' => $this->input->post('nis'),
                        'nama_bank' => $this->input->post('nama_bank'),
                        'rekening' => $this->input->post('rekening'),
                        'rekening_tujuan' => $this->input->post('rekening_tujuan'),
                        'jumlah' => $this->input->post('jumlah'),
                        'tgl_transfer' => date('Y-m-d', strtotime($this->input->post('tgl_transfer'))),
                        'bukti_pembayaran' => $bukti_pembayaran
                    );
                }
                else{
                    $params = array(
                        'nis' => $this->input->post('nis'),
                        'nama_bank' => $this->input->post('nama_bank'),
                        'rekening' => $this->input->post('rekening'),
                        'rekening_tujuan' => $this->input->post('rekening_tujuan'),
                        'jumlah' => $this->input->post('jumlah'),
                        'tgl_transfer' => date('Y-m-d', strtotime($this->input->post('tgl_transfer')))
                    );
                }
                
                $pembayaran_id = $this->Pembayaran_model->update_pembayaran($id,$params);
                redirect('pembayaran');
            }
            else{
                $data['_view'] = 'pembayaran/edit';
                $this->load->view('layouts/main',$data);
            }
        }
    }

    function remove($id){
        $pembayaran = $this->Pembayaran_model->get_pembayaran($id);

        if(isset($pembayaran['nis'])){
            $path = './bukti/';
            unlink($path.$pembayaran['bukti_pembayaran']);

            $this->Pembayaran_model->delete_pembayaran($id);
            redirect('pembayaran/index');
        }
    }

    function view($id){
        $data['pembayaran'] = $this->Pembayaran_model->get_pembayaran($id);
        $data['_view'] = 'pembayaran/view';
        $this->load->view('layouts/main',$data);
    }
    
    function view_diterima($id){
        $data['pembayaran'] = $this->Pembayaran_model->get_pembayaran($id);
        $data['_view'] = 'diterima/view';
        $this->load->view('layouts/main',$data);
    }

    function diterima($id){
        if(isset($_POST) && count($_POST) > 0){
            $params = array(
                'status' => "Diterima"
            );
            
            $pembayaran_id = $this->Pembayaran_model->update_pembayaran($id, $params);
			redirect('pembayaran');
        }
        else{
            echo "gagal";
        }
	}
    
    function ditolak($id){   
        if(isset($_POST) && count($_POST) > 0){   
            $params = array(
                'status' => "Ditolak"
            );
            
            $pembayaran_id = $this->Pembayaran_model->update_pembayaran($id, $params);
			redirect('pembayaran');
        }
	}
}
