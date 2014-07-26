<?php

if (!defined('BASEPATH'))
    exit('No direct script access');

class Modulos_model extends CI_Model {

    private $tabela = "tb_modulos";

    function __construct() {
        parent::__construct();
    }

    function listar_por_tratamento($tratamento) {
        $this->db->where('tratamento', $tratamento);
        $this->db->where('modulo_destaque', 0);
        $this->db->order_by('sequencia', 'desc');
        $query = $this->db->get($this->tabela);
        return $query->result();
    }

    function listar_institucional($tratamento) {
        $this->db->where('tratamento', $tratamento);
        $this->db->order_by('sequencia', 'desc');
        $query = $this->db->get($this->tabela);
        return $query->result();
    }

    function get($url) {
        $this->db->where('url', $url);
        $query = $this->db->get($this->tabela);
        return $query->result();
    }

    function listar() {
        $query = $this->db->get($this->tabela);
        return $query->result();
    }

    function update($id,$data) {
        $this->db->where('id_modulo', $id);
        $this->db->update($this->tabela,$data);
    }

    function slug($id, $data) {
        $this->db->where('id_modulo', $id);
        $this->db->update($this->tabela, $data);
    }

    function modulo_destaque($tratamento) {
        $this->db->where('tratamento', $tratamento);
        $this->db->where('modulo_destaque', 1);
        $this->db->where('tipo', 'imagem');
        $this->db->order_by('sequencia', 'desc');
        $query = $this->db->get($this->tabela);
        return $query->result();
    }

    function modulos_destaque_home($limit) {
        $this->db->select('*');
        $this->db->from('tb_modulos');
        $this->db->join('tb_paginas', 'tb_paginas.id = tb_modulos.tratamento');
        $this->db->where('modulo_destaque', 1);
        $this->db->where('tipo !=', 'video');
         $this->db->where('home', 1);
        $this->db->order_by('tb_paginas.ordem', 'asc');
        $this->db->limit($limit);
        $query = $this->db->get();
        return $query->result();
    }

    function modulo_video_destaque($tratamento) {
        $this->db->where('tratamento', $tratamento);
        $this->db->where('modulo_destaque', 1);
        $this->db->where('tipo', 'video');
        $this->db->order_by('sequencia', 'desc');
        $query = $this->db->get($this->tabela);
        return $query->result();
    }

}

?>