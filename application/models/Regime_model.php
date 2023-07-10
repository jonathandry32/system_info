<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regime_model extends CI_Model
{
    public function insertRegime($nom,$duree,$prix,$plats,$activites){
        $sql="INSERT INTO regime(nom,duree,prix) values (%s,%d,%d)";
        $sql=sprintf($sql,$this->db->escape($nom),$duree,$prix);
        $this->db->query($sql);
        $idRegime = $this->db->insert_id();
        for($i=0; $i<count($plats);$i++){
            $query1='INSERT INTO detail_regime(idRegime,idPlat,idActivite) values(%d,%d,0)';
            $query1=sprintf($query1,$idRegime,$plats[$i]);
            $this->db->query($query1);
        }
        for($i=0; $i<count($activites); $i++){
            $query2='INSERT INTO detail_regime(idRegime,idPlat,idActivite) values(%d,0,%d)';
            $query2=sprintf($query2,$idRegime,$activites[$i]);
            $this->db->query($query2);
        }
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