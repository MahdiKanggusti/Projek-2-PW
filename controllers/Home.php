<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index() {
		$this->load->model('v_model', 'faskes');
        $data['skt']=$this->faskes->getAll();

		$this->load->view('home/index', $data);
	}

	public function jenis() {
        $this->load->model('f_models', 'faskes');
        $jen = $this->faskes->getAll();
        $data ['jen'] = $jen;

        $this->load->view('home/jenis' , $data);
	}

	public function view() {
        $id = $this->input->get('id');
		$this->load->model('f_models', 'faskes');
		$data['rmh'] = $this->faskes->findById($id);

		$this->load->view('home/faskes', $data);
	}

	public function create(){
        $data['faskes']='Form Kelola Faskes';

        $this->load->view('home/create', $data);
    }

    public function createjenis(){
        $data['jenis']='Form Kelola Jenis';

        $this->load->view('home/createjenis', $data);
    }

	public function save(){
        $this->load->model("f_models","faskes");

        $_nama = $this->input->post('nama');
        $_alamat = $this->input->post('alamat');
        $_latlong = $this->input->post('latlong');
        $_jenis_faskes = $this->input->post('jenis');
        $_deskripsi = $this->input->post('deskripsi');
        $_rating = $this->input->post('rating');
        $_kecamatan = $this->input->post('kecamatan');
        $_website = $this->input->post('website');
        $_dokter = $this->input->post('dokter');
        $_pegawai = $this->input->post('pegawai');

        $data_rmh[]=$_nama;
        $data_rmh[]=$_alamat;
        $data_rmh[]=$_latlong;
        $data_rmh[]=$_jenis_faskes;
        $data_rmh[]=$_deskripsi;
        $data_rmh[]=$_rating;
        $data_rmh[]=$_kecamatan;
        $data_rmh[]=$_website;
        $data_rmh[]=$_dokter;
        $data_rmh[]=$_pegawai;

        if(isset($_idedit)){
            $data_rmh[]=$_idedit;
            $this->faskes->update($data_rmh);  
        }else{ 
            $this->faskes->save($data_rmh);   
        } 
        
        redirect(base_url().'index.php/home/jenis?jenis_id='.$_jenis_faskes, 'refresh');

    }

    public function savejenis(){
        $this->load->model("v_model","jenis");

        $_nama = $this->input->post('nama');

        $data_jns[]=$_nama;

        if(isset($_idedit)){
            $data_jns[]=$_idedit;
            $this->jenis->updatejenis($data_jns);  
        }else{ 
            $this->jenis->savejenis($data_jns);   
        } 
        
        redirect(base_url().'index.php/home/index?id='.$_nama, 'refresh');

    }

    public function edit(){
        $id = $this->input->get('id');
        $this->load->model("f_models","faskes");
        $fas = $this->faskes->findById($id);

        $data['faskes']='Form Update Faskes';
        $data['fas']=$fas;
        $this->load->view('home/update',$data);
    }

    public function editjenis(){
        $id = $this->input->get('id');
        $this->load->model("v_model","jenis");
        $jns = $this->jenis->findById($id);

        $data['jenis']='Form Update Jenis';
        $data['jns']=$jns;
        $this->load->view('home/updatejenis',$data);
    }

	public function delete(){
        $id = $this->input->get('id');
        $this->load->model("f_models","faskes");
        $this->faskes->delete($id);

        redirect(base_url().'index.php/home/jenis', 'refresh');
    }

    public function deletejenis(){
        $id = $this->input->get('id');
        $this->load->model("v_model","jenis");
        $this->jenis->delete($id);

        redirect(base_url().'index.php/home', 'refresh');
    }
	
}