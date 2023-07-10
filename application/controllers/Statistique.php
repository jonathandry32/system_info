<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Statistique extends CI_Controller {

	public function taille()
	{
		$data['title']='YourDiet';
		$data['description']='';
		$data['keywords']='';
		$data['contents']='statistique/taille';
		$this->load->view('template',$data);
	}
	public function poids()
	{
		$data['title']='YourDiet';
		$data['description']='';
		$data['keywords']='';
		$data['contents']='statistique/poids';
		$this->load->view('template',$data);
	}
	public function finance()
	{
		$data['title']='YourDiet';
		$data['description']='';
		$data['keywords']='';
		$data['contents']='statistique/finance';
		$this->load->view('template',$data);
	}
}
?>