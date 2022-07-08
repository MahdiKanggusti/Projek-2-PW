<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Komen extends CI_Controller {

	public function index() {
		$this->load->model('k_model', 'komen');
        $data['knm']=$this->komen->getAll();

		$this->load->view('komen/index', $data);
	}

    public function komentar() {
        $data['komen']='Komen';

		$this->load->view('komen/komentar', $data);
	}

	public function save(){
        $this->load->model('k_model', 'komen');
        $this->load->model('u_model', 'user');

        $_isi= $this->input->post('isi');
        $_id = $this->user->input->post('id');
        $_faskes_id = $this->input->post('faskes_id');
        $_nilai_rating_id = $this->input->post('nilai_rating_id');

        $data_kom[]=$_isi;
        $data_kom[]=$_id;
        $data_kom[]=$_faskes_id;
        $data_kom[]=$_nilai_rating_id;

        $this->komen->save($data_kom);   
        
        redirect(base_url().'index.php/komen/index'.$_faskes_id, 'refresh');

    }

	public function delete(){
        $id = $this->input->get('id');
        $this->load->model('k_model', 'komen');
        $this->komen->delete($id);

        redirect(base_url().'index.php/komen', 'refresh');
    }
	
}