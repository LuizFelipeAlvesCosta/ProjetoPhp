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
                                <td align="center"><b>Nome</b></td>
                                <td align="center"><b>Descrição</b></td>
                                <td align="center"><b>Tipo do Evento</b></td>
                                <td align="center"><b>Data Inicio</b></td>
                                <td align="center"><b>Data Fim</b></td>
                                <td align="center"><b>Situacao</b></td>
                            </tr>
                        </thead>
                        <tbody>
                        	<?php foreach ($TipEvento as $value): ?>
                            <tr>
                                <td align="center"><?= $value['nome'] ?></td>
                                <td align="center"><?= $value['descricao'] ?></td>
                                <td align="center"><?= $value['tipo_evento'] ?></td>
                                <td align="center"><?= date("d/m/Y", strtotime($value['data_inicio'])) ?></td>
                                <td align="center"><?= date("d/m/Y", strtotime($value['data_fim'])) ?></td>
                                <td align="center"><?= $value['situacao'] ?></td>
                            </tr>
                        	<?php endforeach; ?>
                        </tbody>
             		</table>
    </div>