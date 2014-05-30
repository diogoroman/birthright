<div class="kinds form">
<?php echo $this->Form->create('Kind');?>
	<fieldset>
 		<legend><?php __('Admin Edit Kind'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('cod');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>