<?php 
class Company_model extends CI_Model {
    function __construct() {
        $this->db   = $this->load->database('default', TRUE); 
        $this->table_name = 'tn_companies';
        $this->table_pk   = 'company_id';
    }
    function get_items(){
        $this->db->select('*');
        $this->db->from($this->table_name);
        return $this->db->get()->result();
    }

    function add_item($data){
        return $this->db->insert($this->table_name,$data);
    }
    
    function update_item($id,$data){
        $this->db->where($this->table_pk, $id);
        $this->db->update($this->table_name, $data);
        return true;       
    }
    function delete_job($id){
        $this->db->where($this->table_pk,$id);
        return $this->db->delete($this->table_name);
    }

}
?>