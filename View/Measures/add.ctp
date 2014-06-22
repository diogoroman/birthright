<div class="measures form">
<?php echo $this->Form->create('Measure');?>
	<fieldset>
 		<legend><?php __('Admin Add Measure'); ?></legend>
	<?php
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>