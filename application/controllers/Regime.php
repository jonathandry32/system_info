<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regime extends CI_Controller {

    public function loadRegime(){
        $this->load->model('Plat_model');
        $this->load->model('Activite_model');
        $data['title']='YourDiet';
		$data['description']='';
		$data['keywords']='';
        $data['plats']= $this->Plat_model->listePlat();
        $data['activites']=$this->Activite_model->listeActivite();
        $data['contents']='regime/insertRegime';
        $this->load->view('template',$data);
    }
	
	public function insertRegime(){
        $nom= $this->input->post('nom');
        $duree= $this->input->post('duree');
        $prix= $this->input->post('prix');
        $this->load->model('Regime_model');
        $plats= $this->input->post('plat');
        $activites = $this->input->post('activite');
        $this->Regime_model->insertRegime($nom,$duree,$prix,$plats,$activites);
        redirect('Regime/listeRegime');
    }

    public function listeRegime(){
        $this->load->model('Regime_model');
        $data['list']= $this->Regime_model->listeRegime();
        $data['contents']='regime/listeRegime';
        $data['title']='YourDiet';
		$data['description']='';
		$data['keywords']='';
        $this->load->view('template',$data);
    }

    public function updatePage(){
        $id= $this->input->post('idRegime');
        $nom= $this->input->post('nom');
        $duree= $this->input->post('duree');
        $prix= $this->input->post('prix');
        $data['idRegime']=$id;
        $data['nom']=$nom;
        $data['duree']=$duree;
        $data['prix']=$prix;
        $data['contents']='regime/updateRegime';
        $data['title']='YourDiet';
		$data['description']='';
		$data['keywords']='';
        $this->load->view('template',$data);
    }

    public function updateRegime(){
        $id= $this->input->post('idRegime');
        $nom= $this->input->post('nom');
        $duree= $this->input->post('duree');
        $prix= $this->input->post('prix');
        $this->load->model('Regime_model');
        $this->Regime_model->updateRegime($id,$nom,$duree,$prix);
        redirect('Regime/listeRegime');
    }

    public function delete(){
        $id= $this->input->post('idRegime');
        $this->load->model('Regime_model');
        $this->Regime_model->deleteRegime($id);
        $data['title']='YourDiet';
        redirect('Regime/listeRegime');
    }

    public function details(){
        $id= $this->input->post('idRegime');
        $this->load->model('Regime_model');
        $data['plats']=$this->Regime_model->getDetailsPlats($id);
        $data['activites']=$this->Regime_model->getDetailsActivites($id);
        $data['contents']='regime/detailsRegime';
        $data['title']='YourDiet';
		$data['description']='';
		$data['keywords']='';
        $this->load->view('template',$data);
    }

}
