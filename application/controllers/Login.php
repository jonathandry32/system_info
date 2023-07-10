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
        $this->load->model('Login_model');
		$data['title']='YourDiet';
		$data['description']='';
		$data['keywords']='';
        $data['genre']=$this->Login_model->getGenre();
		$this->load->view('utilisateur/signin',$data);
	}

    public function logout()
    {
		$this->session->unset_userdata('online');
		$this->session->unset_userdata('name');
		$this->session->unset_userdata('isAdmin');
		redirect('login');
	}

    public function inscription()
	{
        $this->load->model('Login_model');
        $email=$this->input->post('email');
        $pass=$this->input->post('pass');
        $username=$this->input->post('username');
        $idGenre=$this->input->post('idGenre');
        $tel=$this->input->post('tel');
        $adresse=$this->input->post('adresse');
        $dtn=$this->input->post('dtn');
        $taille=$this->input->post('taille');
        $poids=$this->input->post('poids');

        $this->Login_model->inscription($email,$pass,$username,$idGenre,$tel,$adresse,$dtn,$taille,$poids);

		//	definition des donnees variables du template
		$data['title']='YourDiet';
		$data['description']='';
		$data['keywords']='';

		//	on charge la page dans le template
		$this->load->view('utilisateur/login',$data);
	}	
}
