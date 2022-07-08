<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_model extends CI_Model {

    private $table = "kecamatan";

    public function getAll() {
        $query = $this->db->get('kecamatan');
        return $query->result();
    }

    public function findById($id) {
        $this->db->where("id", $id);
        $query = $this->db->get($this->table);
        return $query->row();
    }

    public function save($data){
        $sql = "INSERT INTO kecamatan 
        (nama)
          VALUES (?)";
       $this->db->query($sql,$data);

    }

    public function update($data){
        $sql = "UPDATE kecamatan SET nama=? WHERE id=?";
         $this->db->query($sql,$data);
    }

    public function delete($id){
        $sql = "delete from kecamatan where id=?";
        $this->db->query($sql,array($id));
    }
}