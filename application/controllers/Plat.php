<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Plat extends CI_Controller {

    public function listePlat(){
        $this->load->model('Plat_model');
        $data['list']= $this->Plat_model->listePlat();
        $data['contents']='plat/listePlat';
        $data['title']='YourDiet';
		$data['description']='';
		$data['keywords']='';
        $this->load->view('template',$data);
    }

    public function updatePage(){
        $id= $this->input->post('idPlat');
        $nom = $this->input->post('nom');
        $types= $this->input->post('types');
        $prix= $this->input->post('prix');
        $this->load->model('Plat_model');
        $data['list']= $this->Plat_model->listeTypePlat();
        $data['idPlat']=$id;
        $data['nom']=$nom;
        $data['types']=$types;
        $data['prix']=$prix;
        $data['contents']='plat/updatePlat';
        $data['title']='YourDiet';
		$data['description']='';
		$data['keywords']='';
        $this->load->view('template',$data);
    }

    public function updatePlat(){
        $id= $this->input->post('idPlat');
        $nom = $this->input->post('nom');
        $types= $this->input->post('types');
        $prix= $this->input->post('prix');
        $this->load->model('Plat_model');
        $this->Plat_model->updatePlat($id,$nom,$types,$prix);
        redirect('Plat/listePlat');
    }

    public function delete(){
        $id= $this->input->post('idPlat');
        $this->load->model('Plat_model');
        $this->Plat_model->deletePlat($id);
        redirect('Plat/listePlat');
    }

    public function insertPlatPage()
    {
        $this->load->model('Plat_model');
        $data['contents']='plat/insertPlat';
        $data['title']='YourDiet';
		$data['description']='';
		$data['keywords']='';
        $data['typePlat']=$this->Plat_model->getTypePlat();
        $this->load->view('template',$data);
    }

    public function insertPlat()
    {
        $this->load->model('Plat_model');
        $nom = $this->input->post('nom');
        $idTypePlat = $this->input->post('idTypePlat');
        $prix = $this->input->post('prix');

        if (!empty($_FILES['image']['name']))
        {
            // Set preference
            $config['upload_path'] = 'assets/img/';
            $config['allowed_types'] = 'jpg|jpeg|png|JPG|JPEG|PNG';
            $config['file_name'] = $_FILES['image']['name'];
            $config['max_size'] = '30000';
            // Load upload library
            $this->load->library('upload', $config);
            // File upload
            try{
                $this->upload->do_upload('image');
            }
            catch(Exception $exp)
            {}
        }
        $this->Plat_model->insertPlat($nom,$idTypePlat,$prix,$_FILES['image']['name']);
        redirect(site_url('Plat/listePlat'));
    }
}