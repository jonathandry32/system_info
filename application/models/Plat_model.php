<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Plat_model extends CI_Model
{
    public function listePlat(){
        $query= $this->db->query('SELECT p.nom as plat,t.nom as types, prix, picture FROM plat p join type_plat t on p.idTypePlat=t.idTypePlat');
        $data=array();
        foreach($query->result_array() as $row){
            array_push($data,$row);
        }
        return $data;
    }

    public function updatePlat(){
        
    }
}