<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Activite extends CI_Controller {

    public function loadActivite(){
        $data['title']='YourDiet';
		$data['description']='';
		$data['keywords']='';
        $data['contents']='activite/insertActivite';
        $this->load->model('Activite_model');
        $data['unites']=  $this->Activite_model->listeUnite();
        $this->load->view('template',$data);
    }

    public function insertActivite(){
        $nom= $this->input->post('nom');
        $quantite = $this->input->post('qtt');
        $unite = $this->input->post('unite');
        $this->load->model('Activite_model');
        $this->Activite_model->insertActivite($nom,$quantite,$unite);
        redirect('Activite/listeActivite');
    }

    public function listeActivite(){
        $this->load->model('Activite_model');
        $data['list']= $this->Activite_model->listeActivite();
        $data['contents']='activite/listeActivite';
        $data['title']='YourDiet';
		$data['description']='';
		$data['keywords']='';
        $this->load->view('template',$data);
    }

    public function updatePage(){
        $id= $this->input->post('idActivite');
        $nom = $this->input->post('nom');
        $quantite = $this->input->post('quantite');
        $unite = $this->input->post('unite');
        $this->load->model('Activite_model');
        $data['unites']=  $this->Activite_model->listeUnite();
        $data['idActivite']=$id;
        $data['nom']=$nom;
        $data['quantite']=$quantite;
        $data['unite']=$unite;
        $data['contents']='activite/updateActivite';
        $data['title']='YourDiet';
		$data['description']='';
		$data['keywords']='';
        $this->load->view('template',$data);
    }

    public function updateActivite(){
        $id= $this->input->post('idActivite');
        $nom = $this->input->post('nom');
        $quantite = $this->input->post('quantite');
        $unite = $this->input->post('unite');
        $this->load->model('Activite_model');
        $this->Activite_model->updateActivite($id,$nom,$quantite,$unite);
        redirect('Activite/listeActivite');
    }

    public function delete(){
        $id= $this->input->post('idActivite');
        $this->load->model('Activite_model');
        $this->Activite_model->deleteActivite($id);
        redirect('Activite/listeActivite');
    }
}