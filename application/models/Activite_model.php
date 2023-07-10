<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Activite_model extends CI_Model
{
    public function insertActivite($nom,$quantite,$unite){
        $sql='INSERT INTO activite(nom,quantite,unite) values(%s,%d,%d)';
        $sql=sprintf($sql,$this->db->escape($nom),$quantite,$unite);
        $this->db->query($sql);
    }

    public function listeActivite(){
        $query= $this->db->query('SELECT idActivite,a.nom as act,quantite,u.idUnite,u.nom as unite FROM activite a join unite u on a.unite=u.idUnite');
        $data=array();
        foreach($query->result_array() as $row){
            array_push($data,$row);
        }
        return $data;
    }

    public function updateActivite($idActivite,$nom,$quantite,$unite){
        $sql='UPDATE activite set nom=%s, quantite=%d, unite=%d where idActivite=%d';
        $sql=sprintf($sql,$this->db->escape($nom),$quantite,$unite,$idActivite);
        $this->db->query($sql);
    }

    public function deleteActivite($idActivite){
        $sql='DELETE FROM activite where idActivite=%d';
        $sql=sprintf($sql,$idActivite);
        $this->db->query($sql);
    }

    public function listeUnite(){
        $query= $this->db->query('SELECT * FROM unite');
        $data=array();
        foreach($query->result_array() as $row){
            array_push($data,$row);
        }
        return $data;
    }
}