<?php
class Outbox_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    
    function get_all_outbox(){
        $this->db->order_by('DeliveryDateTime', 'desc');
        return $this->db->get('sentitems')->result_array();
    }

    function add_outbox($param){
        $this->db->insert('outbox',$param);
        return $this->db->insert_id();
    }
}
