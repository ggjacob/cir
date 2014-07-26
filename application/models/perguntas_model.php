<?php

if (!defined('BASEPATH'))
    exit('No direct script access');

class Perguntas_model extends CI_Model {

    //php 5 constructor
    function __construct() {
        parent::__construct();
    }

    function listar_perguntas_relacionadas($categoria) {
        $this->db->where('email', '');
        $this->db->where('id_tratamento', $categoria);
        $this->db->where('status', 1);
        $this->db->limit(10);
        $query = $this->db->get('tb_pergunta');
        return $query->result();
    }
    
    function cadastrar($data) {
        $data['categoria'] = $this->slugConverter($data['categoria']);
        $data['status'] = 0;
        return $this->db->insert('tb_pergunta',$data);
    }

    function filtrar($categoria) {
       
        $this->db->where('email', '');
        $this->db->where('status', 1);
        $this->db->limit(10);
        $this->db->where('id_tratamento', $categoria);
        $query = $this->db->get('tb_pergunta');
        // echo $this->db->last_query();
        return $query->result();
    }
    
    function filtrar_interna($categoria) {
     
        $this->db->where('email', '');
        $this->db->where('status', 1);
        $this->db->where('id_tratamento', $categoria);
        $query = $this->db->get('tb_pergunta');
        // echo $this->db->last_query();
        return $query->result();
    }
    
    function filtrar_por_chave($chave) {
        
        $this->db->where('email', '');
        $this->db->where('status', 1);
        
        $this->db->like('pergunta', $chave);
        $query = $this->db->get('tb_pergunta');
     //    echo $this->db->last_query();
        return $query->result();
    }

    function listar_perguntas() {
        $this->db->where('status', 1);
        $this->db->where('email', '');
        $query = $this->db->get('tb_pergunta');
        return $query->result();
    }

    function slugConverter($categoria){
        switch ($categoria) {
            case 'plastica-gengival':
                $categoria = "Plástica Gengival";
                break;
            case 'tratamento-ortodontico':
                $categoria = "Tratamento Ortodôntico";
                break;
            case 'protese-dentaria':
                $categoria = "Prótese Dentária";
                break;
            case 'blocos-ceromero':
                $categoria = "Blocos de Cerômero";
                break;
            case 'clareamento-dentario':
                $categoria = "Clareamento Dentário";
                break;
            case 'enxerto-osseo':
                $categoria = "Enxerto Ósseo";
                break;
            case 'controle-periodontal':
                $categoria = "Controle Periodontal";
                break;
            case 'facetas-de-resina':
                $categoria = "Facetas de Resina";
                break;
            case 'implante-dentario':
                $categoria = "Implante Dentário";
                break;
            case 'controle-periodontal':
                $categoria = "Controle Periodontal";
                break;
            case 'melhor-idade':
                $categoria = "Melhor Idade";
                break;
            case 'biossegurança':
                $categoria = "Biossegurança";
                break;
            case 'orientacao-pos-operatorias':
                $categoria = "Orientações Pós-Operatórias";
                break;
            case 'orientacao-pre-operatorias':
                $categoria = "Orientações Pré-Operatórias";
                break;
        }
        return $categoria;
    }
    
    
    function buscar($palavras) {
        $this->db->where('status', 1);
        $this->db->where('email', '');
        foreach ($palavras as $key => $value) {
            $query = $this->db->like('pergunta', $value, 'both');
        }
        $query = $this->db->get('tb_pergunta');
        return $query->result();
    }

}

?>