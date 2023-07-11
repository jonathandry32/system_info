<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gold_model extends CI_Model
{
    public function getGold(){
        $sql='SELECT * from gold';
        $sql=$this->db->query($sql);
        $result=$sql->row_array();
        return $result;
    }
}