<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Statistique_model extends CI_Model
{
    public function getTailleDate(){
        $query= $this->db->query('SELECT * FROM plat');
        $data=array();
        foreach($query->result_array() as $row){
            array_push($data,$row);
        }
        return $data;
    }
    public function getTaillevalue(){
        $query= $this->db->query('SELECT * FROM plat');
        $data=array();
        foreach($query->result_array() as $row){
            array_push($data,$row);
        }
        return $data;
    }
}