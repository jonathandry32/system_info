<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Objectif extends CI_Controller {

	public function insert()
	{
		$this->load->model('Parametre_model');
		$data['title']='YourDiet';
		$data['description']='';
		$data['keywords']='';
		$data['paramListe']=$this->Parametre_model->getAllParametre();
		$data['contents']='objectif/newMethod';
		$this->load->view('template',$data);
	}
}
?>