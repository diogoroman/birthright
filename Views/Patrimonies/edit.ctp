<div class="patrimonies form">
<?php echo $this->Form->create('Patrimony');?>
	<fieldset>
 		<legend><?php __('Edit Patrimony'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('equipment_id');
		echo $this->Form->input('organization_id');
		echo $this->Form->input('section_id');
		echo $this->Form->input('room');
		echo $this->Form->input('discrepancy');
		echo $this->Form->input('user_id');
		echo $this->Form->input('conference');
		echo $this->Form->input('orderNum');
		echo $this->Form->input('intervalConf');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Patrimony.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Patrimony.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Patrimonies', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Equipment', true), array('controller' => 'equipment', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Equipment', true), array('controller' => 'equipment', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Organizations', true), array('controller' => 'organizations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Organization', true), array('controller' => 'organizations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sections', true), array('controller' => 'sections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Section', true), array('controller' => 'sections', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>