<?php 

if (! defined('BASEPATH')) exit('No direct script access');
    

        
        
class Noticias_model extends CI_Model {

    
        private $tabela = "tb_noticias";
	//php 5 constructor
	function __construct() {
		parent::__construct();
	}
	
	
	function listar($qt) {
		$this->db->limit($qt);
                $this->db->order_by('id','random');
                $query = $this->db->get($this->tabela);
		return $query->result();	
	}
	
}
?>