<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Statistique extends CI_Controller {

	public function index()
	{
		$data['title']='YourDiet';
		$data['description']='';
		$data['keywords']='';
		$data['contents']='statistique/';
		$this->load->view('template',$data);
	}
}
?>