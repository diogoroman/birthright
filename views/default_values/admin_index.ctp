<div class="defaultValues index">
	<h2><?php __('Default Values');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('kind_id');?></th>
			<th><?php echo $this->Paginator->sort('count_id');?></th>
			<th><?php echo $this->Paginator->sort('measure_id');?></th>
			<th><?php echo $this->Paginator->sort('owner_id');?></th>
			<th><?php echo $this->Paginator->sort('equipment_type_id');?></th>
			<th><?php echo $this->Paginator->sort('patrimony_status_id');?></th>
			<th><?php echo $this->Paginator->sort('section_id');?></th>
			<th><?php echo $this->Paginator->sort('position_id');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($defaultValues as $defaultValue):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $defaultValue['DefaultValue']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($defaultValue['Kind']['name'], array('controller' => 'kinds', 'action' => 'view', $defaultValue['Kind']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($defaultValue['Count']['name'], array('controller' => 'counts', 'action' => 'view', $defaultValue['Count']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($defaultValue['Measure']['name'], array('controller' => 'measures', 'action' => 'view', $defaultValue['Measure']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($defaultValue['Owner']['name'], array('controller' => 'owners', 'action' => 'view', $defaultValue['Owner']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($defaultValue['EquipmentType']['name'], array('controller' => 'equipment_types', 'action' => 'view', $defaultValue['EquipmentType']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($defaultValue['PatrimonyStatus']['name'], array('controller' => 'patrimony_statuses', 'action' => 'view', $defaultValue['PatrimonyStatus']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($defaultValue['Section']['name'], array('controller' => 'sections', 'action' => 'view', $defaultValue['Section']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($defaultValue['Position']['name'], array('controller' => 'positions', 'action' => 'view', $defaultValue['Position']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $defaultValue['DefaultValue']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $defaultValue['DefaultValue']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $defaultValue['DefaultValue']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $defaultValue['DefaultValue']['id'])); ?>
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