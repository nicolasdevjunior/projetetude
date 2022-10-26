<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authentification extends CI_Controller {
    
    public function __construct()
	{
		parent::__construct();
		$this->load->model("User_model", 'user');
		$this->load->helper(array('form', 'url','assets','filtres_session'));
		$this->load->library('session','form_validation');
	}
    
    public function index()
	{
		session_home();
        $this->load->view('admin/login');
	}

	public function check_user()
	{		
		$this->load->library('form_validation');
		$login = $this->input->post("login");
		$password = md5($this->input->post("password"));
		$this->form_validation->set_rules('login', '"Nom d\'utilisateur"', 'required');
        $this->form_validation->set_rules('password', '"Mot de passe"', 'required');
        if ($this->form_validation->run()) {
	        $user = $this->user->check_user($login);
			if(!empty($user))
			{
				if($user[0]->password == $password)
				{
					$this->session->set_userdata(
                        array(
                            "password"      => $user[0]->password,
                            "login"      => $user[0]->login,
                            'nom'         => $user[0]->nom,
                            'prenom'  => $user[0]->prenom,
                            'email'   => $user[0]->email,
                            'fonction'       => $user[0]->fonction,
                            'id'   => $user[0]->user_id
                        )
                    );
					redirect("Admin/index");
				}else{
	                $data["message"] = "Votre mot de passe est incorrect";
	                $this->load->view('admin/login',$data);
				}
			}else{
	            $data["message"] = "Votre login est incorrect";
	            $this->load->view('admin/login',$data);
			}
		}else
		{
			$this->load->view('admin/login',"refresh");
		}
	}

}
