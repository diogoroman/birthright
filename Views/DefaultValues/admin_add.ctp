<div class="defaultValues form">
<?php echo $this->Form->create('DefaultValue');?>
	<fieldset>
 		<legend><?php __('Admin Add Default Value'); ?></legend>
	<?php
		echo $this->Form->input('kind_id');
		echo $this->Form->input('count_id');
		echo $this->Form->input('measure_id');
		echo $this->Form->input('owner_id');
		echo $this->Form->input('equipment_type_id');
		echo $this->Form->input('patrimony_status_id');
		echo $this->Form->input('section_id');
		echo $this->Form->input('position_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>