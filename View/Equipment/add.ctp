<div class="equipment form">
<?php echo $this->Form->create('Equipment');?>
	<fieldset>
 		<legend><?php __('Add Equipment'); ?></legend>
	<?php
		echo $this->Form->input('description');
		echo $this->Form->input('cod');
		echo $this->Form->input('kind_id');
		echo $this->Form->input('count_id');
		echo $this->Form->input('measure');
		echo $this->Form->input('alias');
		echo $this->Form->input('organization_id');
		echo $this->Form->input('section_id');
		echo $this->Form->input('room');
		echo $this->Form->input('user_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Equipment', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Kinds', true), array('controller' => 'kinds', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Kind', true), array('controller' => 'kinds', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Counts', true), array('controller' => 'counts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Count', true), array('controller' => 'counts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Organizations', true), array('controller' => 'organizations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Organization', true), array('controller' => 'organizations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sections', true), array('controller' => 'sections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Section', true), array('controller' => 'sections', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>