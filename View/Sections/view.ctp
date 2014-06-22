<div class="sections view">
<h2><?php  __('Seção');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $section['0']['Section']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $section['0']['Section']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Sigla'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $section['0']['Section']['acronym']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Criado'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Locale->dateTime($section['0']['Section']['created']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modificado'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Locale->dateTime($section['0']['Section']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>

<div class="related">
	<h3><?php __('Patrimonios Nesta Seção');?></h3>
	<?php if (!empty($section['0']['Patrimony'])):?>
	<table cellpadding = "0" cellspacing = "0">
		<tr>
			<th class="ui-widget-header"><?php __('Código Interno'); ?></th>
			<th class="ui-widget-header"><?php __('Patrimonio'); ?></th>
			<th class="ui-widget-header"><?php __('BMP'); ?></th>
			<th class="ui-widget-header"><?php __('Descrição'); ?></th>
			<th class="ui-widget-header"><?php __('Sala'); ?></th>
			<th class="ui-widget-header"><?php __('Usuário'); ?></th>
			<th class="ui-widget-header"><?php __('Conferencia'); ?></th>
			<th class="ui-widget-header"><?php __('Ações');?></th>
		</tr>
		<?php
		$i = 0;
		foreach ($section['0']['Patrimony'] as $eq):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
			<tr<?php echo $class;?>>
				<td><?php echo $eq['id'];?></td>
				<td><?php echo $eq['orderNum'];?></td>
				<td><?php echo $eq['bmpNumber'];?></td>
				<td><?php echo $eq['Equipment']['description'];?></td>
				<td><?php echo $eq['room'];?></td>
				<?php if(!empty($eq['User']['name'])):?>
				<td><?php echo $eq['User']['name'];?></td>
				<?php else:?>
				<td><?php echo $eq['user_id'];?></td>
				<?php endif; ?>
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
		<?php endforeach; ?>
	</table>
	
	<?php echo $this->Html->link(__('Exportar para Excel', true), array('controller' => 'sections','action' => 'toExcel', $section['0']['Section']['id'])); ?>
	
	<?php endif; ?>
</div>