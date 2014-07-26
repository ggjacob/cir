<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php echo $titulo; ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/extralayers.css" media="screen" />	
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/settings.css" media="screen" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/main.css">
        <script src="<?php echo base_url(); ?>js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <script type="text/javascript" src="//use.typekit.net/omm8aqq.js"></script>
        <script type="text/javascript">try {
                Typekit.load();
            } catch (e) {
            }</script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- <a class="navbar-brand" href="#"><img src="<?php echo base_url(); ?>img/logo-xs.png" alt="Hospital Cir Premier" /></a>-->
                </div>
                <div class="navbar-collapse collapse">
                    <div class="col-md-5"> 
                        <ul>
                            <li><a href="#"><img src="<?php echo base_url(); ?>img/icone-tratamentos.png" alt="tratamento" />Tratamentos</a></li>
                            <li><a href="#"><img src="<?php echo base_url(); ?>img/icone-institucional.png" alt="tratamento" />Institucional</a></li>
                            <li><a href="#"><img src="<?php echo base_url(); ?>img/icone-telefone.png" alt="tratamento" />Contato</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2">
                        <a class="navbar-brand" href="#"><img src="<?php echo base_url(); ?>img/logo-xs.png" alt="Hospital Cir Premier" /></a>
                    </div>
                    <div class="col-md-5">
                        <div>
                            <form id="procurar" class="form-inline">
                                <div class="form-group">
                                    <input type="email" class="form-control"  placeholder="Buscar">
                                    <img src="<?php echo base_url(); ?>img/search.png" alt="procurar" />
                                </div>
                            </form>
                        </div>
                        <div class="telefone">
                            <img src="<?php echo base_url(); ?>img/icone-telefone.png" alt="tratamento" />(61) 3365-1000
                        </div>
                    </div>
                </div><!--/.navbar-collapse -->
            </div>
        </div>


        <div id="banner" class="container-fluid row">
            <div class="tp-banner-container">
                <div class="tp-banner" >
                    <ul>	<!-- SLIDE  -->
                        <li data-transition="fade" data-slotamount="7" data-masterspeed="2000" >
                            <!-- MAIN IMAGE -->
                            <img src="<?php echo base_url(); ?>img/banner/bg-implante.jpg" alt="Implante Dentário Hospital Cir"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                            <!-- LAYERS -->
                            <div class="tp-caption"
                                 data-x="left"
                                 data-y="top"
                                 data-start="800"
                                 data-speed="600"
                                 data-easing="Back.easeIn"
                                 >
                                <img src="<?php echo base_url(); ?>img/banner/implante-triangulos.png" alt="implante dentario triangulos" />
                            </div>
                            <div class="tp-caption"
                                 data-x="right"
                                 data-y="top"
                                 data-start="1200"
                                 data-speed="600"
                                 data-easing="Back.easeIn"
                                 >
                                <img src="<?php echo base_url(); ?>img/banner/implante-doutor.png" alt="implante dentario triangulos" />
                            </div>
                            <div class="tp-caption  banner-implante-texto1"
                                 data-x="50"
                                 data-y="170" 
                                 data-speed="400"
                                 data-start="1500"
                                 data-easing="Power3.easeInOut"
                                 data-splitin="words"
                                 data-splitout="none"
                                 data-elementdelay="0.1"
                                 data-endelementdelay="0.1"
                                 style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;"
                                 >Implante Dentário
                            </div>
                            <div class="tp-caption banner-implante-texto2"
                                 data-x="49"
                                 data-y="250"
                                 data-splitin="words"
                                 data-splitout="none"
                                 data-start="1800"
                                 data-speed="400"
                                 data-elementdelay="0.1"
                                 data-endelementdelay="0.1"
                                 data-easing="Power3.easeInOut"
                                 >
                                importado com tecnologia de ponta.
                            </div>
                            <div class="tp-caption banner-implante-texto3"
                                 data-x="435"
                                 data-y="250"
                                 data-splitin="words"
                                 data-splitout="none"
                                 data-start="1800"
                                 data-speed="400"
                                 data-elementdelay="0.1"
                                 data-endelementdelay="0.1"
                                 data-easing="Power3.easeInOut"
                                 >
                                Clique e confira.
                            </div>
                        </li>
                    </ul>
                    <div class="tp-bannertimer"></div>
                </div>
            </div>

        </div> <!-- /container -->  


        <div class="container-fluid home-tratamentos">
            <div class="container">
                <div class="sombra-div text-center">
                    <img src="<?php echo base_url(); ?>img/shadow.png" alt="sombra das divs"/>
                </div>
                <div>
                    <h2>Tudo em um só lugar</h2>
                </div>
                <div class="row text-center">
                    <div class="col-md-3">
                        <img class="img-responsive img-thumbnail" src="<?php echo base_url(); ?>img/tratamentos/implante.jpg" alt="Implante Dentário" />
                        <img class="sombra" src="<?php echo base_url(); ?>img/tratamentos/shadow.png" alt="sombra dos tratamentos"/>
                        <div class="clearfix"></div>
                        <h3>Enxerto Ósseo</h3>
                        <p>O enxerto ósseo é um procedimento cirúrgico realizado em pacientes que não possuem quantidade óssea adequada para receber os implantes dentários. </p>
                    </div>                
                    <div class="col-md-3">
                        <img class="img-responsive img-thumbnail" src="<?php echo base_url(); ?>img/tratamentos/clareamento.jpg" alt="Implante Dentário" />
                        <img class="sombra" src="<?php echo base_url(); ?>img/tratamentos/shadow.png" alt="sombra dos tratamentos"/>
                        <div class="clearfix"></div>
                        <h3>Enxerto Ósseo</h3>
                        <p>O enxerto ósseo é um procedimento cirúrgico realizado em pacientes que não possuem quantidade óssea adequada para receber os implantes dentários. </p>
                    </div>
                    <div class="col-md-3">
                        <img class="img-responsive img-thumbnail" src="<?php echo base_url(); ?>img/tratamentos/cerec.jpg" alt="Implante Dentário" />
                        <img class="sombra" src="<?php echo base_url(); ?>img/tratamentos/shadow.png" alt="sombra dos tratamentos"/>
                        <div class="clearfix"></div>
                        <h3>Enxerto Ósseo</h3>
                        <p>O enxerto ósseo é um procedimento cirúrgico realizado em pacientes que não possuem quantidade óssea adequada para receber os implantes dentários. </p>
                    </div>
                    <div class="col-md-3 ">
                        <img class="img-responsive img-thumbnail" src="<?php echo base_url(); ?>img/tratamentos/protese-dentaria.jpg" alt="Implante Dentário" />
                        <img class="sombra" src="<?php echo base_url(); ?>img/tratamentos/shadow.png" alt="sombra dos tratamentos"/>
                        <div class="clearfix"></div>
                        <h3>Enxerto Ósseo</h3>
                        <p>O enxerto ósseo é um procedimento cirúrgico realizado em pacientes que não possuem quantidade óssea adequada para receber os implantes dentários. </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid home-agendamento">
            <div class="container bg-agendamento">
                <div class="sombra-div text-center">
                    <img src="<?php echo base_url(); ?>img/shadow.png" alt="sombra das divs"/>
                </div>
                <div class="col-md-8">
                    <img class="img-implante" src="<?php echo base_url(); ?>img/casal-agendamento.png" alt="mais de 25 mil implantes realizados" />
                </div>   
                <div class="col-md-4">
                    <div class="box-agendamento">
                        <div class="box-header-agendamento">
                            <img src="<?php echo base_url(); ?>img/icone-agendamento.png" alt="Agendamento de Consulta" />
                            <h2>Preencha agora e <strong>marque sua consulta.</strong></h2>
                            <form id="form-agendamento" method="post">
                                <div class="checkbox text-center row">
                                    <ul>
                                        <li class="col-md-3">
                                            <input name="como_conheceu" type="radio"><br /><span>Google</span> 
                                        </li>
                                        <li class="col-md-3">
                                            <input name="como_conheceu" type="radio"><span>Facebook</span> 
                                        </li>
                                        <li class="col-md-3">
                                            <input name="como_conheceu" type="radio"><span>Televisão</span>
                                        </li>
                                        <li class="col-md-3">
                                            <input name="como_conheceu" type="radio" ><span>Indicação</span>  
                                        </li>
                                    </ul>
                                </div>

                                <input name="nome" type="text" class="form-control"  placeholder="Nome Completo">
                                <input name="email" type="email" class="form-control"  placeholder="E-mail">
                                <input name="telefone" type="tel" class="form-control"  placeholder="Telefone">
                                <input name="celular" type="tel" class="form-control"  placeholder="Celular">
                                <input name="data_consulta" type="text" class="form-control"  placeholder="Data da sua Consulta">
                                <input name="horario" type="text" class="form-control"  placeholder="Horário da sua Consulta">
                                <a  href="#" id="btn-agendamento" class="btn btn-cir">Agendar Consulta </a> 
                                <div class="clearfix"></div>
                            </form>

                        </div>
                    </div>
                </div>   
            </div>
        </div>


        <div class="container-fluid home-tratamentos-lista">
            <div class="container">
                <div class="sombra-div text-center">
                    <img src="<?php echo base_url(); ?>img/shadow.png" alt="sombra das divs"/>
                </div>
                <div>
                    <h2>Tratamentos</h2>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-3 row">
                            <img src="<?php echo base_url(); ?>img/icones/implante.png" alt="icone-implante-dentario" />
                        </div>
                        <div class="col-md-9">
                            <h3>Implante Dentário</h3>
                            <p>Implantes dentários são  estruturas de metal instalados no osso maxilar abaixo da gengiva.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-3 row">
                            <img src="<?php echo base_url(); ?>img/icones/implante.png" alt="icone-implante-dentario" />
                        </div>
                        <div class="col-md-9">
                            <h3>Implante Dentário</h3>
                            <p>Implantes dentários são  estruturas de metal instalados no osso maxilar abaixo da gengiva.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-3 row">
                            <img src="<?php echo base_url(); ?>img/icones/implante.png" alt="icone-implante-dentario" />
                        </div>
                        <div class="col-md-9">
                            <h3>Implante Dentário</h3>
                            <p>Implantes dentários são  estruturas de metal instalados no osso maxilar abaixo da gengiva.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-3 row">
                            <img src="<?php echo base_url(); ?>img/icones/implante.png" alt="icone-implante-dentario" />
                        </div>
                        <div class="col-md-9">
                            <h3>Implante Dentário</h3>
                            <p>Implantes dentários são  estruturas de metal instalados no osso maxilar abaixo da gengiva.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-3 row">
                            <img src="<?php echo base_url(); ?>img/icones/implante.png" alt="icone-implante-dentario" />
                        </div>
                        <div class="col-md-9">
                            <h3>Implante Dentário</h3>
                            <p>Implantes dentários são  estruturas de metal instalados no osso maxilar abaixo da gengiva.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-3 row">
                            <img src="<?php echo base_url(); ?>img/icones/implante.png" alt="icone-implante-dentario" />
                        </div>
                        <div class="col-md-9">
                            <h3>Implante Dentário</h3>
                            <p>Implantes dentários são  estruturas de metal instalados no osso maxilar abaixo da gengiva.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-3 row">
                            <img src="<?php echo base_url(); ?>img/icones/implante.png" alt="icone-implante-dentario" />
                        </div>
                        <div class="col-md-9">
                            <h3>Implante Dentário</h3>
                            <p>Implantes dentários são  estruturas de metal instalados no osso maxilar abaixo da gengiva.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-3 row">
                            <img src="<?php echo base_url(); ?>img/icones/implante.png" alt="icone-implante-dentario" />
                        </div>
                        <div class="col-md-9">
                            <h3>Implante Dentário</h3>
                            <p>Implantes dentários são  estruturas de metal instalados no osso maxilar abaixo da gengiva.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-3 row">
                            <img src="<?php echo base_url(); ?>img/icones/implante.png" alt="icone-implante-dentario" />
                        </div>
                        <div class="col-md-9">
                            <h3>Implante Dentário</h3>
                            <p>Implantes dentários são  estruturas de metal instalados no osso maxilar abaixo da gengiva.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-3 row">
                            <img src="<?php echo base_url(); ?>img/icones/implante.png" alt="icone-implante-dentario" />
                        </div>
                        <div class="col-md-9">
                            <h3>Implante Dentário</h3>
                            <p>Implantes dentários são  estruturas de metal instalados no osso maxilar abaixo da gengiva.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-3 row">
                            <img src="<?php echo base_url(); ?>img/icones/implante.png" alt="icone-implante-dentario" />
                        </div>
                        <div class="col-md-9">
                            <h3>Implante Dentário</h3>
                            <p>Implantes dentários são  estruturas de metal instalados no osso maxilar abaixo da gengiva.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-3 row">
                            <img src="<?php echo base_url(); ?>img/icones/implante.png" alt="icone-implante-dentario" />
                        </div>
                        <div class="col-md-9">
                            <h3>Implante Dentário</h3>
                            <p>Implantes dentários são  estruturas de metal instalados no osso maxilar abaixo da gengiva.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-3 row">
                            <img src="<?php echo base_url(); ?>img/icones/implante.png" alt="icone-implante-dentario" />
                        </div>
                        <div class="col-md-9">
                            <h3>Implante Dentário</h3>
                            <p>Implantes dentários são  estruturas de metal instalados no osso maxilar abaixo da gengiva.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-3 row">
                            <img src="<?php echo base_url(); ?>img/icones/implante.png" alt="icone-implante-dentario" />
                        </div>
                        <div class="col-md-9">
                            <h3>Implante Dentário</h3>
                            <p>Implantes dentários são  estruturas de metal instalados no osso maxilar abaixo da gengiva.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-3 row">
                            <img src="<?php echo base_url(); ?>img/icones/implante.png" alt="icone-implante-dentario" />
                        </div>
                        <div class="col-md-9">
                            <h3>Implante Dentário</h3>
                            <p>Implantes dentários são  estruturas de metal instalados no osso maxilar abaixo da gengiva.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid home-estrutura">
            <div class="container">
                <div class="sombra-div text-center">
                    <img src="<?php echo base_url(); ?>img/shadow.png" alt="sombra das divs"/>
                </div>
                <h2>O Hospital Odontológico Cir</h2>
                <div class="row">
                    <div class="col-md-6">
                        <h3>Fotos do Hospital</h3>
                        <div class="row"> 
                            <div class="col-md-4">
                                <img class="img-responsive img-thumbnail" src="<?php echo base_url(); ?>img/tratamentos/implante.jpg" alt="Implante Dentário" />
                                <img class="sombra" src="<?php echo base_url(); ?>img/tratamentos/shadow.png" alt="sombra dos tratamentos"/>
                            </div>
                            <div class="col-md-4">
                                <img class="img-responsive img-thumbnail" src="<?php echo base_url(); ?>img/tratamentos/implante.jpg" alt="Implante Dentário" />
                                <img class="sombra" src="<?php echo base_url(); ?>img/tratamentos/shadow.png" alt="sombra dos tratamentos"/>
                            </div>
                            <div class="col-md-4">
                                <img class="img-responsive img-thumbnail" src="<?php echo base_url(); ?>img/tratamentos/implante.jpg" alt="Implante Dentário" />
                                <img class="sombra" src="<?php echo base_url(); ?>img/tratamentos/shadow.png" alt="sombra dos tratamentos"/>
                            </div>
                            <div class="col-md-4">
                                <img class="img-responsive img-thumbnail" src="<?php echo base_url(); ?>img/tratamentos/implante.jpg" alt="Implante Dentário" />
                                <img class="sombra" src="<?php echo base_url(); ?>img/tratamentos/shadow.png" alt="sombra dos tratamentos"/>
                            </div>
                            <div class="col-md-4">
                                <img class="img-responsive img-thumbnail" src="<?php echo base_url(); ?>img/tratamentos/implante.jpg" alt="Implante Dentário" />
                                <img class="sombra" src="<?php echo base_url(); ?>img/tratamentos/shadow.png" alt="sombra dos tratamentos"/>
                            </div>
                            <div class="col-md-4">
                                <img class="img-responsive img-thumbnail" src="<?php echo base_url(); ?>img/tratamentos/implante.jpg" alt="Implante Dentário" />
                                <img class="sombra" src="<?php echo base_url(); ?>img/tratamentos/shadow.png" alt="sombra dos tratamentos"/>
                            </div>
                            <div class="col-md-4">
                                <img class="img-responsive img-thumbnail" src="<?php echo base_url(); ?>img/tratamentos/implante.jpg" alt="Implante Dentário" />
                                <img class="sombra" src="<?php echo base_url(); ?>img/tratamentos/shadow.png" alt="sombra dos tratamentos"/>
                            </div>
                            <div class="col-md-4">
                                <img class="img-responsive img-thumbnail" src="<?php echo base_url(); ?>img/tratamentos/implante.jpg" alt="Implante Dentário" />
                                <img class="sombra" src="<?php echo base_url(); ?>img/tratamentos/shadow.png" alt="sombra dos tratamentos"/>
                            </div>
                            <div class="col-md-4">
                                <img class="img-responsive img-thumbnail" src="<?php echo base_url(); ?>img/tratamentos/implante.jpg" alt="Implante Dentário" />
                                <img class="sombra" src="<?php echo base_url(); ?>img/tratamentos/shadow.png" alt="sombra dos tratamentos"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h3>Vídeos de tratamentos</h3>
                        <div class="row"> 
                            <div class="col-md-6">
                                <img class="img-responsive img-thumbnail" src="<?php echo base_url(); ?>img/tratamentos/implante.jpg" alt="Implante Dentário" />
                                <img class="sombra" src="<?php echo base_url(); ?>img/tratamentos/shadow.png" alt="sombra dos tratamentos"/>
                            </div>
                            <div class="col-md-6">
                                <img class="img-responsive img-thumbnail" src="<?php echo base_url(); ?>img/tratamentos/implante.jpg" alt="Implante Dentário" />
                                <img class="sombra" src="<?php echo base_url(); ?>img/tratamentos/shadow.png" alt="sombra dos tratamentos"/>
                            </div>
                            <div class="col-md-6">
                                <img class="img-responsive img-thumbnail" src="<?php echo base_url(); ?>img/tratamentos/implante.jpg" alt="Implante Dentário" />
                                <img class="sombra" src="<?php echo base_url(); ?>img/tratamentos/shadow.png" alt="sombra dos tratamentos"/>
                            </div>
                            <div class="col-md-6">
                                <img class="img-responsive img-thumbnail" src="<?php echo base_url(); ?>img/tratamentos/implante.jpg" alt="Implante Dentário" />
                                <img class="sombra" src="<?php echo base_url(); ?>img/tratamentos/shadow.png" alt="sombra dos tratamentos"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container-fluid home-newsletter">
            <div class="container text-center">
                <h2>Newsletter</h2>
                <p>Receba notícias, dicas e novidades sobre todos os tratamentos do Hospital Odontológico CIR.</p>
                <form>
                    <div class="col-md-5">
                        <input class="form-control"  type="text" name="nome" placeholder="Nome Completo" />
                    </div>
                    <div class="col-md-5">
                        <input class="form-control"  type="email" name="email" placeholder="E-mail" />
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-cir">Receber Novidades</button>
                    </div>
                </form>
            </div>
        </div>




        <div class="container-fluid home-blog">
            <div class="container">
                <div class="sombra-div text-center">
                    <img src="<?php echo base_url(); ?>img/shadow.png" alt="sombra das divs"/>
                </div>
                <h2>Tudo sobre Odontologia</h2>
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6">
                                <img class="img-responsive img-thumbnail" src="<?php echo base_url(); ?>img/tratamentos/implante.jpg" alt="Implante Dentário" />
                                <img class="sombra" src="<?php echo base_url(); ?>img/tratamentos/shadow.png" alt="sombra dos tratamentos"/>
                            </div>
                            <div>
                                <h3>Você tem dificuldade de mastigação</h3>
                                <p>
                                    Quando estamos comendo um alimento, nunca imaginamos a quantidade de músculos e articulações que entram em ação, pois, no ponto de vista odontológico, mastigar é bem mais complexo do que parece.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6">
                                <img class="img-responsive img-thumbnail" src="<?php echo base_url(); ?>img/tratamentos/implante.jpg" alt="Implante Dentário" />
                                <img class="sombra" src="<?php echo base_url(); ?>img/tratamentos/shadow.png" alt="sombra dos tratamentos"/>
                            </div>
                            <div>
                                <h3>Você tem dificuldade de mastigação</h3>
                                <p>
                                    Quando estamos comendo um alimento, nunca imaginamos a quantidade de músculos e articulações que entram em ação, pois, no ponto de vista odontológico, mastigar é bem mais complexo do que parece.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6">
                                <img class="img-responsive img-thumbnail" src="<?php echo base_url(); ?>img/tratamentos/implante.jpg" alt="Implante Dentário" />
                                <img class="sombra" src="<?php echo base_url(); ?>img/tratamentos/shadow.png" alt="sombra dos tratamentos"/>
                            </div>
                            <div>
                                <h3>Você tem dificuldade de mastigação</h3>
                                <p>
                                    Quando estamos comendo um alimento, nunca imaginamos a quantidade de músculos e articulações que entram em ação, pois, no ponto de vista odontológico, mastigar é bem mais complexo do que parece.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6">
                                <img class="img-responsive img-thumbnail" src="<?php echo base_url(); ?>img/tratamentos/implante.jpg" alt="Implante Dentário" />
                                <img class="sombra" src="<?php echo base_url(); ?>img/tratamentos/shadow.png" alt="sombra dos tratamentos"/>
                            </div>
                            <div>
                                <h3>Você tem dificuldade de mastigação</h3>
                                <p>
                                    Quando estamos comendo um alimento, nunca imaginamos a quantidade de músculos e articulações que entram em ação, pois, no ponto de vista odontológico, mastigar é bem mais complexo do que parece.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer>
            <div class="container">
                <div class="sombra-div text-center">
                    <img src="<?php echo base_url(); ?>img/shadow.png" alt="sombra das divs"/>
                </div>
                <div class="col-md-4">
                    <img src="<?php echo base_url(); ?>img/logo-rodape.jpg" alt="Logo Hospital Cir Premier" />
                </div>
                <div class="col-md-5 text-center">
                    Hospital Odontológico Cir, QI 03 Bloco G Lago Sul, Brasília - Distrito Federal <br /> 
                    +55 (61) 3365-1000, contato@cir.com.br<br /> 
                    CEP: 71605-460 <br /> <br /> 
                    Horário Comercial de segunda à sexta-feira, nos horários de 8h às 18h
                </div>
                <div class="col-md-3">cccc</div>
            </div>
        </footer>



        <script src="<?php echo base_url(); ?>js/vendor/jquery-1.11.0.js"></script>
        <script>window.jQuery || document.wite('<script src="<?php echo base_url(); ?>js/vendor/jquery-1.11.0.js"><\/script>')</script>
        <script src="<?php echo base_url(); ?>js/vendor/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>js/vendor/jquery.themepunch.tools.min.js"></script>
        <script src="<?php echo base_url(); ?>js/vendor/jquery.themepunch.revolution.min.js"></script>
        <script src="<?php echo base_url(); ?>js/main.js"></script>
        <script type="text/javascript">
            jQuery(document).ready(function() {

                jQuery('.tp-banner').revolution(
                        {
                            delay: 9000,
                            startwidth: 1170,
                            startheight: 500,
                            hideThumbs: 10,
                            fullWidth: "on",
                            forceFullWidth: "on"
                        });


                $('#btn-agendamento').click(function(event) {
                    event.preventDefault();
                    var dataform = $('#form-agendamento').serialize();
                    $.ajax({
                        type: "POST",
                        url: "sucesso.html",
                        data: dataform,
                        dataType: "html",
                        success: function(response) {

                            if (response == "1") {
                                $('#form-agendamento').hide();
                                $('#form-agendamento').show();
                            } else {

                            }
                        }
                    });

                });







            });	//ready

        </script>

    </body>
</html>
