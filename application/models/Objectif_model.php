<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Objectif_model extends CI_Model
{
    public function getTypeObjectif()
    {   
        $sql="select * from type_objectif";
        $query=$this->db->query($sql);
        $results = $query->result_array();
        return $results;
    }
}