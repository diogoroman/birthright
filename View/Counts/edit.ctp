<div class="counts form">
<?php echo $this->Form->create('Count');?>
	<fieldset>
 		<legend><?php __('Edit Count'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('cod');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Count.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Count.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Counts', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Equipment', true), array('controller' => 'equipment', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Equipment', true), array('controller' => 'equipment', 'action' => 'add')); ?> </li>
	</ul>
</div>