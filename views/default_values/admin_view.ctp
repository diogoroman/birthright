<div class="defaultValues view">
<h2><?php  __('Default Value');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $defaultValue['DefaultValue']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Kind'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($defaultValue['Kind']['name'], array('controller' => 'kinds', 'action' => 'view', $defaultValue['Kind']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Count'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($defaultValue['Count']['name'], array('controller' => 'counts', 'action' => 'view', $defaultValue['Count']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Measure'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($defaultValue['Measure']['name'], array('controller' => 'measures', 'action' => 'view', $defaultValue['Measure']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Owner'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($defaultValue['Owner']['name'], array('controller' => 'owners', 'action' => 'view', $defaultValue['Owner']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Equipment Type'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($defaultValue['EquipmentType']['name'], array('controller' => 'equipment_types', 'action' => 'view', $defaultValue['EquipmentType']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Patrimony Status'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($defaultValue['PatrimonyStatus']['name'], array('controller' => 'patrimony_statuses', 'action' => 'view', $defaultValue['PatrimonyStatus']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Section'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($defaultValue['Section']['name'], array('controller' => 'sections', 'action' => 'view', $defaultValue['Section']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Default Value', true), array('action' => 'edit', $defaultValue['DefaultValue']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Default Value', true), array('action' => 'delete', $defaultValue['DefaultValue']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $defaultValue['DefaultValue']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Default Values', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Default Value', true), array('action' => 'add')); ?> </li>
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
