<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regime_model extends CI_Model
{
    public function insertRegime($nom,$duree,$prix){
        $sql="INSERT INTO regime(nom,duree,prix) values (%s,%d,%d)";
        $sql=sprintf($sql,$this->db->escape($nom),$duree,$prix);
        $this->db->query($sql);
    }

    public function listeRegime(){
        $query= $this->db->query('SELECT * FROM regime');
        $data=array();
        foreach($query->result_array() as $row){
            array_push($data,$row);
        }
        return $data;
    }

    public function updateRegime($idRegime,$nom,$duree,$prix){
        $sql='UPDATE regime set nom=%s, duree=%d, prix=%d where idRegime=%d';
        $sql=sprintf($sql,$this->db->escape($nom),$duree,$prix,$idRegime);
        $this->db->query($sql);
    }

    public function deleteRegime($idRegime){
        $sql='DELETE FROM regime where idRegime=%d';
        $sql=sprintf($sql,$idRegime);
        $this->db->query($sql);
    }
}