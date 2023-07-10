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
            $sql="SELECT 
            (SELECT SUM(valeur) FROM caisse WHERE types = 'entre' AND idUtilisateur = 1) -
            (SELECT SUM(valeur) FROM caisse WHERE types = 'sortie' AND idUtilisateur = 1) AS portefeuille
            FROM dual";
            $query=$this->db->query($sql);
            $results = $query->result_array();
            $result=0;
            foreach($results as $res)
            {
                $result=$result+$res['portefeuille'];
            }
            return $result;
        }
    }
?>