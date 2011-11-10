<div class="counts view">
<h2><?php  __('Count');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $count['Count']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $count['Count']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $count['Count']['modified']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $count['Count']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Cod'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $count['Count']['cod']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Count', true), array('action' => 'edit', $count['Count']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Count', true), array('action' => 'delete', $count['Count']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $count['Count']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Counts', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Count', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Equipment', true), array('controller' => 'equipment', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Equipment', true), array('controller' => 'equipment', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Equipment');?></h3>
	<?php if (!empty($count['Equipment'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Description'); ?></th>
		<th><?php __('Cod'); ?></th>
		<th><?php __('Kind Id'); ?></th>
		<th><?php __('Count Id'); ?></th>
		<th><?php __('Measure'); ?></th>
		<th><?php __('Alias'); ?></th>
		<th><?php __('Organization Id'); ?></th>
		<th><?php __('Section Id'); ?></th>
		<th><?php __('Room'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($count['Equipment'] as $equipment):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $equipment['id'];?></td>
			<td><?php echo $equipment['description'];?></td>
			<td><?php echo $equipment['cod'];?></td>
			<td><?php echo $equipment['kind_id'];?></td>
			<td><?php echo $equipment['count_id'];?></td>
			<td><?php echo $equipment['measure'];?></td>
			<td><?php echo $equipment['alias'];?></td>
			<td><?php echo $equipment['organization_id'];?></td>
			<td><?php echo $equipment['section_id'];?></td>
			<td><?php echo $equipment['room'];?></td>
			<td><?php echo $equipment['user_id'];?></td>
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
