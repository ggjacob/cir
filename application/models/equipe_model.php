<?php

if (!defined('BASEPATH'))
    exit('No direct script access');

class Equipe_model extends CI_Model {

    //php 5 constructor
    function __construct() {
        parent::__construct();
    }

    function get($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('tb_equipe');
        return $query->result();
    }
    
     function listar($id) {
        $query = $this->db->get('tb_equipe');
        return $query->result();
    }

}

?>