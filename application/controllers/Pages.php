<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {	
	public function toPdf(){
        $this->load->model('Regime_model');
		$this->Regime_model->generatePDF($this->Regime_model->getActualId());
	}
}
?>