<div class="counts view">
<h2><?php  __('Conta');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $count['0']['Count']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nome'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $count['0']['Count']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Código'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $count['0']['Count']['cod']; ?>
			&nbsp;
		</dd>
	</dl>
</div>

<div class="related">

	<h3><?php __('Patrimonios relacionados a essa conta');?></h3>
	<?php if (!empty($count['0']['Equipment'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
			<th class="ui-widget-header"><?php __('Código Interno'); ?></th>
			<th class="ui-widget-header"><?php __('Patrimonio'); ?></th>
			<th class="ui-widget-header"><?php __('BMP'); ?></th>
			<th class="ui-widget-header"><?php __('Descrição'); ?></th>
			<th class="ui-widget-header"><?php __('Seção'); ?></th>
			<th class="ui-widget-header"><?php __('Sala'); ?></th>
			<th class="ui-widget-header"><?php __('Conferencia'); ?></th>
			<th class="ui-widget-header"><?php __('Ações');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($count['0']['Equipment'] as $equipment):
			foreach($equipment['Patrimony'] as $eq):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
				<tr<?php echo $class;?>>
					<td><?php echo $eq['id'];?></td>
					<td><?php echo $eq['orderNum'];?></td>
					<td><?php echo $eq['bmpNumber'];?></td>
					<td><?php echo $equipment['description'];?></td>
					<td><?php echo $eq['section_id'];?></td>
					<td><?php echo $eq['room'];?></td>
					<td><?php echo $eq['conference'];?></td>
					<td class="actions">
					<?php echo $this->Html->link(__('Ver', true), array('controller' => 'patrimonies','action' => 'view', $eq['id']), array('class' => 'action-view')); ?>
					<?php echo $this->Html->link(__('Editar', true), array('controller' => 'patrimonies','action' => 'edit', $eq['id']),array('class' => 'action-edit')); ?>
					<?php 
						echo $this->Html->link(__('Excluir', true), array(
							'controller' => 'patrimonies', 'action' => 'delete', 
							$eq['id']), 
							array(
								'class' => 'action-delete'
							), 
							__('Você tem certeza que deseja excluir o material ', true) . $eq['orderNum'] . '?' 
						); 
					?>
					</td>
				</tr>
		<?php 
			endforeach;
		endforeach; 
		?>
	</table>
	<?php endif; ?>
	
</div>
