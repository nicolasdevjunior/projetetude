<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Professeur extends CI_Controller {
    
    public function __construct()
	{
		parent::__construct();
		$this->load->model("prof_model", 'prof');
		$this->load->helper(array('form', 'url')); 
		$this->load->helper(array('form', 'url','assets','filtres_session'));
		$this->load->library('session');
	}
    
    public function index()
	{
		session_user();
		$data["prof"] = $this->prof->select_prof();
		$this->load->library('layout_admin'); 
        $this->layout_admin->set_titre('Liste professeur');
        $this->layout_admin->view('admin/direction/professeur',$data);
	}

	public function ajouter_prof($da= null)
	{
		session_user();
		$this->load->library('layout_admin');
        $this->layout_admin->set_titre('Ajouter professeur');
        $this->layout_admin->view('admin/direction/add_prof');
	}

	public function add_professeur_req()
	{
		session_user();
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->form_validation->set_rules('adresse', '"Nom"', 'required');
        $this->form_validation->set_rules('nom', '"Nom"', 'required');
        $this->form_validation->set_rules('prenom', '"Prénom"', 'required');
        $this->form_validation->set_rules('email', '"Email"', 'required');
        $this->form_validation->set_rules('numero', '"Numero"', 'required');
        $this->form_validation->set_rules('cin', '"CIN"', 'required');
        $this->form_validation->set_rules('matiere', '"Matiere"', 'required');
        if($this->form_validation->run()) {
		    //$this->load->model('prof_model','prof');
		    $nom = $this->input->post("nom");
            $prenom = $this->input->post("prenom");
            $dossierProfesseur = 'assets/photo_ism/professeur/'.$nom.$prenom;
		    $photosProfesseur = 'assets/photo_ism/professeur/'.$nom.$prenom.'/photos';
			 if(!is_dir($dossierProfesseur)){
			    mkdir($dossierProfesseur);
			    mkdir($photosProfesseur);
			}
		    $file_img=$this->input->post('photo');
				$config['upload_path']          ='./assets/photo_ism/professeur/'.$nom.$prenom.'/photos';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['max_size']             = 0;
                $config['max_width']            = 4024;
                $config['max_height']           = 4068;
                $this->load->library('upload', $config);	
               if (!$this->upload->do_upload('photo'))
                {
                        $error = array('error' => $this->upload->display_errors());
                }
                else
                {
                   
                        $data = array('upload_data' => $this->upload->data());
	                   //var_dump($this->upload->data('file_name'));die;
                        $_data = array(
				      		'nom' => $this->input->post("nom"),
							'prenom' => $this->input->post("prenom"),
							'numero' => $this->input->post("numero"),
							'cin' => $this->input->post("cin"),
							'adresse' => $this->input->post("adresse"),
							'matiere' => $this->input->post("matiere"),
							'photo' => $this->upload->data('file_name'),
							'email' => $this->input->post("email")
					        );
					    if ($this->prof->insert_prof($_data)){
					    	$this->session->set_flashdata('success_add', 'Professeur ajouté avec succès');
				            redirect("professeur/ajouter_prof");
				        }
                } 	
        }else{
            $this->load->library('layout_admin');
            $this->layout_admin->set_data($this->session->userdata());
            $this->layout_admin->set_titre('Admin');
            $this->layout_admin->view('admin/direction/add_prof');
        }
	}
}
