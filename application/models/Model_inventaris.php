<?php


class Model_inventaris extends CI_Model{

    public function getAll(){
        return $this->db->get('data_inventaris')->result_array();
    }
    public function get(){
        return $this->db->get('data_inventaris' )->result_array();
    }
    public function simpan($data)
    {

        $query = $this->db->insert("data_inventaris", $data);

        if($query){
            return true;
        }else{
            return false;
        }
    }
}