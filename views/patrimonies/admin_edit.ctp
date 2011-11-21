<?php 
	echo $this->Html->script('datepicker', true); 
?>
<div class="patrimonies form">
<?php echo $this->Form->create('Patrimony');?>
	<fieldset>
 		<legend><?php __('Alterar Patrimonio'); ?></legend>
 		
 	<?php echo $this->Html->link($patrimony['Equipment']['description'], array('controller' => 'equipment', 'action' => 'view', $patrimony['Equipment']['id'])); ?>
	<?php
		echo $this->Form->input('orderNum',array('label' => __('Ordem Numérica', true)));
		echo $this->Form->input('cod',array('label' => __('Código Interno', true)));
		echo $this->Form->input('equipment_id',array('label' => __('Ficha Carga Geral', true),));
		echo $this->Form->input('section_id',array('label' => __('Seção dentro da OM', true),
												     'default' => $defaultValues['DefaultValue']['section_id'],
													 'empty' => 'Selecione a seção'));
		echo $this->Form->input('room',array('label' => __('Sala', true),
														   'default' => 'Depósito'));
		echo $this->Form->input('patrimony_status_id',array('label' => __('Status', true),
															'default' => $defaultValues['DefaultValue']['patrimony_status_id']));
		echo $this->Form->input('discrepancy',array('label' => __('Discrepancia',true)));
		echo $this->Form->input('observation',array('label' => __('Observações',true)));
		echo $this->Form->input('user_id',array('label' => __('Usuário', true),
												  'empty' => 'Selecione o responsável'));
		echo $this->Form->input('conference',array('label' => __('Conferencia', true),
											'class' => 'term',
											'type' => 'text',
											'value' => $this->Locale->dateTime($this->data['Patrimony']['conference'], true, true)));
		echo $this->Form->input('intervalConf',array('label' => __('Periodo para Conferencia', true)));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Enviar', true));?>
</div>