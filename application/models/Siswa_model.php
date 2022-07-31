<?php
class Siswa_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    
    function get_siswa($nis){
        return $this->db->get_where('siswa',array('nis'=>$nis))->row_array();
    }
    
    function get_all_siswa(){
        $this->db->order_by('nis', 'asc');
        return $this->db->get('siswa')->result_array();
    }
    
    function get_all_siswa_diterima(){
        $this->db->join('siswa', 'status.nis = siswa.nis');
        return $this->db->get('status')->result_array();
    }
    
    function add_siswa($params){
        $this->db->insert('siswa',$params);
        return $this->db->insert_id();
    }
    
    function update_siswa($nis,$params){
        $this->db->where('nis',$nis);
        return $this->db->update('siswa',$params);
    }
    
    function delete_siswa($nis){
		$this->db->where('nis',$nis);
        return $this->db->delete('siswa');
    }

    function status_siswa($params){
        $this->db->insert('status',$params);
        return $this->db->insert_id();
    }
}
