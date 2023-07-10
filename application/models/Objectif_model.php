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
    public function predict($typeObj,$kg,$poids,$taille)
    {   
        $sql="select r.idRegime,r.nom,r.prix from objectif_utilisateur ou join regime r on ou.idRegime=r.idRegime where type_objectif=".$typeObj." and minvaleur<".$kg." and maxvaleur>".$kg." and poidsmin<".$poids." and poidsmax>".$poids." and taillemin<".$taille." and taillemax>".$taille;
        $query=$this->db->query($sql);
        $results = $query->result_array();
        return $results;
    }
    public function payer($joursAajouter,$valeur,$idRegime){
        date_default_timezone_set('Europe/Moscow');
        $currentDateTime = date('Y-m-d H:i:s');
        $dateFin = date('Y-m-d', strtotime($currentDateTime . ' + ' . $joursAajouter . ' days'));
        $requete=array('idUtilisateur'=>$this->session->userdata('online'),'idRegime'=>$idRegime,'debut'=>$currentDateTime,'fin'=>$dateFin);
        $this->db->insert('regime_utilisateur',$requete);
        $requete2=array('idUtilisateur'=>$this->session->userdata('online'),
                'valeur'=>$valeur,
                'types'=>"sortie",
                'daty'=>$currentDateTime
        );
         $this->db->insert('caisse',$requete2);
    }

    public function insertObjectif($type,$minval,$maxval,$poidsmin,$poidsmax,$taillemin,$taillemax,$idRegime){
        $sql='INSERT INTO objectif_utilisateur(type_objectif,minvaleur,maxvaleur,poidsmin,poidsmax,taillemin,taillemax,idRegime) values (%d,%d,%d,%d,%d,%d,%d,%d)';
        $sql=sprintf($sql,$type,$minval,$maxval,$poidsmin,$poidsmax,$taillemin,$taillemax,$idRegime);
        $this->db->query($sql);
    }
}