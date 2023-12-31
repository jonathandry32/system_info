<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Utilisateur extends CI_Controller {

    public function profil()
    {
        $id= $this->input->post('idRegime');
        $this->load->model('Regime_model');
		$id=$this->Regime_model->getActualId();
        $data['plats']=$this->Regime_model->getDetailsPlats($id);
        $data['activites']=$this->Regime_model->getDetailsActivites($id);
		$data['title']='YourDiet';
		$data['description']='';
		$data['keywords']='';
		$data['contents']='utilisateur/profil';
		$this->load->model('Utilisateur_model');
		$data['profil']= $this->Utilisateur_model->getUser();
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
