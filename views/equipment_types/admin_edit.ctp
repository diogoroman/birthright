<div class="equipmentTypes form">
<?php echo $this->Form->create('EquipmentType');?>
	<fieldset>
 		<legend><?php __('Admin Edit Equipment Type'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('EquipmentType.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('EquipmentType.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Equipment Types', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Equipment', true), array('controller' => 'equipment', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Equipment', true), array('controller' => 'equipment', 'action' => 'add')); ?> </li>
	</ul>
</div>