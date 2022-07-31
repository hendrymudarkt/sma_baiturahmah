<?php
class Pembayaran_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    
    function get_pembayaran($id){
        return $this->db->get_where('pembayaran',array('id'=>$id))->row_array();
    }
    
    function get_pembayaran_siswa($nis){
        return $this->db->get_where('pembayaran',array('nis'=>$nis))->result_array();
    }
    
    function get_all_pembayaran(){
        $this->db->order_by('id', 'asc');
        return $this->db->get('pembayaran')->result_array();
    }
    
    function get_all_pembayaran_diterima(){
        $this->db->join('pembayaran', 'diterima.id = pembayaran.id');
        return $this->db->get('diterima')->result_array();
    }
    
    function add_pembayaran($params){
        $this->db->insert('pembayaran',$params);
        return $this->db->insert_id();
    }
    
    function update_pembayaran($id,$params){
        $this->db->where('id',$id);
        return $this->db->update('pembayaran',$params);
    }
    
    function delete_pembayaran($id){
		$this->db->where('id',$id);
        return $this->db->delete('pembayaran');
    }

    function terima_pembayaran($params){
        $this->db->insert('diterima',$params);
        return $this->db->insert_id();
    }
}
