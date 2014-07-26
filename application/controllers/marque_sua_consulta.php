<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Marque_sua_consulta extends CI_Controller {

    public function index() {
        echo "oi";
        exit();
        $data['controller'] = "marque-sua-consulta";
        $data['info'][0]->nome = "Marcar Consulta";
        $data['info'][0]->title = "Marque sua Consulta - Hospital Odontológico CIR Premier";
        $data['info'][0]->keywords = "Perguntas e Respostas";
        $data['info'][0]->description = "O Hospital Odontológico CIR Premier oferece um agendamento de consulta online simples e segur. Confira!";
        $data['info'][0]->url = "marque-sua-consulta";
        $data['info'][0]->banner = "marcacao-consulta-banner.jpg";
        $this->load->view('marque_sua_consulta', $data);
    }

    public function enviar() {
        $data = $this->input->post();
        $this->load->model('consulta_model');
        $this->consulta_model->cadastrar($data);
        echo true;   

//        $NewId = "6133651000";
//        $val = $this->input->post('celular');
//        $mensagem = "O Hospital Odontológico Cir, em alguns minutos, estará entrando em contato para confirmação da sua consulta. Desde já agradecemos.";
//        $posting = "NumUsu=exdental&Senha=soluc785&SeuNum=" . $NewId . "&Celular=" . $val . "&Mensagem=" . urlencode($mensagem);
//        $postlength = strlen($posting);
//
//        $ktstring = "POST /reluzcap/wsreluzcap.asmx/EnviaSMS HTTP/1.1\r\n";
//        $ktstring .= "Host: webservices.twwwireless.com.br\r\n";
//        $ktstring .= "Content-Length: $postlength\r\n";
//        $ktstring .= "Content-Type: application/x-www-form-urlencoded\r\n";
//        $ktstring .= "Connection: Close\r\n\r\n";
//
//        $fp = fsockopen("ssl://webservices.twwwireless.com.br", 443, $errno, $errstr, 30);
//        if (!$fp) {
//            echo "$errstr ($errno)<br>\n";
//        } else {
//            fputs($fp, $ktstring);
//            fputs($fp, $posting);
//            $buffer = "";
//            while (!feof($fp)) {
//                $buffer .= fgets($fp, 1024);
//            }
//            fclose($fp);
//        }
//
//
//
//        $NewId = "";
//        //$val = "(61)9125-8857";
//        // $val = "(61)9219-9178";
//        $val = "(61)8451-1856";
//        $mensagem = "Marcação de consulta. Nome: " . $this->input->post('nome') . ". Telefones:" . $this->input->post('celular') . "/" . $this->input->post('telefone');
//        $posting = "NumUsu=exdental&Senha=soluc785&SeuNum=" . $NewId . "&Celular=" . $val . "&Mensagem=" . urlencode($mensagem);
//        $postlength = strlen($posting);
//
//        $ktstring = "POST /reluzcap/wsreluzcap.asmx/EnviaSMS HTTP/1.1\r\n";
//        $ktstring .= "Host: webservices.twwwireless.com.br\r\n";
//        $ktstring .= "Content-Length: $postlength\r\n";
//        $ktstring .= "Content-Type: application/x-www-form-urlencoded\r\n";
//        $ktstring .= "Connection: Close\r\n\r\n";
//
//        $fp = fsockopen("ssl://webservices.twwwireless.com.br", 443, $errno, $errstr, 30);
//        if (!$fp) {
//            echo "$errstr ($errno)<br>\n";
//        } else {
//            fputs($fp, $ktstring);
//            fputs($fp, $posting);
//            $buffer = "";
//            while (!feof($fp)) {
//                $buffer .= fgets($fp, 1024);
//            }
//            fclose($fp);
//        }
        
    }

}
