<div class="defaultValues index">
	<h2><?php __('Valores Padrão');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th class="ui-widget-header"><?php echo $this->Paginator->sort(__('Classe', true), 'kind_id');?></th>
			<th class="ui-widget-header"><?php echo $this->Paginator->sort(__('Conta', true), 'count_id');?></th>
			<th class="ui-widget-header"><?php echo $this->Paginator->sort(__('Unidade de Medida', true), 'measure_id');?></th>
			<th class="ui-widget-header"><?php echo $this->Paginator->sort(__('Detentor', true), 'owner_id');?></th>
			<th class="ui-widget-header"><?php echo $this->Paginator->sort(__('Tipo de Equipamento', true), 'equipment_type_id');?></th>
			<th class="ui-widget-header"><?php echo $this->Paginator->sort(__('Status do Patrimonio', true), 'patrimony_status_id');?></th>
			<th class="ui-widget-header"><?php echo $this->Paginator->sort(__('Seção', true), 'section_id');?></th>
			<th class="ui-widget-header"><?php echo $this->Paginator->sort(__('Posição', true), 'position_id');?></th>
			<th class="ui-widget-header"><?php __('Ações');?></th>
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
		<td>
			<?php echo $this->Html->link($defaultValue['Count']['name'], array('controller' => 'kinds', 'action' => 'view', $defaultValue['Kind']['id'])); ?>
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
			<?php echo $this->Html->link(__('Ver', true), array('action' => 'view', $defaultValue['DefaultValue']['id']), array('class' => 'action-view')); ?>
			<?php echo $this->Html->link(__('Editar', true), array('action' => 'edit', $defaultValue['DefaultValue']['id']), array('class' => 'action-edit')); ?>
		</td>
	</tr>
	<?php endforeach; ?>
	</table>
</div>