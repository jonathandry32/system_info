<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Utilisateur extends CI_Controller {

    public function profil()
    {
		$data['title']='YourDiet';
		$data['description']='';
		$data['keywords']='';
		$data['contents']='utilisateur/profil';
        $this->load->view('template',$data);
	}
    public function controle()
    {
		$data['title']='YourDiet';
		$data['description']='';
		$data['keywords']='';
		$data['contents']='utilisateur/controle';
        $this->load->view('template',$data);
	}
}
