<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Monnai_model extends CI_Model {
        public function __construct()
        {
            parent::__construct();
        }

        public function achat($code)
        {   
            $sql="select*from code where code='".$code."' and utilisable=1";
            $query=$this->db->query($sql);
            $results = $query->result_array();
            foreach($results as $res)
            {
                date_default_timezone_set('Europe/Moscow');
                $currentDateTime = date('Y-m-d H:i:s');
                $requete=array('idCode'=>$res['idCode'],
                'idUtilisateur'=>$this->session->userdata('online'),
                'daty'=>$currentDateTime);
                $this->db->insert('validation_code',$requete);
            }
        }

        public function listCode()
        {   
            $sql="select * from code";
            $query=$this->db->query($sql);
            $results = $query->result_array();
            return $results;
        }

        public function portefeuille()
        {
            $sql="SELECT SUM(CASE WHEN types = 'entre' THEN valeur ELSE -valeur END) AS solde
            FROM caisse where idUtilisateur=
            ".$this->session->userdata('online');

            $query=$this->db->query($sql);
            $results = $query->result_array();
            $result=0;
            foreach($results as $res)
            {
                $result=$result+$res['solde'];
            }
            return $result;
        }

        public function insertCode($code,$valeur,$utilisable)
        {
            $requete=array('code'=>$code,'valeur'=>$valeur,'utilisable'=>$utilisable);
            $this->db->insert('code',$requete);
        }

        public function getValidation()
        {   
            $sql="SELECT validation_code.idUtilisateur,validation_code.idCode,utilisateur.username AS utilisateur, validation_code.daty AS date, code.code, code.valeur AS montant FROM validation_code JOIN utilisateur ON validation_code.idUtilisateur = utilisateur.idUtilisateur JOIN code ON validation_code.idCode = code.idCode";
            $query=$this->db->query($sql);
            $results = $query->result_array();
            return $results;
        }
        public function valider($code,$valeur,$idUsere)
        {   
            $sql="UPDATE code set utilisable=11 where idCode=".$code;
            $this->db->query($sql);
            $sql1="DELETE FROM validation_code where idCode=".$code;
            $this->db->query($sql1);
            date_default_timezone_set('Europe/Moscow');
            $currentDateTime = date('Y-m-d H:i:s');
            $requete=array('idUtilisateur'=>$idUsere,
                'valeur'=>$valeur,
                'types'=>"entre",
                'daty'=>$currentDateTime
            );
            $this->db->insert('caisse',$requete);
        }
    }
?>