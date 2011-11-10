<div class="docGenerators form">
<?php echo $this->Form->create('DocGenerator');?>
	<fieldset>
 		<legend><?php __('Adicionar novo padrão de documento'); ?></legend>
	<?php
		$this->TinyMce->editor(array(
									 'mode' => 'textareas',
									 'language' => 'pt',
									 'theme' => 'advanced',
									 'theme_advanced_toolbar_location' => 'top',
									 'theme_advanced_toolbar_align' => 'left',
									 'skin' => 'o2k7',
									 'skin_variant' => 'silver',
									 'theme' => 'advanced'
		));
		echo $this->Form->input('name',array('label' => __('Nome',true)));
		echo $this->Form->input('text',array('label' => __('Texto',true)));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Enviar', true));?>
</div>