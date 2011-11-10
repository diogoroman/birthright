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
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Default Values', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Kinds', true), array('controller' => 'kinds', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Kind', true), array('controller' => 'kinds', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Counts', true), array('controller' => 'counts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Count', true), array('controller' => 'counts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Measures', true), array('controller' => 'measures', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Measure', true), array('controller' => 'measures', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Owners', true), array('controller' => 'owners', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Owner', true), array('controller' => 'owners', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Equipment Types', true), array('controller' => 'equipment_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Equipment Type', true), array('controller' => 'equipment_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Patrimony Statuses', true), array('controller' => 'patrimony_statuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Patrimony Status', true), array('controller' => 'patrimony_statuses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sections', true), array('controller' => 'sections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Section', true), array('controller' => 'sections', 'action' => 'add')); ?> </li>
	</ul>
</div>