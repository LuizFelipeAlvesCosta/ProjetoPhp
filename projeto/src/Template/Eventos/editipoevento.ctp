
                <br>
                <br>
                <div align="center">
                        <?php
                          echo $this->Html->link(__('Voltar'), 
                          array('controller'=>'Eventos','action'=>'tipoevento'), 
                          array('class' => 'btn btn-warning', 'escape' => false, 
                            'data-toggle'=>'tooltip'));
                        ?>
                </div>      
                <br>	   
                <div align="center" style="background-color: #87CEFA; margin-left:300px;margin-right:300px;">
                    <br>
                    <h2 align="center"> Editar de Tipo de Lembrete </h2>
                    <?php
                     
                     $x = null;
                     echo $this->Form->create($x,['url' => ['controller'=>'Eventos','action'=>'updatetipoevento']]);

                     echo $this->Form->input('ids',['label' => 'id edição','id' => 'ids','type'=>'hidden',
                     'value'=>$id]);
                    ?>

                    <?php 
                     foreach ($TipEvento as $value):
                     echo $this->Form->input('event',['label' => 'Tipo de Evento:','id' => 'event',
                          'value'=>$value['tipo_evento']]);

                     echo $this->Form->input('color',['label' => 'Cor de Evento:','id' => 'color','type' => 'color',
                          'value'=>$value['cor']]);
                     endforeach;
                    ?>
                    <br>
                          <button class="btn btn-success" type="submit">
                                   <?= __('Salvar');?>   
                          </button>
                         <?= $this->Form->end() ?>
                    <br>
                    <br>
                </div>     