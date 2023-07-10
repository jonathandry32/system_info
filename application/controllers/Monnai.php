<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Monnai extends CI_Controller {
    public function index()
    {
        $this->load->model('Monnai_model');
        $data['title']='YourDiet';
		$data['description']='';
		$data['keywords']='';
        $data['list']=$this->Monnai_model->listCode();
        $data['portefeuille']=$this->Monnai_model->portefeuille();
        $data['contents']='monnai/index';
        $this->load->view('template',$data);
    }

    public function acheter()
	{
        $this->load->model('Monnai_model');
        $code=$this->input->post('code');

        $this->Monnai_model->achat($code);

        $data['title']='YourDiet';
		$data['description']='';
		$data['keywords']='';
        $data['list']=$this->Monnai_model->listCode();
        $data['portefeuille']=$this->Monnai_model->portefeuille();
        $data['contents']='monnai/index';
        $this->load->view('template',$data);
	}	
}
?>