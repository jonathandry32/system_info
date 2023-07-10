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

    public function getDetailsPlats($idRegime){
        $sql='SELECT distinct r.nom as reg,r.duree,r.prix,p.nom as plat,tp.nom as types,cp.nom as categ FROM detail_regime dr join regime r on dr.idRegime=r.idRegime join plat p on dr.idPlat=p.idPlat join type_plat tp on tp.idTypePlat=p.idTypePlat join detail_plat dp on dp.idPlat=p.idPlat join cat_plat cp on cp.idCatPlat=dp.idCatPlat where r.idRegime=%d';
        $sql=sprintf($sql,$idRegime);
        $data=array();
        $sql=$this->db->query($sql);
        foreach($sql->result_array() as $row){
            array_push($data,$row);
        }
        return $data;
    }

    public function getDetailsActivites($idRegime){
        $sql='SELECT a.nom as act,a.quantite,u.nom as unite FROM detail_regime dr join activite a on a.idActivite=dr.idActivite join unite u on a.unite=u.idUnite where dr.idRegime=%d';
        $sql=sprintf($sql,$idRegime);
        $data=array();
        $sql=$this->db->query($sql);
        foreach($sql->result_array() as $row){
            array_push($data,$row);
        }
        return $data;
    }


}