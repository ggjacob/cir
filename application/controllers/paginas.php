<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class paginas extends CI_Controller {

    public function index($controller = "", $metodo = "") {

        $data['controller'] = $controller;
        $data['metodo'] = $metodo;

        // verifica se existe essa controller
        $this->load->model('pagina_model');
        $data['info'] = $this->pagina_model->info_tratamento($controller);

        if ($controller == "") {
            $data['controller'] = "home";
            $data['info'][0] = new stdClass();
            $data['info'][0]->nome = "Hospital Odontológico Cir";
            $data['info'][0]->titulo = "Hospital Odontológico Cir";
            $data['info'][0]->keywords = "Implante Dentário, Clareamento Dentário, ExertO Osseo, Brasília, Clinica, Dentista, Odontologia";
            $data['info'][0]->description = "Especializado em implante dentário, clareamento, protese e saúde bucal. Hospital Odontológico Cir Premier tem tudo em um só lugar.";
            $data['info'][0]->url = "marque-sua-consulta";
            $data['banner'] = true;
            $this->load->model('modulos_model');
            $data['tratamentos'] = $this->pagina_model->listar_tratamentos(4);
            $data['destaques'] = $this->modulos_model->modulos_destaque_home(4);
            //blog
            $data['blog'] = $this->pagina_model->post_ultimos(4, '2014-10-04');
            $this->load->view('home', $data);
        } else{
            //verifica se existe algum metodo
            if (!empty($metodo)) {
                //se for lightbox
                if ($this->input->post('lightbox')) {
                    $this->load->model('modulos_model');
                    $this->load->model('perguntas_model');
                    $data['modulos'] = $this->modulos_model->listar_por_tratamento($data['info'][0]->id);
                    $data['modulo'] = $this->modulos_model->get($metodo);
                    $data['modulo_destaque'] = $this->modulos_model->modulo_destaque($data['info'][0]->id);
                    $data['equipe'] = $this->pagina_model->listar_equipe($data['info'][0]->id);
                    $data['relacionados'] = $this->pagina_model->listar_relacionados($data['info'][0]->id);
                    $data['perguntas'] = $this->perguntas_model->filtrar($data['info'][0]->id);
                    $this->load->view('pagina_interna_lightbox', $data);
                    // se for video    
                } elseif ($this->input->post('video')) {
                    if ($this->input->post('video') == "profissional") {
                        $data['id_profissional'] = $this->input->post('id');
                        $this->load->model('equipe_model');
                        $data['equipe'] = $this->pagina_model->listar_equipe($data['info'][0]->id);
                        $data['toda_equipe'] = $this->equipe_model->listar($data['info'][0]->id);
                        $data['profissional'] = $this->equipe_model->get($data['id_profissional']);
                        $this->load->view('pagina_interna_equipe', $data);
                    }
                    // se for pagina    
                } else {
                    $this->load->model('modulos_model');
                    $this->load->model('perguntas_model');
                    $data['modulos'] = $this->modulos_model->listar_por_tratamento($data['info'][0]->id);
                    $data['modulo'] = $this->modulos_model->get($metodo);
                    $data['modulo_destaque'] = $this->modulos_model->modulo_destaque($data['info'][0]->id);
                    $data['relacionados'] = $this->pagina_model->listar_relacionados($data['info'][0]->id);
                    $data['perguntas'] = $this->perguntas_model->filtrar($data['info'][0]->id);
                    $this->load->view('pagina_interna_texto', $data);
                }
                // chama pagina da controller    
            }else{
                $this->load->model('modulos_model');
                $this->load->model('perguntas_model');
                $data['modulos'] = $this->modulos_model->listar_por_tratamento($data['info'][0]->id);
                $data['modulo_destaque'] = $this->modulos_model->modulo_destaque($data['info'][0]->id);
                $data['modulo_video_destaque'] = $this->modulos_model->modulo_video_destaque($data['info'][0]->id);
                $data['relacionados'] = $this->pagina_model->listar_relacionados($data['info'][0]->id);
                $data['posts'] = $this->pagina_model->post_relacionados($data['info'][0]->id, 8);
                $data['equipe'] = $this->pagina_model->listar_equipe($data['info'][0]->id);
                $data['perguntas'] = $this->perguntas_model->filtrar($data['info'][0]->id);
                $data['blog'] = $this->pagina_model->post_relacionados($controller, 6);
                $this->load->view('pagina', $data);
            }
        }
    }

    public function url() {
        $this->load->model('modulos_model');
        $modulos = $this->modulos_model->listar();
        foreach ($modulos as $value) {
            $data['url'] = $this->slugify($value->titulo);
            $this->modulos_model->slug($value->id_modulo, $data);
        }
    }

    public function slugify($text) {
        // replace non letter or digits by -
        $text = preg_replace('~[^\\pL\d]+~u', '-', $text);
        // trim
        $text = trim($text, '-');
        // transliterate
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
        // lowercase
        $text = strtolower($text);
        // remove unwanted characters
        $text = preg_replace('~[^-\w]+~', '', $text);
        if (empty($text)) {
            return 'n-a';
        }
        return $text;
    }

    public function error() {
        echo "Página não encontrada";
        exit();
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
