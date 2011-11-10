<div class="organizations view">
<h2><?php  __('Organization');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $organization['Organization']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $organization['Organization']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $organization['Organization']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $organization['Organization']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Organization', true), array('action' => 'edit', $organization['Organization']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Organization', true), array('action' => 'delete', $organization['Organization']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $organization['Organization']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Organizations', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Organization', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Equipment', true), array('controller' => 'equipment', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Equipment', true), array('controller' => 'equipment', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Equipment');?></h3>
	<?php if (!empty($organization['Equipment'])):?>
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
		foreach ($organization['Equipment'] as $equipment):
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
