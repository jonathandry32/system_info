<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class IMC_model extends CI_Model
{
    public function calculIMC($taille,$poids){
        $taille= $taille/100;
        $imc= $poids/($taille*$taille);
        return $imc;
    }

    public function pourcentages(){
        $query= $this->db->query('SELECT * FROM imc');
        $data=array();
        foreach($query->result_array() as $row){
            array_push($data,$row);
        }
        return $data;
    }

    public function getPoidsIdeal($taille){
        $taille=$taille/100;
        $poids=($taille*$taille)*22;
        return $poids;
    }
}