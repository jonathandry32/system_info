<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regime_model extends CI_Model
{
    public function insertRegime($nom,$duree,$prix,$plats,$activites,$data){
        $repartition = $this->Regime_model->getCatPlat();
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
        foreach($repartition as $rp)
        {
            $query2="INSERT INTO repartition_regime(idRegime,idCatPlat,valeur) values(".$idRegime.",".$this->Regime_model->getTheCatPlat($rp['nom']).",".$data[$rp['nom']].")";
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
    
    public function getActualId(){
        $query= $this->db->query('SELECT idRegime FROM regime_utilisateur where idUtilisateur='.$this->session->userdata('online'));
        $data=array();
        foreach($query->result_array() as $row){
            array_push($data,$row);
        }
        return $data;
    }

    public function getById($idRegime){
        $sql='SELECT * FROM regime where idRegime='.$idRegime;
        $sql=$this->db->query($sql);
        $result=$sql->row_array();
        return $result;
    }
    
    function generatePDF($id)
    {
        include('Pdf.php');
        $pdf = new PDF();
        $pdf->AddPage();
        $plt = $this->Regime_model->getDetailsPlats($id);
        $a = $this->Regime_model->getDetailsActivites($id);
        $temp="0";
        foreach($plt as $p){
            $temp=$p;
        }
        $pdf->nomRegime($temp['reg']);
        $pdf->prixRegime($temp['prix']);
        $pdf->plats($plt);
        $pdf->activites($a);
        $pdf->SetFont('Times', '', 12);
        $pdf->Output();
    }

    public function getCatPlat()
    {   
        $sql="select*from cat_plat";
        $query=$this->db->query($sql);
        $results = $query->result_array();
        return $results;
    }

    public function getTheCatPlat($nom)
    {
        $sql="select*from cat_plat where nom='".$nom."'";
        $query=$this->db->query($sql);
        $results = $query->result_array();
        foreach($results as $res)
        {
            $valiny=$res['idCatPlat'];
        }
        return $valiny;
    }
}