<div class="users view">
<h2><?php  __('Usuário');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nome'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nome de Usuário'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['username']; ?>
			&nbsp;
		</dd>
		
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Seção'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($user['Section']['name'], array('controller' => 'sections', 'action' => 'view', $user['Section']['id'])); ?>
			&nbsp;
		</dd>
		
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Grupos'); ?></dt>
		<dd<?php  if ($i++ % 2 == 0) echo $class;?>>
			<?php 
				foreach($user['Group'] as $group)
					echo $group['name'] . '  '; 
			?>
			&nbsp;
		</dd>
	</dl>
</div>

<div class="related">
	<h3><?php __('Patrimonios Sob a Guarda deste Usuário');?></h3>
	<?php if (!empty($patrimonies)):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th class="ui-widget-header"><?php __('Código Interno'); ?></th>
		<th class="ui-widget-header"><?php __('Ordem Numérica'); ?></th>
		<th class="ui-widget-header"><?php __('Descrição'); ?></th>
		<th class="ui-widget-header"><?php __('Seção'); ?></th>
		<th class="ui-widget-header"><?php __('Sala'); ?></th>
		<th class="ui-widget-header"><?php __('Conferencia'); ?></th>
		<th class="ui-widget-header"><?php __('Ações');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($patrimonies as $eq):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $eq['Patrimony']['id'];?></td>
			<td><?php echo $eq['Patrimony']['orderNum'];?></td>
			<td><?php echo $eq['Equipment']['description'];?></td>
			<?php if(!empty($eq['Section']['name'])):?>
			<td><?php echo $eq['Section']['name'];?></td>
			<?php else:?>
			<td><?php echo $eq['Patrimony']['section_id'];?></td>
			<?php endif; ?>
			<td><?php echo $eq['Patrimony']['room'];?></td>
			<td><?php echo $eq['Patrimony']['conference'];?></td>
			<td class="actions">
			<?php echo $this->Html->link(__('Ver', true), array('controller' => 'patrimonies','action' => 'view', $eq['Patrimony']['id']), array('class' => 'action-view')); ?>
			<?php echo $this->Html->link(__('Editar', true), array('controller' => 'patrimonies','action' => 'edit', $eq['Patrimony']['id']),array('class' => 'action-edit')); ?>
			<?php 
				echo $this->Html->link(__('Excluir', true), array(
					'controller' => 'patrimonies', 'action' => 'delete', 
					$eq['Patrimony']['id']), 
					array(
						'class' => 'action-delete'
					), 
					__('Você tem certeza que deseja excluir o material ', true) . $eq['Patrimony']['orderNum'] . '?' 
				); 
			?>
		</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>