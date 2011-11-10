<div class="sections form">
<?php echo $this->Form->create('Section');?>
	<fieldset>
 		<legend><?php __('Admin Edit Section'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('acronym');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>