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


    }
?>