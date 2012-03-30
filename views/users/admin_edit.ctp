<div class="users form">
<?php echo $this->Form->create('User');?>
	<fieldset>
 		<legend><?php __('Admin Edit User'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name', array('label' => __('Nome Completo', true)));
		echo $this->Form->input('position_id', array('label' => __('Posto/Patente', true),
													   'default' => $defaultValues['DefaultValue']['position_id'],
													   'empty' => 'Selecione o posto'));
		echo $this->Form->input('username', array('label' => __('Nome de usuário', true)));
		echo $this->Form->input('new_password', array('label' => __('Senha', true), 'type' => 'password'));
		echo $this->Form->input('Group', array('label' => __('Grupo', true)));
		echo $this->Form->input('section_id', array('label' => __('Seção', true), 'autocomplete' => 'off',
													  'empty' => 'Selecione a seção'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Enviar', true));?>
</div>