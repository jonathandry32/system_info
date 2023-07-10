<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Utilisateur_model extends CI_Model
{
    
    public function insertDetailUtilisateur($taille,$poids,$daty)
    {
        $requete=array('idUtilisateur'=>$this->session->userdata('online'),'taille'=>$taille,'poids'=>$poids,'daty'=>$daty);
        $this->db->insert('detail_utilisateur',$requete);
    }
}