<div class="counts form">
<?php echo $this->Form->create('Count');?>
	<fieldset>
 		<legend><?php __('Add Count'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('cod');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Counts', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Equipment', true), array('controller' => 'equipment', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Equipment', true), array('controller' => 'equipment', 'action' => 'add')); ?> </li>
	</ul>
</div>