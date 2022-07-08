<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class V_model extends CI_Model {

    private $table = "jenis_faskes";

    public function getAll() {
        $query = $this->db->get($this->table);
        return $query->result();
    }

    public function findById($id) {
        $this->db->where("id", $id);
        $query = $this->db->get($this->table);
        return $query->row();
    }

    public function savejenis($data){
        $sql = "INSERT INTO jenis_faskes 
        (nama) VALUES (?)";
       $this->db->query($sql,$data);

    }

    public function update($data){
        $sql = "UPDATE jenis_faskes SET nama=? WHERE id=?";
         $this->db->query($sql,$data);
    }

    public function delete($id){
        $sql = "delete from jenis_faskes where id=?";
        $this->db->query($sql,array($id));
    }
}