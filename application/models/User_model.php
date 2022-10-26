<?php 

class User_model extends CI_Model
{
	public $table='user';

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->table ='user';
	}

	public function insert_user($_data)
	{
        return $this->db->insert($this->table, $_data);
	}

	public function check_user($login)
	{
		$query = $this->db->query("SELECT * FROM ".$this->table." WHERE login ='".$login."'");
		return $query->result();
	}
	 
}

 ?>