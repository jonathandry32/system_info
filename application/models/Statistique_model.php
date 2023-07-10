<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Statistique_model extends CI_Model
{
    public function getTaille()
    {   
        $sql="select taille,daty from detail_utilisateur where idUtilisateur=".$this->session->userdata('online');
        $query=$this->db->query($sql);
        $results = $query->result_array();
        return $results;
    }
    public function getPoids()
    {   
        $sql="select poids,daty from detail_utilisateur where idUtilisateur=".$this->session->userdata('online');
        $query=$this->db->query($sql);
        $results = $query->result_array();
        return $results;
    }
    public function getFinance()
    {   
        $sql="select * from caisse where idUtilisateur=".$this->session->userdata('online');
        $query=$this->db->query($sql);
        $results = $query->result_array();
        return $results;
    }
}