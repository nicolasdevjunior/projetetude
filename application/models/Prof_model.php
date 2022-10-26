<?php 

class Prof_model extends CI_Model
{
	public $table='professeur';

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->table ='professeur';
	}

	public function insert_prof($_data)
	{
        return $this->db->insert($this->table, $_data);
	}
	 
	public function select_prof()
	{
        return $this->db->select('*')
            ->from($this->table)
            ->get()
            ->result();
	}
}

 ?>