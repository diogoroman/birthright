<div class="patrimonyStatuses form">
<?php echo $this->Form->create('PatrimonyStatus');?>
	<fieldset>
 		<legend><?php __('Add Patrimony Status'); ?></legend>
	<?php
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Patrimony Statuses', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Patrimonies', true), array('controller' => 'patrimonies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Patrimony', true), array('controller' => 'patrimonies', 'action' => 'add')); ?> </li>
	</ul>
</div>