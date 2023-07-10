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
}