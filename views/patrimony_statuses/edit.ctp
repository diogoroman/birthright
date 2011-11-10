<div class="patrimonyStatuses form">
<?php echo $this->Form->create('PatrimonyStatus');?>
	<fieldset>
 		<legend><?php __('Edit Patrimony Status'); ?></legend>
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

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('PatrimonyStatus.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('PatrimonyStatus.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Patrimony Statuses', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Patrimonies', true), array('controller' => 'patrimonies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Patrimony', true), array('controller' => 'patrimonies', 'action' => 'add')); ?> </li>
	</ul>
</div>