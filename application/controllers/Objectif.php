<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Objectif extends CI_Controller {

	public function insert()
	{
		$this->load->model('Parametre_model');
		$this->load->model('Objectif_model');
		$data['title']='YourDiet';
		$data['description']='';
		$data['keywords']='';
		$data['paramListe']=$this->Parametre_model->getAllParametre();
		$data['type_objectif']=$this->Objectif_model->getTypeObjectif();
		$data['contents']='objectif/newMethod';
		$this->load->view('template',$data);
	}

	public function prediction()
	{
		$this->load->model('Objectif_model');
		$data['title']='YourDiet';
		$data['description']='';
		$data['keywords']='';
		$data['resultat']=$this->Objectif_model->predict($this->input->post('type_objectif'),$this->input->post('kg'),$this->input->post('poids'),$this->input->post('taille'));
		$data['contents']='objectif/paiement';
		$this->load->view('template',$data);
	}
	
	public function payer()
	{
		$this->load->model('Objectif_model');
		$data['title']='YourDiet';
		$data['description']='';
		$data['keywords']='';
		$this->Objectif_model->payer();
		$data['contents']='objectif/insert';
		$this->load->view('template',$data);
	}

	public function insertPage(){
		$this->load->model('Objectif_model');
		$this->load->model('Regime_model');
		$data['objectifs']= $this->Objectif_model->getTypeObjectif();
		$data['regimes']= $this->Regime_model->listeRegime();
		$data['title']='YourDiet';
		$data['description']='';
		$data['keywords']='';
		$data['contents']='objectif/insertObjectif';
		$this->load->view('template',$data);
	}

	public function insertObjectif(){
		$objectif = $this->input->post('objectif');
	}
}
?>