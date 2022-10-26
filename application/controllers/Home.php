<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    
    public function __construct()
	{
		parent::__construct();
		//$this->load->model("User_model", 'user');
		$this->load->helper(array('form', 'url')); 
		$this->load->helper(array('form', 'url','assets','filtres_session'));
		//$this->load->library('session');
	}
		public function index()
	{
		$this->load->library('layout');
        $this->layout->set_titre('Home');
        $this->layout->view('home/home');
	}
}
