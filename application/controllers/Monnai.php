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

    public function insertCodePage()
    {
        $this->load->model('Monnai_model');
        $data['title']='YourDiet';
		$data['description']='';
		$data['keywords']='';
        $data['contents']='monnai/insert';
        $this->load->view('template',$data);
    }

    public function insertCode()
    {
        $this->load->model('Monnai_model');
        $code=$this->input->post('code');
        $valeur=$this->input->post('valeur');
        $utilisable=$this->input->post('utilisable');

        $this->Monnai_model->insertCode($code,$valeur,$utilisable);

        $this->load->model('Monnai_model');
        $data['title']='YourDiet';
		$data['description']='';
		$data['keywords']='';
        $data['list']=$this->Monnai_model->listCode();
        $data['portefeuille']=$this->Monnai_model->portefeuille();
        $data['contents']='monnai/index';
        $this->load->view('template',$data);
    }

    public function validation()
    {
        $this->load->model('Monnai_model');
        $data['title']='YourDiet';
		$data['description']='';
		$data['keywords']='';
		$data['list']=$this->Monnai_model->getValidation();
        $data['contents']='monnai/validation';
        $this->load->view('template',$data);
    }
    public function valider()
    {
        $this->load->model('Monnai_model');
        $data['title']='YourDiet';
		$data['description']='';
		$data['keywords']='';
		$this->Monnai_model->valider($this->input->post('idCode'),$this->input->post('montant'));
        $data['contents']='monnai/validation';
        $this->load->view('template',$data);
    }
}
?>