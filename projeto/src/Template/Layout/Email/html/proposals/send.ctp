<div class="box-body">

	<h2>Solicitação de Proposta registrada com sucesso!</h2>
	<h4>Em breve nossa equipe entrará em contato com você.</h4>

	<hr>
	<h3>Pedido registrado via Portal Qualitex</h3>

	<h3>Dados do cliente:</h3>

    <p><b>Razão social: </b><?= h($request['name']) ?></p> 
    <p><b>Nome popular: </b><?= h($request['popular_name']) ?></p> 
    <p><b>Tipo de cliente: </b><?= h($request['type_client']) ?></p> 
    <p><b>Documento de identificação: </b><?= h($request['cgc']) ?></p> 
    <p><b>Logradouro: </b><?= h($request['public_place']) ?></p>   
	<p><b>Número: </b><?= h($request['number']) ?></p>   
	<p><b>Bairro: </b><?= h($request['district']) ?></p>   
	<p><b>Cidade: </b><?= h($request['city']) ?></p>   
	<p><b>Estado: </b><?= h($request['state']) ?></p>   
	<p><b>CEP: </b><?= h($request['cep']) ?></p>   
	<p><b>Ponto de referência: </b><?= h($request['reference_point']) ?></p>   

	<hr>

	<h3>Dados para Contato:</h3>

	<p><b>Contato Solicitante: </b><?= h($request['responsible']) ?></p>
    <p><b>Email: </b><?= h($request['email']) ?></p>
    <p><b>Telefone Fixo: </b><?= h($request['landline']) ?></p>
    <p><b>Telefone Celular: </b><?= h($request['mobile_phone']) ?></p>

    <p><b>Contato Financeiro: </b><?= h($request['responsible2']) ?></p>
    <p><b>Email: </b><?php $email=($request['email2']); if ($email=='noreply@qualitex.com') echo ' '; else echo ($email)?></p>
    <p><b>Telefone Fixo: </b><?= h($request['landline2']) ?></p>
    <p><b>Telefone Celular: </b><?= h($request['mobile_phone2']) ?></p>

	<hr>

	<h3>Dados do serviço:</h3>

	<p><b>O que fazer?</b></p>
	<p><?= h($request['do']) ?></p>   
	<p><b>Qual o local?</b></p>
	<p><?= h($request['local']) ?></p> 
	<p><b>Quando/Frequência?</b></p>
	<p><?= h($request['period_frequency']) ?></p> 
	<p><b>Quantidade?</b></p>
	<p><?= h($request['quantity']) ?></p> 
	<p><b>Objetivo?</b></p>
	<p><?= h($request['objective']) ?></p> 
	<p><b>Algum objetivo legal?</b></p>
	<p><?= h($request['objective_legal']) ?></p> 
	<p><b>Exige treinamento de integração?</b></p>
	<p><?= h($request['integration_time']) ?></p>
	<p><b>Caso seja necessário realizar treinamento de integração, informar o tempo de duração e quando o serviço pode ser realizado:</b></p>
	<p><?= h($request['obs_integration_time']) ?></p>
	<p><b>Mais alguma consideração?</b></p>
	<p><?= h($request['consideration']) ?></p>
	<p><b>Como você encontrou o nosso portal?</b></p>
	<p><?= h($request['cotact_type']) ?></p>

	<hr>
	<h5>Essa é uma mensagem automática. Por favor, não responda a esse e-mail.</h5>


</div>
