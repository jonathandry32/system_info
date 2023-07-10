<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Utilisateur_model extends CI_Model
{
    
    public function insertDetailUtilisateur($taille,$poids,$daty)
    {
        $requete=array('idUtilisateur'=>$this->session->userdata('online'),'taille'=>$taille,'poids'=>$poids,'daty'=>$daty);
        $this->db->insert('detail_utilisateur',$requete);
    }

    public function getUser(){
        $idUser= $this->session->userdata('online');
        $sql='SELECT u.idUtilisateur,u.email,u.passwrd,u.username,u.numero,u.adresse,u.dtn,du.taille,du.poids from detail_utilisateur du join utilisateur u on du.idUtilisateur=u.idUtilisateur where u.idUtilisateur=%d order by daty desc limit 1';
        $sql=sprintf($sql,$idUser);
        $sql=$this->db->query($sql);
        $result=$sql->row_array();
        return $result;
    }
}