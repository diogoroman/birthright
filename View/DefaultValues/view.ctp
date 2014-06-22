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
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Position'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($defaultValue['Position']['name'], array('controller' => 'positions', 'action' => 'view', $defaultValue['Position']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
