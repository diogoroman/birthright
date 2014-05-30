<?php 
	echo $this->Html->script('datepicker', true); 
?>
<div class="form">
<?php echo $this->Form->create('Patrimony');?>
	<fieldset>
 		<legend><?php __('Adiciona Patrimonio'); ?></legend>
	<?php
		echo $this->Form->input('orderNum',array('label' => __('Número de Patrimonio', true)));
		if(isset($equipmentId))
			echo $this->Form->input('equipment_id',array('label' => __('Ficha Carga Geral', true),
											  	  'value' => $equipmentId));
		else
			echo $this->Form->input('equipment_id',array('label' => __('Ficha Carga Geral', true)));
		echo $this->Form->input('section_id',array('label' => __('Seção dentro da OM', true),
												     'default' => $defaultValues['DefaultValue']['section_id'],
													 'empty' => 'Selecione a seção'));
		echo $this->Form->input('room',array('label' => __('Sala', true),
														   'default' => 'Depósito'));
		if(!empty($patrimony))
		{
			echo $this->Form->input('cod',array('label' => __('Código Interno', true),
									 'value' => $patrimony['Patrimony']['id']));
		}
		echo $this->Form->input('bmpNumber', array('label' => __('Número BMP',true)));
		echo $this->Form->input('serialNumber', array('label' => __('Número Serial',true)));
		echo $this->Form->input('patrimony_status_id',array('label' => __('Status', true),
															'default' => $defaultValues['DefaultValue']['patrimony_status_id']));
		echo $this->Form->input('discrepancy',array('label' => __('Discrepancia',true)));
		echo $this->Form->input('observation',array('label' => __('Observações',true)));
		echo $this->Form->input('priceUnit',array('label' => __('Preço Unitário',true)));
		echo $this->Form->input('user_id',array('label' => __('Usuário', true),
												  'empty' => 'Selecione o responsável'));
		echo $this->Form->input('conference',array('label' => __('Conferencia', true),
											'class' => 'term',
											'type' => 'text',
											'value' => $this->Locale->dateTime($this->data['Patrimony']['conference'], true, true)));
		echo $this->Form->input('intervalConf',array('label' => __('Periodo para Conferencias', true)));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Enviar', true));?>
</div>