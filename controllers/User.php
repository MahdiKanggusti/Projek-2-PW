<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index() {
		$this->load->model('u_model', 'user');
        $data['usr']=$this->user->getAll();

		$this->load->view('user/index', $data);
	}

	public function save(){
        $this->load->model("u_model","user");

        $_username = $this->input->post('username');
        $_email = $this->input->post('email');
        $_role = $this->input->post('role');

        $data_usr[]=$_username;
        $data_usr[]=$_email;
        $data_usr[]=$_role;

        if(isset($_idedit)){
            $data_usr[]=$_idedit;
            $this->user->update($data_usr);  
        }else{ 
            $this->user->save($data_usr);   
        } 
        
        redirect(base_url().'index.php/user/index?id='.$_username, 'refresh');

    }

    public function edit(){
        $id = $this->input->get('id');
        $this->load->model("u_model","user");
        $usrs = $this->user->findById($id);

        $data['usrs']=$usrs;
        $this->load->view('user/update',$data);
    }

	public function delete(){
        $id = $this->input->get('id');
        $this->load->model("u_model","user");
        $this->user->delete($id);

        redirect(base_url().'index.php/user', 'refresh');
    }
	
}