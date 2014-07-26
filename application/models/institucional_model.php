<?php 

if (! defined('BASEPATH')) exit('No direct script access');

class Institucional_model extends CI_Model {

	//php 5 constructor
	function __construct() {
		parent::__construct();
	}
        
         function info($id) {
		$this->db->where('id',$id);
		$query = $this->db->get('tb_institucional');
		return $query->row();	
	}
	
	
	function listar() {
                $this->db->order_by('sequencia','desc');
		$query = $this->db->get('tb_institucional');
                
		return $query->result();	
	}
 }
?>