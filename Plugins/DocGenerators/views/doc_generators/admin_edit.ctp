<div class="docGenerators form">
<?php echo $this->Form->create('DocGenerator');?>
	<fieldset>
 		<legend><?php __('Editar Documentos'); ?></legend>
	<?php
		echo $this->Form->input('name',array('label'=>__('Nome',true)));
		echo $this->Form->input('text',array('label'=>__('Texto',true)));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Enviar', true));?>
</div>