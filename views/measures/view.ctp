<div class="measures view">
<h2><?php  __('Measure');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $measure['Measure']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $measure['Measure']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $measure['Measure']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $measure['Measure']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Measure', true), array('action' => 'edit', $measure['Measure']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Measure', true), array('action' => 'delete', $measure['Measure']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $measure['Measure']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Measures', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Measure', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Equipment', true), array('controller' => 'equipment', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Equipment', true), array('controller' => 'equipment', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Equipment');?></h3>
	<?php if (!empty($measure['Equipment'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Fcg'); ?></th>
		<th><?php __('Description'); ?></th>
		<th><?php __('Kind Id'); ?></th>
		<th><?php __('Count Id'); ?></th>
		<th><?php __('Alias'); ?></th>
		<th><?php __('Owner Id'); ?></th>
		<th><?php __('Quantity'); ?></th>
		<th><?php __('Price'); ?></th>
		<th><?php __('Measure Id'); ?></th>
		<th><?php __('SendRegister'); ?></th>
		<th><?php __('IncludeRegister'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($measure['Equipment'] as $equipment):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $equipment['id'];?></td>
			<td><?php echo $equipment['fcg'];?></td>
			<td><?php echo $equipment['description'];?></td>
			<td><?php echo $equipment['kind_id'];?></td>
			<td><?php echo $equipment['count_id'];?></td>
			<td><?php echo $equipment['alias'];?></td>
			<td><?php echo $equipment['owner_id'];?></td>
			<td><?php echo $equipment['quantity'];?></td>
			<td><?php echo $equipment['price'];?></td>
			<td><?php echo $equipment['measure_id'];?></td>
			<td><?php echo $equipment['sendRegister'];?></td>
			<td><?php echo $equipment['includeRegister'];?></td>
			<td><?php echo $equipment['created'];?></td>
			<td><?php echo $equipment['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'equipment', 'action' => 'view', $equipment['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'equipment', 'action' => 'edit', $equipment['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'equipment', 'action' => 'delete', $equipment['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $equipment['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Equipment', true), array('controller' => 'equipment', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
