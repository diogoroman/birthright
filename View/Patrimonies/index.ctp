<div class="patrimonies index">
	<h2><?php __('Patrimonies');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('equipment_id');?></th>
			<th><?php echo $this->Paginator->sort('organization_id');?></th>
			<th><?php echo $this->Paginator->sort('section_id');?></th>
			<th><?php echo $this->Paginator->sort('room');?></th>
			<th><?php echo $this->Paginator->sort('discrepancy');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th><?php echo $this->Paginator->sort('conference');?></th>
			<th><?php echo $this->Paginator->sort('orderNum');?></th>
			<th><?php echo $this->Paginator->sort('intervalConf');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($patrimonies as $patrimony):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $patrimony['Patrimony']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($patrimony['Equipment']['id'], array('controller' => 'equipment', 'action' => 'view', $patrimony['Equipment']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($patrimony['Organization']['name'], array('controller' => 'organizations', 'action' => 'view', $patrimony['Organization']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($patrimony['Section']['name'], array('controller' => 'sections', 'action' => 'view', $patrimony['Section']['id'])); ?>
		</td>
		<td><?php echo $patrimony['Patrimony']['room']; ?>&nbsp;</td>
		<td><?php echo $patrimony['Patrimony']['discrepancy']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($patrimony['User']['name'], array('controller' => 'users', 'action' => 'view', $patrimony['User']['id'])); ?>
		</td>
		<td><?php echo $patrimony['Patrimony']['conference']; ?>&nbsp;</td>
		<td><?php echo $patrimony['Patrimony']['orderNum']; ?>&nbsp;</td>
		<td><?php echo $patrimony['Patrimony']['intervalConf']; ?>&nbsp;</td>
		<td><?php echo $patrimony['Patrimony']['created']; ?>&nbsp;</td>
		<td><?php echo $patrimony['Patrimony']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $patrimony['Patrimony']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $patrimony['Patrimony']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $patrimony['Patrimony']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $patrimony['Patrimony']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Patrimony', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Equipment', true), array('controller' => 'equipment', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Equipment', true), array('controller' => 'equipment', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Organizations', true), array('controller' => 'organizations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Organization', true), array('controller' => 'organizations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sections', true), array('controller' => 'sections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Section', true), array('controller' => 'sections', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>