<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gold extends CI_Controller {

    public function index(){
        $this->load->model('Gold_model');
        $this->load->model('Regime_model');
        $data['list']= $this->Regime_model->listeRegime();
        $data['gold']=$this->Gold_model->getLastGold();
        $data['isGold']=$this->Gold_model->isGold();
        $data['title']='YourDiet';
		$data['description']='';
		$data['keywords']='';
        $data['contents']='gold/choixGold';
        $this->load->view('template',$data);
    }

    public function choose(){
        $prix=$this->input->post('prix');
        $this->load->model('Gold_model');
        $this->load->model('Monnai_model');
        $vola=$this->Monnai_model->portefeuille();
        if($vola>$prix){
            $this->Gold_model->insertUtilisateurGold();
        }
        redirect('Gold/index');
    }
}