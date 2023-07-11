<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gold_model extends CI_Model
{
    public function getLastGold(){
        $sql='SELECT * from gold order by idGold desc limit 1';
        $sql=$this->db->query($sql);
        $result=$sql->row_array();
        return $result;
    }

    public function insertUtilisateurGold(){
        $gold= $this->Gold_model->getLastGold();
        $idGold=$gold['idGold'];
        $user=$this->session->userdata('online');
        $sql= 'INSERT INTO utilisateur_gold(idGold,idUtilisateur) values (%d,%d)';
        $sql=sprintf($sql,$idGold,$user);
        $this->db->query($sql);
    }

    public function isGold(){
        $user=$this->session->userdata('online');
        $sql='SELECT * FROM utilisateur_gold where idUtilisateur=%d';
       
         $sql=sprintf($sql,$user);
        $sql=$this->db->query($sql);
        $result=$sql->row_array();
        
        return $result;
    }
}