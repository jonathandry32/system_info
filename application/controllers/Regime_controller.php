<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regime_controller extends CI_Controller {

    public function index(){

    }

    public function loadRegime(){
        $data['contents']='pages/insertRegime';
        $this->load->view('template',$data);
    }
	
	public function insertRegime(){
        $nom= $this->input->post('nom');
        $duree= $this->input->post('duree');
        $prix= $this->input->post('prix');
        $this->load->model('Regime_model');
        $result= $this->Regime_model->insertRegime($nom,$duree);
        redirect('Regime_controller/index');
    }

    public function listeRegime(){
        $this->load->model('Regime_model');
        $data['list']= $this->Regime_model->listeRegime();
        $data['contents']='pages/listeRegime';
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
        $data['contents']='pages/updateRegime';
        $this->load->view('template',$data);
    }

    public function updateRegime(){
        $id= $this->input->post('idRegime');
        $nom= $this->input->post('nom');
        $duree= $this->input->post('duree');
        $prix= $this->input->post('prix');
        $this->load->model('Regime_model');
        $this->Regime_model->updateRegime($id,$nom,$duree,$prix);
        redirect('Regime_controller/index');
    }

    public function delete(){
        $id= $this->input->post('idRegime');
        $this->load->model('Regime_model');
        $this->Regime_model->deleteRegime($id);
        redirect('Regime_controller/index');
    }

}
