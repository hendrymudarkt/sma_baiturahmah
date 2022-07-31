<?php 
class Login_model extends CI_Model{	
	function cek_login($username){		
		return $this->db->get_where('user',array('username'=>$username))->row_array();
	}
	
	function cek_login_siswa($username){		
		return $this->db->get_where('siswa',array('nis'=>$username))->row_array();
	}
}
