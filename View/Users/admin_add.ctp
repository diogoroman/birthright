<?php 
	echo $this->Html->script('datepicker', false);
?>
<div class="form">
<?php
if(isset($this->params['pass']) && !empty($this->params['pass']))
{
	echo $this->Form->create('User', array('url' => array('action' => 'add', $this->params['pass'][0])));
}
else
{
	echo $this->Form->create('User');
}
?>
	<fieldset>
 		<legend><?php printf(__('Incluir Usuário', true)); ?></legend>
 		<div class="half">
		<?php
			echo $this->Form->input('name', array('label' => __('Nome Completo', true), 'autocomplete' => 'off'));
			echo $this->Form->input('position_id', array('label' => __('Posto/Patente', true),
														   'default' => $defaultValues['DefaultValue']['position_id'],
														   'empty' => 'Selecione o posto'));
		?>
		</div>
		<div class="half">
		<?php
			
			echo $this->Form->input('username', array('label' => __('Nome de usuário', true), 'autocomplete' => 'off'));
			echo $this->Form->input('password', array('label' => __('Senha', true), 'autocomplete' => 'off'));
			echo $this->Form->input('section_id', array('label' => __('Seção', true), 'autocomplete' => 'off',
														  'empty' => 'Selecione a seção'));
			if(isset($groups))
			{
				echo $this->Form->input('Group', array('label' => __('Grupos', true)));
			}
		?>
		</div>
	</fieldset>
<?php 
$script = <<<SCRIPT
	$('#UserUfId').change( function() {
		sel = $(this).val();
		$.ajax({
			url : '/users/ajaxGetUfCities',
			data : {uf_id : sel},
			success : function(data, textStatus, XHR) {
				$('#UserCityId').html(data);
			}
		});
	});
SCRIPT;

echo $this->Html->scriptBlock($script);

echo $this->Form->end(__('Enviar', true));
?>
</div>