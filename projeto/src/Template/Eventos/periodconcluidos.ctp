<br>
                <br>
                <div align="center">
                        <?php
                          echo $this->Html->link(__('Voltar'), 
                          array('controller'=>'Pages','action'=>'display'), 
                          array('class' => 'btn btn-warning', 'escape' => false, 
                            'data-toggle'=>'tooltip'));
                        ?>
                </div>      
                <br>	   
                <div align="center" style="background-color: #87CEFA; margin-left:300px;margin-right:300px;">
                    <br>
                    <h2 align="center"> Consultar Lembretes Concluidos por Período </h2>
                    <?php
                     
                     $x = null;
                     echo $this->Form->create($x,['url' => ['controller'=>'Eventos','action'=>'concluidos']]);

                     echo $this->Form->input('dtin',['label' => 'Data Inicio:','id' => 'dtin',
                          'type'=>'hidden']);

                     echo $this->Form->input('dtfm',['label' => 'Data Fim:','id' => 'dtfm',
                          'type'=>'hidden']);
                    ?>
                    <br>
                    <b>Data de Inicio do Período</b>
                    <br>
                    <input id="dateini" type="date" onchange="data1()">
                    <br>
                    <br>
                    <b>Data de Fim do Período</b>
                    <br>
                    <input id="datefim" type="date" onchange="data2()">
                    <br>
                    <br>
                    <br>
                    <br>
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