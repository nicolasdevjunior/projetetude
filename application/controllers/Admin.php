<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    
    public function __construct()
	{
		parent::__construct();
		//$this->load->model("User_model", 'user');
		$this->load->helper(array('form', 'url')); 
		$this->load->helper(array('form', 'url','assets','filtres_session'));
		$this->load->library('session');
	}
    
    public function index()
	{
		session_user();
		$this->load->library('layout_admin');
        $this->layout_admin->set_titre('Admin');
        $this->layout_admin->view('admin/direction/home');
	}
  
    public function create_access_user()
    {
    	session_user();
    	$this->load->library('layout_admin');
        $this->layout_admin->set_titre("Créer un point d'accèss");
        $this->layout_admin->view('admin/direction/create_access');
    }


	public function pointaccess_req()
	{
		session_user();
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->form_validation->set_rules('login', '"Login"', 'required');
		$this->form_validation->set_rules('password', '"Mot de passe"', 'required');
        $this->form_validation->set_rules('nom', '"Nom"', 'required');
        $this->form_validation->set_rules('prenom', '"Prénom"', 'required');
        $this->form_validation->set_rules('email', '"email"', 'required');
        $this->form_validation->set_rules('fonction', '"fonction"', 'required');
        $this->form_validation->set_rules('passwordconfirm', '"Confirmer mot de passe"', 'required');

        $password = md5($this->input->post("password"));
	        if($this->form_validation->run()) {
			$this->load->model("User_model", 'user');
			$_data = array(
				'login' => $this->input->post("nom"),
				'password' => $password,
				'fonction' => $this->input->post("fonction"),
				'nom' => $this->input->post("nom"),
				'prenom' => $this->input->post("prenom"),
				'email' => $this->input->post("email")
				);
			if($this->user->insert_user($_data))
			{
				$this->session->set_flashdata('success_add', 'Point d\'accèes user créer avec succès');
			   redirect("Admin/create_access_user");
			}
	    }else{
	    	$this->load->library('layout_admin');
            $this->layout_admin->set_data($this->session->userdata());
            $this->layout_admin->set_titre("Créer un point d'accèss");
            $this->layout_admin->view('admin/direction/create_access');
	    }
	}
    
    public function logout()
	{
		$this->session->sess_destroy();
		redirect("Authentification/index");
	}
}
