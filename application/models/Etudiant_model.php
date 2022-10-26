<?php 

class Etudiant_model extends CI_Model
{
	public $table='etudiant';

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->table ='etudiant';
	}

	public function insert_etudiant($_data)
	{
        return $this->db->insert($this->table, $_data);
	}
	 
	public function select_etudiant()
	{
        return $this->db->select('*')
            ->from($this->table)
            ->get()
            ->result();
	}
	 
}

 ?>