<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Plat extends CI_Controller {

    public function listePlat(){
        $this->load->model('Plat_model');
        $data['list']= $this->Plat_model->listePlat();
        $data['contents']='plat/listePlat';
        $data['title']='YourDiet';
		$data['description']='';
		$data['keywords']='';
        $this->load->view('template',$data);
    }

    public function updatePage(){
        $id= $this->input->post('idPlat');
        $nom = $this->input->post('nom');
        $types= $this->input->post('types');
        $prix= $this->input->post('prix');
        $this->load->model('Plat_model');
        $data['list']= $this->Plat_model->listeTypePlat();
        $data['idPlat']=$id;
        $data['nom']=$nom;
        $data['types']=$types;
        $data['prix']=$prix;
        $data['contents']='plat/updatePlat';
        $data['title']='YourDiet';
		$data['description']='';
		$data['keywords']='';
        $this->load->view('template',$data);
    }

    public function updatePlat(){
        $id= $this->input->post('idPlat');
        $nom = $this->input->post('nom');
        $types= $this->input->post('types');
        $prix= $this->input->post('prix');
        $this->load->model('Plat_model');
        $this->Plat_model->updatePlat($id,$nom,$types,$prix);
        redirect('Plat/listePlat');
    }

    public function delete(){
        $id= $this->input->post('idPlat');
        $this->load->model('Plat_model');
        $this->Plat_model->deletePlat($id);
        redirect('Plat/listePlat');
    }
}