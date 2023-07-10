<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Login_model extends CI_Model {
        public function __construct()
        {
            parent::__construct();
        }

        public function check($user,$mdp)
        {
            $array = array('email' => $user, 'passwrd' => $mdp);
            $this->db->where($array);
            $query = $this->db->get('utilisateur');
            $results = $query->result_array();
            foreach($results as $result)
            {
                $this->session->set_userdata('online',$result['idUtilisateur']);
                $this->session->set_userdata('name',$result['username']);
                $this->session->set_userdata('isAdmin',$result['isAdmin']);
                return true;
            }
            $this->session->set_userdata('error_login');
            return false;
        }

        public function getGenre()
        {   
            $sql="select*from genre";
            $query=$this->db->query($sql);
            $results = $query->result_array();
            return $results;
        }

        public function inscription($email,$passwrd,$username,$idGenre,$numero,$adresse,$dtn,$taille,$poids)
        {
            $requete=array('email'=>$email,'passwrd'=>$passwrd,'username'=>$username,
            'idGenre'=>$idGenre,'numero'=>$numero,'adresse'=>$adresse,'dtn'=>$dtn,'isAdmin'=>0);
            $this->db->insert('utilisateur',$requete);

            $idUtilisateur = $this->db->insert_id();
            date_default_timezone_set('Europe/Moscow');
            $currentDateTime = date('Y-m-d H:i:s');
            $requete=array('idUtilisateur'=>$idUtilisateur,'taille'=>$taille,'poids'=>$poids,'daty'=>$currentDateTime);
            $this->db->insert('detail_utilisateur',$requete);
        }
    }
?>