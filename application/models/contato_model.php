<?php

class Contato_model extends CI_Model {
	
	private $table = 'tb_contato';

	function inserir($data) {
		if ($this->db->insert( $this->table , $data ))
			return 1;
		else
			return 0;
	}
	
}
