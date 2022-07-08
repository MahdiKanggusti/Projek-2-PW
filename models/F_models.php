<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class F_models extends CI_Model {

    private $table = "faskes";

    public function getAll() {
        $query = $this->db->get('faskes');
        return $query->result();
    }

    public function findById($id) {
        $this->db->where("id", $id);
        $query = $this->db->get($this->table);
        return $query->row();
    }

    public function save($data){
        $sql = "INSERT INTO faskes 
        (nama,alamat,latlong,jenis_id,deskripsi,skor_rating,kecamatan_id,website,jumlah_dokter,jumlah_pegawai)
          VALUES (?,?,?,?,?,?,?,?,?,?)";
       $this->db->query($sql,$data);

    }

    public function update($data){
        $sql = "UPDATE faskes SET nama=?,latlong=?,jenis_id=?,deskripsi=?,
        skor_rating=?,kecamatan_id=?,website=?,jumlah_dokter=?,jumlah_pegawai=? WHERE id=?";
         $this->db->query($sql,$data);
    }

    public function delete($id){
        $sql = "delete from faskes where id=?";
        $this->db->query($sql,array($id));
    }
}