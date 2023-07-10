<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Plat_model extends CI_Model
{
    public function listePlat(){
        $query= $this->db->query('SELECT * FROM plat');
        $data=array();
        foreach($query->result_array() as $row){
            array_push($data,$row);
        }
        return $data;
    }
}