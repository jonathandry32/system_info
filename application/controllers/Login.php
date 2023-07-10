<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index()
    {
		//	definition des donnees variables du template
		$data['title']='YourDiet';
		$data['description']='';
		$data['keywords']='';
		//	on charge la page dans le template
		if($this->session->userdata('online'))
        {
            $this->load->view('utilisateur/after_login',$data);
		}
		else{
			$this->load->view('utilisateur/login',$data);
		}
	}

    public function check()
    {
        $user=$this->input->post('name');
        $mdp=$this->input->post('mdp');
        $this->load->model('Login_model');
        if($this->Login_model->check($user,$mdp)==true)
        {
            //	definition des donnees variables du template
            $data['title']='YourDiet';
            $data['description']='';
            $data['keywords']='';

            //	on charge la view qui contient le corps de la page
            $data['contents']='utilisateur/after_login';

            //	on charge la page dans le template
            $this->load->view('template',$data);
        }
        else
        {
            redirect('Login');
        }
    }

    public function sign()
    {
		$data['title']='YourDiet';
		$data['description']='';
		$data['keywords']='';
		$this->load->view('utilisateur/signin',$data);
	}

    public function logout()
    {
		$this->session->unset_userdata('online');
		$this->session->unset_userdata('name');
		$this->session->unset_userdata('isAdmin');
		redirect('login');
	}
}
