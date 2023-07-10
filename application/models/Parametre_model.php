<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Parametre_model extends CI_Model {
        public function __construct()
        {
            parent::__construct();
        }

        public function getAllParametre()
        {   
            $sql="select * from parametre";
            $query=$this->db->query($sql);
            $results = $query->result_array();
            return $results;
        }
    }
?>