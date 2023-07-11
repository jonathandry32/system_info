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
		$this->load->model('Utilisateur_model');
		$this->load->model('IMC_model');
		$data['title']='YourDiet';
		$data['description']='';
		$data['keywords']='';
		$kgg=$this->input->post('kg');
		$uss=$this->Utilisateur_model->getUser();
		if($this->input->post('type_objectif')==3){
			$kgg=$this->IMC_model->getPoidsIdeal() - $uss['poids'];
		}
		if($kgg<0){
			$kgg=(-1)*$kgg;
		}
		$data['resultat']=$this->Objectif_model->predict($this->input->post('type_objectif'),$kgg,$this->input->post('poids'),$this->input->post('taille'));
		$data['contents']='objectif/paiement';
		$this->load->view('template',$data);
	}
	
	public function payer()
	{
		$this->load->model('Objectif_model');
		$this->load->model('Regime_model');
		$data['title']='YourDiet';
		$data['description']='';
		$data['keywords']='';
		$regime=$this->Regime_model->getById($this->input->post('idRegime'));
		$this->Objectif_model->payer($regime['duree'],$regime['prix'],$regime['idRegime']);
		$data['contents']='objectif/insertObjectif';
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
		$minvaleur= $this->input->post('minvaleur');
		$maxvaleur= $this->input->post('maxvaleur');
		$poidsmin= $this->input->post('poidsmin');
		$poidsmax= $this->input->post('poidsmax');
		$taillemin= $this->input->post('taillemin');
		$taillemax= $this->input->post('taillemax');
		$regime = $this->input->post('regime');
		$this->load->model('Objectif_model');
		$this->Objectif_model->insertObjectif($objectif,$minvaleur,$maxvaleur,$poidsmin,$poidsmax,$taillemin,$taillemax,$regime);
		redirect('Objectif/insertPage');
	}
}
?>