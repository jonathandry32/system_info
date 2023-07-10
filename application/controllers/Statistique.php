<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Statistique extends CI_Controller {

	public function taille()
	{
        $this->load->model('Statistique_model');
		$data['title']='YourDiet';
		$data['description']='';
		$data['keywords']='';
		$data['tailleData']=$this->Statistique_model->getTaille();
		$data['contents']='statistique/taille';
		$this->load->view('template',$data);
	}
	
	public function poids()
	{
        $this->load->model('Statistique_model');
		$data['title']='YourDiet';
		$data['description']='';
		$data['keywords']='';
		$data['corpsData']=$this->Statistique_model->getPoids();
		$data['contents']='statistique/poids';
		$this->load->view('template',$data);
	}
	public function finance()
	{
		$this->load->model('Statistique_model');
		$data['title']='YourDiet';
		$data['description']='';
		$data['keywords']='';
		$data['financeData']=$this->Statistique_model->getPoids();
		$data['contents']='statistique/finance';
		$this->load->view('template',$data);
	}
}
?>