<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Plat_model extends CI_Model
{
    public function listePlat(){
        $query= $this->db->query('SELECT idPlat, p.nom as plat,t.nom as types, prix, picture FROM plat p join type_plat t on p.idTypePlat=t.idTypePlat');
        $data=array();
        foreach($query->result_array() as $row){
            array_push($data,$row);
        }
        return $data;
    }

    public function updatePlat($idPlat,$nom,$idType,$prix){
        $sql='UPDATE plat set nom=%s,idTypePlat=%d, prix=%d where idPlat=%d';
        $sql=sprintf($sql,$this->db->escape($nom),$idType,$prix,$idPlat);
        $this->db->query($sql);
    }

    public function deletePlat($idPlat){
        $sql='DELETE FROM plat where idPlat=%d';
        $sql=sprintf($sql,$idPlat);
        $this->db->query($sql);
    }

    public function listeTypePlat(){
        $query= $this->db->query('SELECT * from type_plat');
        $data=array();
        foreach($query->result_array() as $row){
            array_push($data,$row);
        }
        return $data;
    }

    public function insertPlat($nom,$idTypePlat,$prix,$picture)
    {
        $requete=array('nom'=>$nom,'idTypePlat'=>$idTypePlat,'prix'=>$prix,'picture'=>$picture);
        $this->db->insert('plat',$requete);
    }

    public function getTypePlat()
    {   
        $sql="select*from type_plat";
        $query=$this->db->query($sql);
        $results = $query->result_array();
        return $results;
    }
}