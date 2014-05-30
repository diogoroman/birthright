<div class="equipment index">
	<h2><?php __('Equipment');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('description');?></th>
			<th><?php echo $this->Paginator->sort('cod');?></th>
			<th><?php echo $this->Paginator->sort('kind_id');?></th>
			<th><?php echo $this->Paginator->sort('count_id');?></th>
			<th><?php echo $this->Paginator->sort('measure');?></th>
			<th><?php echo $this->Paginator->sort('alias');?></th>
			<th><?php echo $this->Paginator->sort('organization_id');?></th>
			<th><?php echo $this->Paginator->sort('section_id');?></th>
			<th><?php echo $this->Paginator->sort('room');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($equipment as $equipment):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $equipment['Equipment']['id']; ?>&nbsp;</td>
		<td><?php echo $equipment['Equipment']['description']; ?>&nbsp;</td>
		<td><?php echo $equipment['Equipment']['cod']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($equipment['Kind']['name'], array('controller' => 'kinds', 'action' => 'view', $equipment['Kind']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($equipment['Count']['name'], array('controller' => 'counts', 'action' => 'view', $equipment['Count']['id'])); ?>
		</td>
		<td><?php echo $equipment['Equipment']['measure']; ?>&nbsp;</td>
		<td><?php echo $equipment['Equipment']['alias']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($equipment['Organization']['name'], array('controller' => 'organizations', 'action' => 'view', $equipment['Organization']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($equipment['Section']['name'], array('controller' => 'sections', 'action' => 'view', $equipment['Section']['id'])); ?>
		</td>
		<td><?php echo $equipment['Equipment']['room']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($equipment['User']['name'], array('controller' => 'users', 'action' => 'view', $equipment['User']['id'])); ?>
		</td>
		<td><?php echo $equipment['Equipment']['created']; ?>&nbsp;</td>
		<td><?php echo $equipment['Equipment']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $equipment['Equipment']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $equipment['Equipment']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $equipment['Equipment']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $equipment['Equipment']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Equipment', true), array('action' => 'add')); ?></li>
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