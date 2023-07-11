<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class IMC extends CI_Controller {

    public function index($imc=0){
        $this->load->model('IMC_model');
            $data['imc']=$imc;
            $data['pourcentages']=$this->IMC_model->pourcentages();
        $data['title']='YourDiet';
		$data['description']='';
		$data['keywords']='';
        $data['contents']='imc/calculerIMC';
        $this->load->view('template',$data);
    }

    public function calculerIMC(){
        $this->load->model('IMC_model');
        $poids= $this->input->post('poids');
        $taille =$this->input->post('taille');
        $imc=$this->IMC_model->calculIMC($taille,$poids);
        redirect('IMC/index/'.$imc);
    }

}