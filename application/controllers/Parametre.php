<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Parametre extends CI_Controller {
    public function index()
    {
        $this->load->model('Parametre_model');
        $data['title']='YourDiet';
		$data['description']='';
		$data['keywords']='';
        $data['list']= $this->Parametre_model->getAllParametre();
        $data['contents']='parametre/index';
        $this->load->view('template',$data);
    }

    public function insert()
	{
        $this->load->model('Parametre_model');
        $nom=$this->input->post('nom');

        $this->Parametre_model->insert($nom);

        $data['title']='YourDiet';
		$data['description']='';
		$data['keywords']='';
        $data['list']= $this->Parametre_model->getAllParametre();
        $data['contents']='parametre/index';
        $this->load->view('template',$data);
	}	

    public function delete()
	{
        $this->load->model('Parametre_model');
        $idParametre=$this->input->post('idParametre');

        $this->Parametre_model->delete($idParametre);

        $data['title']='YourDiet';
		$data['description']='';
		$data['keywords']='';
        $data['list']= $this->Parametre_model->getAllParametre();
        $data['contents']='parametre/index';
        $this->load->view('template',$data);
	}	

    public function updateFunction()
	{
        $this->load->model('Parametre_model');
        $idParametre=$this->input->post('idParametre');
        $nom=$this->input->post('nom');

        $this->Parametre_model->update($idParametre,$nom);

        $data['title']='YourDiet';
		$data['description']='';
		$data['keywords']='';
        $data['list']= $this->Parametre_model->getAllParametre();
        $data['contents']='parametre/index';
        $this->load->view('template',$data);
	}	

    public function update()
	{
        $this->load->model('Parametre_model');
		$idParametre=$this->input->post('idParametre');
		$nom=$this->input->post('nom');

        $data['title']='YourDiet';
		$data['description']='';
		$data['keywords']='';
        $data['list']= $this->Parametre_model->getAllParametre();
        $data['contents']='parametre/update';
		$data['idParametre']=$idParametre;
		$data['nom']=$nom;
        
		$this->load->view('template',$data);
	}
}
?>