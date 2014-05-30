<div class="kinds form">
<?php echo $this->Form->create('Kind');?>
	<fieldset>
 		<legend><?php __('Edit Kind'); ?></legend>
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

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Kind.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Kind.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Kinds', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Equipment', true), array('controller' => 'equipment', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Equipment', true), array('controller' => 'equipment', 'action' => 'add')); ?> </li>
	</ul>
</div>