<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kecamatan extends CI_Controller {

	public function index() {
		$this->load->model('c_model', 'camat');
        $data['knm']=$this->camat->getAll();

		$this->load->view('kecamatan/index', $data);
	}

    public function kecamatan() {
        $data['camat']='camat';

		$this->load->view('kecamatan/komentar', $data);
	}

	public function save(){
        $this->load->model('k_model', 'komen');

        $_nama= $this->input->post('nama');

        $data_cam[]=$_nama;

        $this->komen->save($data_cam);   
        
        redirect(base_url().'index.php/kecamatan/index'.$_nama, 'refresh');

    }

    public function edit(){
        $id = $this->input->get('id');
        $this->load->model("c_model","camat");
        $cmt = $this->camat->findById($id);

        $data['camat']='Form Update Kecamatan';
        $data['cmt']=$cmt;
        $this->load->view('kecamatan/update',$data);
    }

	public function delete(){
        $id = $this->input->get('id');
        $this->load->model('c_model', 'camat');
        $this->camat->delete($id);

        redirect(base_url().'index.php/kecamatan', 'refresh');
    }
	
}