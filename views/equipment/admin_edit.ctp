<?php 
	echo $this->Html->script('datepicker', false); 
?>
<div class="equipment form">
<?php echo $this->Form->create('Equipment');?>
	<fieldset>
 		<legend><?php __('Alterar Material'); ?></legend>
	<?php
		echo $this->Form->input('fcg',array('label' => __('FCG', true)));
		echo $this->Form->input('description',array('label' => __('Descrição', true)));
		echo $this->Form->input('kind_id',array('label' => __('Classe', true),
												  'default' => $defaultValues['DefaultValue']['kind_id'],
												  'empty' => 'Selecione uma classe'));
		echo $this->Form->input('count_id',array('label' => __('Conta', true),
												   'default' => $defaultValues['DefaultValue']['count_id'],
												   'empty' => 'Selecione uma conta'));
		echo $this->Form->input('equipment_type_id',array('label' => __('Tipo', true),
												'default' => $defaultValues['DefaultValue']['equipment_type_id']));
		echo $this->Form->input('alias',array('label' => __('Descrição Resumida', true)));
		echo $this->Form->input('owner_id',array('label' => __('Seção Pertencente', true),
												 'default' => $defaultValues['DefaultValue']['section_id']));
		echo $this->Form->input('price',array('label' => __('Preço Total', true)));
		echo $this->Form->input('measure',array('label' => __('Unidade de Medida', true),
												'default' => $defaultValues['DefaultValue']['measure_id']));
		echo $this->Form->input('quantity',array('label' => __('Quantidade', true)));
		echo $this->Form->input('includeRegister',array('label' => __('Incluido no Registro', true),
											'class' => 'term',
											'type' => 'text',
											'value' => $this->Locale->dateTime($this->data['Equipment']['includeRegister'],true,true)));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Enviar', true));?>
</div>