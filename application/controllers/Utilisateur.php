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
	public function insertControle()
    {
        $this->load->model('Utilisateur_model');
		$data['title']='YourDiet';
		$data['description']='';
		$data['keywords']='';
        $this->Utilisateur_model->insertDetailUtilisateur($this->input->post('taille'),$this->input->post('poids'),$this->input->post('daty'));
		$data['contents']='utilisateur/controle';
        $this->load->view('template',$data);
	}
}
