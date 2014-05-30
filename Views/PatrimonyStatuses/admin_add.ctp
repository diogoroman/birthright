<div class="patrimonyStatuses form">
<?php echo $this->Form->create('PatrimonyStatus');?>
	<fieldset>
 		<legend><?php __('Admin Add Patrimony Status'); ?></legend>
	<?php
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>