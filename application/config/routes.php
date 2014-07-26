<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller'] = "paginas";
$route['404_override'] = '';

//$route['paginas/url'] = "paginas/url"; 

//Controller - Faq
$route['faq'] = "faq/index";
$route['faq/cadastrar'] = "faq/cadastrar";

//Controller - Perguntas e Respostas
$route['perguntas-e-respostas'] = "perguntas-e-respostas/index";
$route['perguntas-e-respostas/(:any)'] = "perguntas-e-respostas/index/$1";
$route['perguntas-e-respostas/buscar'] = "perguntas-e-respostas/buscar";

//Controller - Contato
$route['contato'] = "contato/index";
$route['contato/enviar'] = "contato/enviar";

//Controller - Curriculo
$route['curriculo'] = "curriculo/index";
$route['curriculo/(:any)'] = "curriculo/index/$1";

//Controller - Marcar Consulta
$route['marque-sua-consulta'] = "marque-sua-consulta/index";
$route['marque-sua-consulta/enviar'] = "marque-sua-consulta/enviar";

/*  ADMIN  */
$route['admin/index/paginas'] = "admin/index/paginas";
$route['admin/index/paginas/(:any)'] = "admin/index/paginas/$1";

//Controller - Paginas
$route['(:any)/(:any)'] = "paginas/index/$1/$2";
$route['(:any)'] = "paginas/index/$1";



/* End of file routes.php */
/* Location: ./application/config/routes.php */