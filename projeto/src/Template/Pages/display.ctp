<?php
    $NHora = '';$MHora = '';$NovaHora = '';
    $Hora = date('H:i');
    $NewHora = substr($Hora, -5,2);
    $MHora = substr($Hora, -2,2);
    $NHora = $NewHora - 3; 
    $NovaHora = $NHora.$MHora;

    $Qtd = '';
    foreach ($Evento as $value) {
          $Qtd = $value['qtd'];
    }

    if (( $NHora == '08') and ($MHora == '00') and ($Qtd > '0')){ ?>
          <div id="modal" class="modal">
                <script type="text/javascript">
                      function fechar(){
                          document.getElementById("modal").style.display = "none";   
                      }
                </script>
                <button onclick="fechar()">Fechar</button>
                <h2 align="center"><b>Atenção!</b><br> </h2>
                <h6 align="center"> Existem eventos pendentes a serem realizados.<br>
                                   Gentileza verificar clicando no botão de <br>
                                   <b>Consultar Eventos Pendentes</b>
                </h6>
          </div>
      <?php }else{}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title>Intranet Qualitex</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Clean responsive bootstrap website template">
  <meta name="author" content="">
  <link href='css/core/main.min.css' rel='stylesheet' />
        <link href='css/daygrid/main.min.css' rel='stylesheet' />
        <script src='js/core/main.min.js'></script>
        <script src='js/interaction/main.min.js'></script>
        <script src='js/daygrid/main.min.js'></script>
        <script src='js/core/locales/pt-br.js'></script>
  <!-- styles -->
  <link href="webroot/css/bootstrap.css" rel="stylesheet">
  <link href="webroot/css/bootstrap-responsive.css" rel="stylesheet">
  <link href="webroot/css/docs.css" rel="stylesheet">
  <link href="webroot/css/prettyPhoto.css" rel="stylesheet">
  <link href="webroot/js/google-code-prettify/prettify.css" rel="stylesheet">
  <link href="webroot/css/flexslider.css" rel="stylesheet">
  <link href="webroot/css/refineslide.css" rel="stylesheet">
  <link href="webroot/css/font-awesome.css" rel="stylesheet">
  <link href="webroot/css/animate.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400italic,400,600,700" rel="stylesheet">

  <link href="webroot/css/style.css" rel="stylesheet">
  <link href="webroot/color/default.css" rel="stylesheet">

  <!-- fav and touch icons -->
  <link rel="shortcut icon" href="webroot/ico/favicon.ico">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="webroot/ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="webroot/ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="webroot/ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="webroot/ico/apple-touch-icon-57-precomposed.png">
</head>
<body>
  <section id="maincontent">
        <div align="center">
          <?php
            echo $this->Html->link(__('Cadastrar Lembrete'), 
            array('controller'=>'Eventos','action'=>'evento'), 
            array('class' => 'btn btn-warning', 'escape' => false, 
              'data-toggle'=>'tooltip', 'title' => ''));
          ?>
          <?php
            echo $this->Html->link(__('Cadastrar Tipo do Lembrete'), 
            array('controller'=>'Eventos','action'=>'tipoevento'), 
            array('class' => 'btn btn-danger', 'escape' => false, 
              'data-toggle'=>'tooltip', 'title' => ''));
          ?>
        </div>
        <br>
        <div align="center">
          <?php
            echo $this->Html->link(__('<b>Lembretes Excluidos</b>'), 
            array('controller'=>'Eventos','action'=>'listlembrexclud'), 
            array('class' => 'btn btn-warning', 'escape' => false, 
            'data-toggle'=>'tooltip', 'title' => 'Consultar Lembretes Excluidos'));
          ?>
          <?php
            echo $this->Html->link(__('<b>Consultar Lembrete Pendentes</b>'), 
            array('controller'=>'Eventos','action'=>'periodpendentes'), 
            array('class' => 'btn btn-primary', 'escape' => false, 
            'data-toggle'=>'tooltip', 'title' => 'Consultar Lembrete Pendentes de Execução'));
          ?>
          <?php
            echo $this->Html->link(__('<b">Consultar Lembrete Concluidos</b>'), 
            array('controller'=>'Eventos','action'=>'periodconcluidos'), 
            array('class' => 'btn btn-success', 'escape' => false, 
            'data-toggle'=>'tooltip', 'title' => 'Consultar Lembrete Concluidos'));
          ?>
          <?php
            echo $this->Html->link(__('<b>Excluir Lembrete</b>'), 
            array('controller'=>'Eventos','action'=>'deletelembrete'), 
            array('class' => 'btn btn-warning', 'escape' => false, 
            'data-toggle'=>'tooltip', 'title' => 'Excluir Lembrete'));
          ?>
        </div>
  </section>

  <section id="maincontent">
   <div class="container">
    <div class="row">
      <article>
             
          <div class="span10">  
            <div class="flexslider">
              <ul class="slides">
                <li>
                  <section id="maincontent">
                    <div class="container">
                        <div class="span10" align="center">
                            <h2><i class="icon-calendar"></i> Calendário de eventos</h2>
                        </div>
                          <div class="row">
                            <div class="span10" >
                              <div id='calendar'></div><br>
                            </div>
                          </div>
                        </div>
                  </section>
                </li>                    
              </ul>
            </div>
          </div>

      </article>
    </div>
   </div>
  </section>


  <script src="webroot/js/jquery.js"></script>
  <script src="webroot/js/modernizr.js"></script>
  <script src="webroot/js/jquery.easing.1.3.js"></script>
  <script src="webroot/js/google-code-prettify/prettify.js"></script>
  <script src="webroot/js/bootstrap.js"></script>
  <script src="webroot/js/jquery.prettyPhoto.js"></script>
  <script src="webroot/js/portfolio/jquery.quicksand.js"></script>
  <script src="webroot/js/portfolio/setting.js"></script>
  <script src="webroot/js/hover/jquery-hover-effect.js"></script>
  <script src="webroot/js/jquery.flexslider.js"></script>
  <script src="webroot/js/classie.js"></script>
  <script src="webroot/js/cbpAnimatedHeader.min.js"></script>
  <script src="webroot/js/jquery.refineslide.js"></script>
  <script src="webroot/js/jquery.ui.totop.js"></script>
  <!-- Template Custom Javascript File -->
  <script src="webroot/js/custom.js"></script>

</body>
</html>
<script type="text/javascript">
  
  document.addEventListener('DOMContentLoaded', function () {
     

    var calendarEl = document.getElementById('calendar');

            var calendar = new FullCalendar.Calendar(
            calendarEl, 
            {
                          locale: 'pt-br',
                          plugins: ['interaction', 'dayGrid'],
                          events: [
                                  <?php
                                   foreach($TipEvento as $value) { ?>
                                    {
                                    title: '<?= $value['nome']." - ".$value['descricao'].
                                    " - ".$value['tipo_evento']." / ".$value['situacao']?>',
                                    start: '<?= $value['data_inicio'] ?>',
                                    end:'<?= $value['data_fim'] ?>',
                                    color:'<?= $value['cor'] ?>',
                                    editable: true,
                                    eventLimit: true,
                                    },
                          <?php } ?> ],
                                     eventClick:function(info){
                                        alert(info.event.title);
                                     }

            });

            calendar.render();
    
    });
</script>
<style>       
        #calendar {
                max-width: 900px;
                margin: 0 auto;
        }
</style>