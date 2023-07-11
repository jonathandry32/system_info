<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gold extends CI_Controller {

    public function index(){
        $this->load->model('Gold_model');
        
    }
}