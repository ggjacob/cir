<?php include('header.php'); ?>

<div class="container">
    <div class="row timeline"> <!-- ROW -->
        <div class="consulta-box-esquerda">
            <h2 style="margin-left: 0px; margin-top: 5px;">Marque sua consulta:</h2>

            <form class="form-horizontal box_marcacao" role="form" id="form" novalidate="novalidate" style="margin-top: 15px;">  
                <div class="form-group">
                    <label  class="col-sm-12 text-left">Como Conheceu:</label>
                    <div class="col-sm-12">
                        <label class="radio-inline">
                            <input name="como_conheceu" type="radio"  value="facebook"> Facebook
                        </label>
                        <label class="radio-inline">
                            <input name="como_conheceu" type="radio" value="google"> Google
                        </label>
                        <label class="radio-inline">
                            <input name="como_conheceu" type="radio" value="tv"> TV
                        </label>
                        <label class="radio-inline">
                            <input name="como_conheceu" type="radio" value="revista"> Revista
                        </label>
                        <label class="radio-inline">
                            <input name="como_conheceu" type="radio" value="indicacao"> Indicação
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <label  class="col-sm-2 control-label">Nome:</label>
                    <div class="col-sm-10">
                        <input type="text" name="nome"  class="form-control" placeholder="Nome Completo">
                    </div>
                </div>
                <div class="form-group">
                    <label  class="col-sm-2 control-label">E-mail:</label>
                    <div class="col-sm-10">
                        <input type="email" name="email" class="form-control" id="inputPassword3" placeholder="E-mail">
                    </div>
                </div>

                <div class="form-group">
                    <label  class="col-sm-2 control-label">Telefone:</label>
                    <div class="col-sm-10">
                        <input type="tel" id="telefone" name="telefone" class="form-control"  placeholder="Telefone">
                    </div>
                </div>

                <div class="form-group">
                    <label  class="col-sm-2 control-label">Celular:</label>
                    <div class="col-sm-10">
                        <input type="tel" id="celular" name="celular" class="form-control"  placeholder="Celular">
                    </div>
                </div>

                <div class="form-group">
                    <label  class="col-sm-2 control-label">Data:</label>
                    <div class="col-sm-10">
                        <input type="text" name="data" id="datepicker" class="form-control"  placeholder="Data da Consulta">
                    </div>
                </div>

                <div class="form-group">
                    <label  class="col-sm-2 control-label">Horário:</label>
                    <div class="col-sm-10">
                        <select class="form-control" placeholder="Horário" name="hora">
                            <option selected="true" style="display:none;">Horário da Consulta</option>
                            <option value="8:30">8:30</option>
                            <option value="9:00">9:00</option>
                            <option value="9:30">9:30</option>
                            <option value="10:00">10:00</option>
                            <option value="10:30">10:30</option>
                            <option value="11:00">11:00</option>
                            <option value="11:30">11:30</option>
                            <option value="14:00">14:00</option>
                            <option value="14:30">14:30</option>
                            <option value="15:00">15:00</option>
                            <option value="15:30">15:30</option>
                            <option value="16:00">16:00</option>
                            <option value="16:30">16:30</option>
                            <option value="17:00">17:00</option>
                            <option value="17:30">17:30</option>
                            <option value="18:00">18:00</option>
                            <option value="18:30">18:30</option>
                        </select>
                    </div>
                </div>


                <div class="form-group">
                    <div class="col-sm-11">
                        <button type="submit" class="btn  btn-primary">Enviar</button>
                    </div>
                </div>
            <input type="hidden" name="mobile" value="0">
            </form>
            
            <div class="formulario_resposta hidden text-center">
                <span class="titulo_produtos">
                    Consulta marcada com sucesso!
                </span>
                <br><br>
                <img src="http://www.xradioconverge.com.br/assets/img/ok.png" class="center-block img-responsive">
                Em breve entraremos em contato, para confirmação da mesma.


            </div>



        </div>

        <div class="consulta-box-direita">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3838.097292752009!2d-47.910940999999944!3d-15.851482999999993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935a256fef3b8c09%3A0xad2dced5db2cf967!2sHospital+Odontol%C3%B3gico+Cir!5e0!3m2!1spt-BR!2sbr!4v1396371370762" width="600" height="450" frameborder="0" style="border:0"></iframe>
        </div>


        <div class="profissionais" style="margin-top: 15px; width:100%; border-top: 8px solid #ccc;margin-bottom: 20px;padding-bottom: 10px;height: 370px;">
            <div class="texto">
                <h2>COMO CHEGAR</h2>
                <h3>VÍDEOS DE COMO CHEGAR NO CIR A PARTIR DE VÁRIOS LOCAIS</h3>
            </div>
            <div class="clearfix"></div>
            <div >
                <ul>
                    <li class="locais"> 
                        <a  data-id_profissional="19" href="http://www.youtube.com/embed/sBOM1-W0aWw?rel=0" class="link-video" data-video="sBOM1-W0aWw" >
                            <img src="<?php echo base_url() . 'images/aeroporto.png' ?>" alt="Aeroporto Brasília">
                        </a>
                    </li>
                    <li class="locais"> 
                        <a  data-id_profissional="5" href="http://www.cir.com.br/novo//video" class="link-video" data-video="enewu6L9KoQ" >
                            <img  src="<?php echo base_url() . 'images/asa_sul.png' ?>" alt="Asa Sul">

                        </a>
                    </li>
                    <li class="locais"> 
                        <a  data-id_profissional="21" href="http://www.youtube.com/embed/sBOM1-W0aWw?rel=0" class="link-video" data-video="HtEW-RXXt_g">
                            <img src="<?php echo base_url() . 'images/ponte_jk.png' ?>" alt="Ponte JK">

                        </a>
                    </li>
                    <li class="locais"> 
                        <a  data-id_profissional="38" href="http://www.cir.com.br/novo//video" class="link-video" data-video="QY_E3cByMVQ">
                            <img src="<?php echo base_url() . 'images/ponte_costa_silva.png' ?>" alt="Ponte Costa e Silva">

                        </a>
                    </li>
                    <li class="locais"> 
                        <a  data-id_profissional="40" href="http://www.cir.com.br/novo//video" class="link-video" data-video="zuN-J9aTiJU">
                            <img  src="<?php echo base_url() . 'images/ponte_garcas.png' ?>" alt="Ponte das Garças">

                        </a>
                    </li>
                </ul>
            </div>
        </div>


    </div> <!-- ROW -->
</div> <!-- CONTAINER -->

<?php include('footer.php'); ?>
<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<script>
    
    $(document).ready(function() {
        
          

		$( "#datepicker" ).datepicker({
			inline: true,
			showOtherMonths: true,
                        dateFormat: 'dd/mm/yy',
    dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado'],
    dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
    dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
    monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
    monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez'],
    nextText: 'Próximo',
    prevText: 'Anterior'

		});
	
	

        $.validator.setDefaults({
            submitHandler: function() {
                var $datastring = $('#form').serialize();
                jQuery.ajax({
                    type: "POST",
                    url: "marque-sua-consulta/enviar",
                    data: $datastring,
                    success: function(response) {
                        if (response == "1") {
                            $('.formulario_resposta').removeClass('hidden')
                            $('#form').hide();
                        } else {
                            alert('Ocorreu um erro no agendamento, tente mais tarde novamente');
                        }
                    }
                });
            }

        });
        $('#telefone').mask('(99) 9999-9999');
        $('#celular').mask('(99) 9999-9999?9');
    });
    $().ready(function() {
        // validate the comment form when it is submitted

        $("#form").validate({
            rules: {
                nome: "required",
                email: "required",
                telefone: "required"
            },
            messages: {
                nome: "",
                email: "",
                telefone: ""
            },
        });
    });

</script>


