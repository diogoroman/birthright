<div class="patrimonyStatuses view">
<h2><?php  __('Patrimony Status');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $patrimonyStatus['PatrimonyStatus']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Locale->dateTime($patrimonyStatus['PatrimonyStatus']['created']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Locale->dateTime($patrimonyStatus['PatrimonyStatus']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Patrimony Status', true), array('action' => 'edit', $patrimonyStatus['PatrimonyStatus']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Patrimony Status', true), array('action' => 'delete', $patrimonyStatus['PatrimonyStatus']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $patrimonyStatus['PatrimonyStatus']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Patrimony Statuses', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Patrimony Status', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Patrimonies', true), array('controller' => 'patrimonies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Patrimony', true), array('controller' => 'patrimonies', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Patrimonies');?></h3>
	<?php if (!empty($patrimonyStatus['Patrimony'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('OrderNum'); ?></th>
		<th><?php __('Cod'); ?></th>
		<th><?php __('Equipment Id'); ?></th>
		<th><?php __('Patrimony Status Id'); ?></th>
		<th><?php __('PriceUnit'); ?></th>
		<th><?php __('Organization Id'); ?></th>
		<th><?php __('Section Id'); ?></th>
		<th><?php __('Room'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Discrepancy'); ?></th>
		<th><?php __('Conference'); ?></th>
		<th><?php __('IntervalConf'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($patrimonyStatus['Patrimony'] as $patrimony):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $patrimony['id'];?></td>
			<td><?php echo $patrimony['orderNum'];?></td>
			<td><?php echo $patrimony['cod'];?></td>
			<td><?php echo $patrimony['equipment_id'];?></td>
			<td><?php echo $patrimony['patrimony_status_id'];?></td>
			<td><?php echo $patrimony['priceUnit'];?></td>
			<td><?php echo $patrimony['organization_id'];?></td>
			<td><?php echo $patrimony['section_id'];?></td>
			<td><?php echo $patrimony['room'];?></td>
			<td><?php echo $patrimony['user_id'];?></td>
			<td><?php echo $patrimony['discrepancy'];?></td>
			<td><?php echo $patrimony['conference'];?></td>
			<td><?php echo $patrimony['intervalConf'];?></td>
			<td><?php echo $patrimony['created'];?></td>
			<td><?php echo $patrimony['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'patrimonies', 'action' => 'view', $patrimony['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'patrimonies', 'action' => 'edit', $patrimony['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'patrimonies', 'action' => 'delete', $patrimony['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $patrimony['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Patrimony', true), array('controller' => 'patrimonies', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
