<br>
<br>
<div align="left">
		<?php
          echo $this->Html->link(__('Voltar'), 
          array('controller'=>'Pages','action'=>'display'), 
          array('class' => 'btn btn-warning', 'escape' => false, 
            'data-toggle'=>'tooltip'));
        ?>
</div>        
<div align="center">
        <?php
          echo $this->Html->link(__('Cadastrar Tipo de Lembrete'), 
          array('controller'=>'Eventos','action'=>'addtipoevento'), 
          array('class' => 'btn btn-danger btn-xs', 'escape' => false, 
            'data-toggle'=>'tooltip', 'title' => 'Cadastrar Tipo de Lembrete'));
        ?>
</div>
<br>
<br>
<br>
	<style>
		#tabela {
		  width: 80%;
		}
		#tabela{
		 border: 2px solid black;	
		}
		#tabela td{
	     border: 2px solid black;		
		}
	</style>
	<div align="center">
		 			<table id="tabela" cellpadding="0" cellspacing="0">
                        <thead>
                            <tr>
                                <td align="center"><b>Id</b></td>
                                <td align="center"><b>Tipo Evento</b></td>
                                <td align="center"><b>Cor</b></td>
                                <td align="center"><b>Ações</b></td>
                            </tr>
                        </thead>
                        <tbody>
                        	<?php foreach ($TipEvento as $value):?>
                            <tr>
                                <td align="center"><?= $value['id']?></td>
                                <td align="center"><?= $value['tipo_evento']?></td>
                                <td align="center"><?= $value['cor']?></td>
                                <td align="center">
	                                <?php
            							          echo $this->Html->link(__('Editar'), 
            							          array('controller'=>'Eventos','action'=>'editipoevento',$value['id']), 
            							          array('class' => 'btn btn-primary btn-xs', 'escape' => false, 
            							            'data-toggle'=>'tooltip', 'title' => 'Editar'));
            							        ?>	
            							        <?php
            							          echo $this->Html->link(__('Excluir'), 
            							          array('controller'=>'Eventos','action'=>'deletetipoevento',$value['id']), 
            							          array('class' => 'btn btn-danger btn-xs', 'escape' => false, 
            							          'data-toggle'=>'tooltip', 'title' => 'Excluir esse tipo de evento',
                                    'confirm' => 'Deseja excluir esse tipo de evento ?'));
            							        ?>
                                </td>
                            </tr>
                        	<?php endforeach; ?>
                        </tbody>
             		</table>
    </div>