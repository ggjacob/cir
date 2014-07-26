<?php

class Consulta_model extends CI_Model {

    function cadastrar($data) {
        $this->db->insert('tb_agenda',$data);
       
    }
    
}