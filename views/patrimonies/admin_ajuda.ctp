<div class="counts view">
	<h2><?php  __('Ajuda na Conferencia');?></h2>
	<h1><?php __('Passo a Passo:')?></h1>
 </div>
 
	 <div class="content">
	 	<?php echo $this->Html->para(null,'1) Verificar se o computador/impressora/estabilizador possui numero de carga (número FCG, PATRIMONIO OU BMP). Caso positivo: Fazer a busca no sistema de patrimonio e verificar se a descrição no sistema bate com a configuração do computador.');?>
	 	<?php echo $this->Html->para(null,'2) Caso a configuração não bata:  ir ao passo 5.');?>
	 	<?php echo $this->Html->para(null,'3) Caso a configuração seja parecida: Colocar a descrição completa do computador/impressora/estabilizador no campo “Discrepancia”.');?>
	 	<?php echo $this->Html->para(null,'4) Colocar a data de conferencia, seção a que pertence e o usuário responsável. Salvar as mudanças e ir ao próximo computador/impressora/estabilizador.');?>
	 	<?php echo $this->Html->para(null,'5) Caso o computador/impressora/estabilizador não tenha número de carga: Fazer uma busca no sistema pela descrição do computador.');?>
	 	<?php echo $this->Html->para(null,'6) Voltar ao passo 3 e passo 4.');?>
	 	<?php echo $this->Html->para(null,'7) Caso não seja nem parecida: Incluir o computador como novo. Para isso deve-se: ');?>
	 	<div class="content" style="margin-left:1cm">
	 		<?php echo $this->Html->para(null,'1. Clicar em: Materiais → Criar;');?>
	 		<?php echo $this->Html->para(null,'2. Preencher os atributos do equipamento (“Quantidade” colocar 1, “incluído no registro” deixar em branco, “preço total” deixar em branco);');?>
	 		<?php echo $this->Html->para(null,'3. Clicar em enviar para salvar o cadastro da descrição do equipamento;');?>
	 		<?php echo $this->Html->para(null,'4. Após cadastrar a descrição do equipamento deve-se incluir a localização física da maquina. No passo anterior o sistema redirecionará o processo para a tela de visualização do material (descrição do equipamento) nesta tela há um link com o nome “adicionar patrimonio relacionado”, deve-se clicar neste link.');?>
	 		<?php echo $this->Html->para(null,'5. Ir ao passo 4.');?>
	 	</div>
	 	<div class="error-message">
	 		<?php echo $this->Html->para(null,'OBS 1: Caso seja encontrado no sistema um computador que já esteja com o campo conferencia  preenchido, não deve-se sobrescrever. Deve-se tentar encontrar outro computador com descrição parecida ou incluir um novo computador.');?>
	 	</div>
	 	<div class="" style="">
	 		<?php echo $this->Html->para(null,'OBS 2: No cadastro dos “materiais” (cadastro da descrição do equipamento. Esse cadastro é feito quando se inclui um novo equipamento) deve-se incluir as informações Conta e Classe. Por padrão esses campos já estão com a conta e a classe utilizada para computadores e para 	monitores. Portanto só deverá ser mudado para os estabilizadores/nobreaks, para estes os valores são os seguintes:');?>
	 	</div>
	 </div>
 </div>