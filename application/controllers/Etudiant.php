<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Etudiant extends CI_Controller {
    
    public function __construct()
	{
		parent::__construct();
		$this->load->model("Etudiant_model", 'etudiant');
		$this->load->helper(array('form', 'url')); 
		$this->load->helper(array('form', 'url','assets','filtres_session'));
		$this->load->library('session');
	}
    
    public function index()
	{
		session_user();
		$data["etudiant"] = $this->etudiant->select_etudiant();
		$this->load->library('layout_admin');
        $this->layout_admin->set_titre('Liste etudiant');
        $this->layout_admin->view('admin/direction/etudiant',$data);
	}

	public function ajouter_etudiant()
	{
		session_user();
		$this->load->library('layout_admin');
        $this->layout_admin->set_titre('Ajout etudiant');
        $this->layout_admin->view('admin/direction/add_etudiant');
	}

	public function add_etudiant_req()
	{
	    session_user();
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->form_validation->set_rules('adresse', '"Adresse"', 'required');
        $this->form_validation->set_rules('nom', '"Nom"', 'required');
        $this->form_validation->set_rules('prenom', '"Prénom"', 'required');
        $this->form_validation->set_rules('numero', '"Numero"', 'required');
        $this->form_validation->set_rules('niveau', '"Niveau"', 'required');
        $this->form_validation->set_rules('matricule', '"Matricule"', 'required');
        $this->form_validation->set_rules('lieu_naissance', '"Lieu de naissance"', 'required');
        $this->form_validation->set_rules('date_naissance', '"Date de naissance"', 'required');
        if($this->form_validation->run()) {
		    //$this->load->model('prof_model','prof');
		    $nom = $this->input->post("nom");
            $prenom = $this->input->post("prenom");
            $dossierEtudiant = 'assets/photo_ism/etudiant/'.$nom.$prenom;
		    $photosEtudiant = 'assets/photo_ism/etudiant/'.$nom.$prenom.'/photos';
			 if(!is_dir($dossierEtudiant)){
			    mkdir($dossierEtudiant);
			    mkdir($photosEtudiant);
			}
		    $file_img=$this->input->post('photo');
				$config['upload_path']          = './assets/photo_ism/etudiant/'.$nom.$prenom.'/photos';
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
                        $date_naissance = $this->input->post("date_naissance");
                        $datenaissance = explode("/", $date_naissance);
                        $date=$datenaissance[2]."-".$datenaissance[1]."-".$datenaissance[0];
                        $_data = array(
				      		'nom' => $this->input->post("nom"),
							'prenom' => $this->input->post("prenom"),
							'numero' => $this->input->post("numero"),
							'matricule' => $this->input->post("matricule"),
							'filiere' => $this->input->post("filiere"),
							'niveau' => $this->input->post("niveau"),
							'date_naissance' =>$date,
							'lieu_naissance' => $this->input->post("lieu_naissance"),
							'adresse' => $this->input->post("adresse"),
							'photo_et' =>  $this->upload->data('file_name'),
							'pere' => $this->input->post("pere"),
							'numero_pere' => $this->input->post("numero_pere"),
							'mere' => $this->input->post("mere"),
							'numero_mere' => $this->input->post("numero_mere"),
							'tuteur' => $this->input->post("tuteur"),
							'numero_tuteur' => $this->input->post("numero_pere"),
					        );
					    if ($this->etudiant->insert_etudiant($_data)){
					    	$this->session->set_flashdata('success_add', 'Etudiant ajouté avec succès');
				            redirect("etudiant/ajouter_etudiant");
				        }
                } 	
        }else{
            $this->load->library('layout_admin');
            $this->layout_admin->set_data($this->session->userdata());
            $this->layout_admin->set_titre('Ajout etudiant');
            $this->layout_admin->view('admin/direction/add_etudiant');
        }
	}
}
