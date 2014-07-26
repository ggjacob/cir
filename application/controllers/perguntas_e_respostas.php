<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class perguntas_e_respostas extends CI_Controller {

    public function index($controller = "") {


        $this->load->model('pagina_model');
        $this->load->model('modulos_model');
        $this->load->model('perguntas_model');
        
        
       

        if ($controller == "") {
            $controller = "implante-dentario";
        }
 
        $info = $this->pagina_model->info_tratamento($controller);
        
        $data['controller'] = $controller;
        $data['info'][0]->nome = "Perguntas e Respostas";
        $data['info'][0]->title = "Perguntas e Respostas";
        $data['info'][0]->keywords = "Perguntas e Respostas";
        $data['info'][0]->description = "Retire suas dúvidas sobre implante dentário e tratamentos mais realizados. Caso tenha mais alguma duúvida entre em contato com o Hospital Odontológico CIR Premier";
        $data['info'][0]->url = "perguntas-e-repostas";
        $data['info'][0]->banner = "pergunta-banner.jpg";


        $data['paginas'] = $this->pagina_model->listar_tratamentos();
        foreach ($data['paginas'] as $key => $value) {
            $value->title = $this->slugConverter($value->url);
        }
        $data['perguntas'] = $this->perguntas_model->filtrar_interna( $info[0]->id);
        $this->load->view('perguntas_e_respostas', $data);
    }

    function slugConverter($categoria) {
        switch ($categoria) {
            case 'plastica-gengival':
                $categoria = "Plástica Gengival";
                break;
            case 'lente-de-contato-em-porcelana':
                $categoria = "Lentes de Contato";
                break;
            case 'cancer_brasilia':
                $categoria = "Tratamento Oncologico";
                break;
            case 'voce-que-mora-fora':
                $categoria = "Tratamento Expresso";
                break;
            case 'tecnologia-na-odontologia':
                $categoria = "Novas Tecnologias";
                break;
            case 'implante-com-carga-imediata':
                $categoria = "Implante com Carga Imediata";
                break;
            case 'fobia-de-tratamento-dentario':
                $categoria = "Medo de Dentista";
                break;
            case 'tratamento-integrado':
                $categoria = "Tratamento Integrado";
                break;
            case 'estetica-dental':
                $categoria = "Estética Dental";
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
            case 'aurelio-belas':
                $categoria = "Aurélio Belas";
                break;
            case 'aparelho-ortodontico':
                $categoria = "Aparelho Ortodôntico";
                break;
        }
        return $categoria;
    }

     public function cadastrar() {
        $data = $this->input->post();
        $this->load->model('perguntas_model');
        $resultado = $this->perguntas_model->cadastrar($data);
        if ($resultado) {
            echo true;
        } else {
            echo false;
        }
    }

    public function buscar() {
        
        $data = $this->input->post();
        
         $this->load->model('perguntas_model');
        $perguntas = $this->perguntas_model->filtrar_por_chave($data['key']);
      
        if(!empty($perguntas)) {
            foreach ($perguntas as $key) {

                echo "<li style='padding-top:25px;' id='".$key->id."'> 
                       <h3 style='margin-left: 0px;'>".$key->pergunta."</h3>         
                       <p>".$key->resposta."</p>
                    </li>";
            }
        } else {
            echo "<li style='padding-top:25px;'>Nenhum resultado encontrado</li>";
        }
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */