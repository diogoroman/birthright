<div class="counts view">

	<h2><?php  __('Ajuda sobre o Sistema');?></h2>
	<h3><?php __('Busca:')?></h3>
	<div class="content">
		<?php echo $this->Html->para(null,'Todas as buscas podem ser feitas clicando no icone que é o desenho de uma “lupa”. O sistema busca na tela corrente, ou seja, se você estiver visualizando “Materiais” (Descrição dos Equipamentos) e fazer uma busca por “intel” será mostrado todos os registros que tenha o nome “intel” na descrição do material.');?>
	</div>
	<h3><?php __('Conceito de Materiais e Patrimonios:')?></h3>
	<div class="content">
		<?php echo $this->Html->para(null,'Para se operar melhor o sistema é importante entender o que é um “Material” e um “Patrimonio” para ele. No sistema, “Material” seria as informações de características do equipamento, pode-se dizer que esta entidade armazena a “descrição” dos equipamentos. Já o “Patrimonio” seria as informações relativas à localização física, do mesmo. Por exemplo: Suponhamos que tivéssemos comprado 100 computadores “Dell Optiplex 790”. Em material cadastraríamos a descrição Dell Optiplex 790, e cada um dos 100 computadores Dell teria uma localização física, um responsável e etc... Essas informações são armazenadas na entidade “Patrimonio”. Portanto, podemos dizer que o Material  Dell Optiplex 790 possui 100 patrimonios relacionados.');?>
	</div>
	<h3><?php __('Cadastrando um Equipamento Novo:')?></h3>
	<div class="content">
		<?php echo $this->Html->para(null,'Para se incluir um novo Equipamento deve-se primeiro incluir a descrição do mesmo, ou seja, incluir um novo material. Para isso:');?>
		<div class="content" style="margin-left:1cm">
	 		<?php echo $this->Html->para(null,'1. Passe o mouse sobre “Materiais” e clique em “Criar”;');?>
	 		<?php echo $this->Html->para(null,'2. Preencha as informações necessárias e clique em salvar;');?>
	 		<?php echo $this->Html->para(null,'3. Neste ponto a descrição do Equipamento já esta armazenada no sistema, agora devemos incluir os patrimonios relacionados a este equipamento. <i>Após salvar o “Material” o sistema irá redirecionar o processo para a tela “Ver” do patrimonio, portanto pode-se pular para o passo 5;</i>');?>
	 	</div>
	 	<?php echo $this->Html->para(null,'Agora deve-se incluir quantos patrimonios relacionados ao material tiver. Para isso:');?>
	 	<div class="content" style="margin-left:1cm">
	 		<?php echo $this->Html->para(null,'4. Liste todos os materiais cadastrados (Em “Materiais” → “Listar”), localize a descrição do equipamento que deseja-se incluir as informações de localização e clique no link “Ver” do mesmo;');?>
	 		<?php echo $this->Html->para(null,'5. Nesta tela terá um link <u>“Adcionar Patrimonio Relacionado“</u> ao clicar lá você será redirecionado para a tela de adição de um novo Patrimonio;');?>
	 		<?php echo $this->Html->para(null,'6. Agora basta incluir as informações necessárias para este “patrimonio” e salvar.');?>
	 	</div>

	</div>
	<h3><?php __('Como Proceder Durante a Conferencia:')?></h3>
 
	 <div class="content">
	 	<?php echo $this->Html->para(null,'1) Verificar se o computador/impressora/estabilizador possui numero de carga (número FCG, PATRIMONIO OU BMP). Caso positivo: Fazer a busca no sistema de patrimonio e verificar se a descrição no sistema bate com a configuração do computador.');?>
	 	<?php echo $this->Html->para(null,'2) <b>Caso a configuração não bata:</b>  ir ao passo 5.');?>
	 	<?php echo $this->Html->para(null,'3) <b>Caso a configuração seja parecida:</b> Clicar em “editar” e colocar a descrição completa do computador/impressora/estabilizador no campo “Discrepancia”.');?>
	 	<?php echo $this->Html->para(null,'4) <b>Colocar a “data de conferencia”</b>, “seção” a que pertence e o “usuário” responsável. Caso este equipamento não esteja sendo usado, coloca o valor "inativo" em "status". Salvar as mudanças e etiquetar o computador com o número BMP ou PATRIMONIO ou CODIGO INTERNO e ir ao próximo computador/impressora/estabilizador.');?>
	 	<?php echo $this->Html->para(null,'5) (Caso negativo do passo 1) Caso o computador/impressora/estabilizador não tenha número de carga: Fazer uma busca no sistema pela descrição do computador.');?>
	 	<?php echo $this->Html->para(null,'6) Voltar ao passo 3 e passo 4.');?>
	 	<?php echo $this->Html->para(null,'7) <b>Caso NÃO seja nem parecida:</b> Incluir o computador como novo. Para isso deve-se: ');?>
	 	<div class="content" style="margin-left:1cm">
	 		<?php echo $this->Html->para(null,'a. Clicar em: Materiais → Criar;');?>
	 		<?php echo $this->Html->para(null,'b. Preencher os atributos do equipamento (“Quantidade” colocar 1, “incluído no registro” deixar em branco, “preço total” deixar em branco);');?>
	 		<?php echo $this->Html->para(null,'c. Clicar em enviar para salvar o cadastro da descrição do equipamento;');?>
	 		<?php echo $this->Html->para(null,'d. Após cadastrar a descrição do equipamento deve-se incluir a localização física da maquina. No passo anterior o sistema redirecionará o processo para a tela de visualização do material (descrição do equipamento) nesta tela há um link com o nome “adicionar patrimonio relacionado”, deve-se clicar neste link;');?>
	 		<?php echo $this->Html->para(null,'e. Ir ao passo 4;');?>
	 	</div>
	 	<?php echo $this->Html->para(null,'8) Para os equipamentos que não estão sendo usados, faremos um novo cadastro (conforme passo 7) com as informações que estiverem visíveis. No caso de computador colocar o nome que estiver no gabinete. Por exemplo: Suponha que a “dupla 1” seja a primeira a encontrar um computador “epcom” em desuso. Esta dupla fará um novo cadastro conforme o passo 7 e preencherá as informações de localização e no <b>"status"</b> preencherá com <b>“inativo”</b>. Caso a “dupla 2” encontre um outro computador “epcom” em desuso o cadastro da descrição deste já estará no sistema neste caso deve-se proceder da seguinte maneira:');?>
	 	<div class="content" style="margin-left:1cm">
	 		<?php echo $this->Html->para(null,'i. Fazer a busca pela descrição conforme diz o passo 5;');?>
	 		<?php echo $this->Html->para(null,'ii. Clicar sobre a descrição do computador (coluna “material”) isso levará para a pagina “Ver” do “Material”.');?>
	 		<?php echo $this->Html->para(null,'iii. Nesta tela há um link com o nome “adicionar patrimonio relacionado”, deve-se clicar neste link.');?>
	 		<?php echo $this->Html->para(null,'e. Ir ao passo 4;');?>
	 	</div>
	 	<div class="error-message">
	 		<?php echo $this->Html->para(null,'<b>OBS 1:</b> Caso seja encontrado no sistema um computador que já esteja com o campo conferencia  preenchido, não deve-se sobrescrever. Deve-se tentar encontrar outro computador com descrição parecida ou incluir um novo computador.');?>
	 	</div>
	 	<div class="" style="">
	 		<?php echo $this->Html->para(null,'<b>OBS 2:</b> No cadastro dos “materiais” (cadastro da descrição do equipamento. Esse cadastro é feito quando se inclui um novo equipamento) deve-se incluir as informações <b>Conta e Classe</b>. Por padrão esses campos já estão com a conta e a classe utilizada para computadores e para 	monitores. Portanto só deverá ser mudado para os <b>estabilizadores/nobreaks</b>, para estes os valores são os seguintes:');?>
	 	</div>
	 		<?php echo $this->Html->para(null,'<b>Classe:</b> <u>EQUIPAMENTO PARA CONTROLE ELETRICO.</u>');?>
	 		<?php echo $this->Html->para(null,'<b>Conta:</b> <u>MAQUINAS .E EQUIP.ENERGETICOS.</u>');?>
	 	</div>
	 </div>
 </div>