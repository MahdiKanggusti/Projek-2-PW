<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class U_model extends CI_Model {

    private $table = "users";

    public function getAll() {
        $query = $this->db->get($this->table);
        return $query->result();
    }

    public function findById($id) {
        $this->db->where("id", $id);
        $query = $this->db->get($this->table);
        return $query->row();
    }

    public function save($data){
        $sql = "INSERT INTO users 
        (username,email,created_at,last_login,role)
          VALUES (?,?,now(),now(),?)";
       $this->db->query($sql,$data);

    }

    public function update($data){
        $sql = "UPDATE users SET username=?,email=?,role=? WHERE id=?";
         $this->db->query($sql,$data);
    }

    public function delete($id){
        $sql = "delete from users where id=?";
        $this->db->query($sql,array($id));
    }
}