<?php
  $Tip = '';
  foreach ($TipEvento as $value) {
        $Tip[$value['id']] = $value['tipo_evento'];
  }
?>
                <br>
                <br>
                <div align="center">
                        <?php
                          echo $this->Html->link(__('Voltar'), 
                          array('controller'=>'Eventos','action'=>'evento'), 
                          array('class' => 'btn btn-warning', 'escape' => false, 
                            'data-toggle'=>'tooltip'));
                        ?>
                </div>      
                <br>	   
                <div align="center" style="background-color: #87CEFA; margin-left:300px;margin-right:300px;">
                    <br>
                    <h2 align="center"> Edição de Lembrete </h2>
                    <?php
                     
                     $x = null;
                     echo $this->Form->create($x,['url' => ['controller'=>'Eventos','action'=>'updatevento']]);

                     echo $this->Form->input('ids',['label' => 'Id:','id' => 'ids',
                            'type'=>'hidden','value'=>$id]);
                    ?> 

                    <?php
                       foreach ($Evento as $value):
                       echo $this->Form->input('tipevent',['label' => 'Tipo do Evento:','id' => 'tipevent',
                            'options'=>$Tip,'value'=>$value['id_evento']]);
                          
                       echo $this->Form->input('desc',['label' => 'Descrição:','id' => 'desc','value'=>$value['descricao']]);

                       echo $this->Form->input('nome',['label' => 'Nome:','id' => 'nome','value'=>$value['nome']]);

                       echo $this->Form->input('dtin',['label' => 'Data Inicio:','id' => 'dtin',
                            'type'=>'hidden','value'=>$value['data_inicio']]);

                       echo $this->Form->input('dtfm',['label' => 'Data Fim:','id' => 'dtfm',
                            'type'=>'hidden','value'=>$value['data_fim']]);
                      
                    ?>
                    <br>
                    <b>Data de Inicio do Evento</b>
                    <br>
                    <input id="dateini" type="date" onchange="data1()" value="<?= $value['data_inicio'] ?>">
                    <br>
                    <br>
                    <b>Data de Fim do Evento</b>
                    <br>
                    <input id="datefim" type="date" onchange="data2()" value="<?= $value['data_fim'] ?>">
                    <br>
                    <br>
                    <br>
                    <br>
                    <?php endforeach; ?>
                          <button class="btn btn-success" type="submit">
                                   <?= __('Salvar');?>   
                          </button>
                         <?= $this->Form->end() ?>
                    <br>
                    <br>
                </div>     

<script type="text/javascript">

   function data1(){

      var data1 = document.getElementById('dateini').value;
      document.getElementById('dtin').value = data1;
   }

   function data2(){

      var data2 = document.getElementById('datefim').value;
      var ano = data2.substring(0, 4);
      var mes = data2.substring(5, 7);
      var dia = data2.substring(8, 11);
      var dianovo = parseInt(dia);
      document.getElementById('dtfm').value = ano+'-'+mes+'-'+dianovo;
   }
</script>