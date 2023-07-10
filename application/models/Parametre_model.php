<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Parametre_model extends CI_Model {
        public function __construct()
        {
            parent::__construct();
        }

        public function getAllParametre()
        {   
            $sql="select * from parametre";
            $query=$this->db->query($sql);
            $results = $query->result_array();
            return $results;
        }

        public function insert($nom)
        {
            $requete=array('nom'=>$nom);
            $this->db->insert('parametre',$requete);
        }

        public function update($idParametre,$nom)
        {
            $data=array(
                'nom'=>$nom
            );
            $this->db->where('idParametre',$idParametre);
            $this->db->update('parametre',$data);
        }

        public function delete($idParametre)
        {
            $this->db->where('idParametre',$idParametre);
            $this->db->delete('parametre');
        }
    }
?>