<?php
class Crud_model extends CI_Model {

    public function getDataToShow(){
        $query = $this->db->get('notes');
        return $query->result();
    }

    public function insertModel($postArray){
        if($this->db->insert('notes',$postArray)){
            return true;
        }
        else{
            return false;
        }
    }

    public function deleteModel($id){
        if($this->db->delete('notes', array('sn'=>$id))){
            return true;
        }
        else{
            return false;
        }
    }
    
    public function get_by_id($sn){
        $query1 = $this->db->get_where('notes', array('sn'=>$sn)) ;
        return $query1->result_array();
    }

    public function updatedModel($id, $updateArray){
        if($this->db->update('notes',$updateArray, array('sn'=>$id))){
            return true;
        }
        else{
            return false;
        }
    }
}