<div class="equipment view">
<h2><?php  __('Materiais');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Ficha Carga'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $equipment['Equipment']['fcg']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Descrição'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $equipment['Equipment']['description']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Classe'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($equipment['Kind']['name'], array('controller' => 'kinds', 'action' => 'view', $equipment['Kind']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Conta'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($equipment['Count']['name'], array('controller' => 'counts', 'action' => 'view', $equipment['Count']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Descrição Sucinta'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $equipment['Equipment']['alias']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Seção a que Pertence'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($equipment['Owner']['acronym'], array('controller' => 'owners', 'action' => 'view', $equipment['Owner']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Preço Total'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $equipment['Equipment']['price']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Unidade de Medida'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($equipment['Measure']['name'], array('controller' => 'measures', 'action' => 'view', $equipment['Measure']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Quantidade'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $equipment['Equipment']['quantity']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Inluido no Registro'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Locale->dateTime($equipment['Equipment']['includeRegister'], true, true); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Locale->dateTime($equipment['Equipment']['created']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Locale->dateTime($equipment['Equipment']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>

<div class="related">
	<h3><?php __('Patrimonios Relacionados');?></h3>
	<?php if (!empty($equipment['Patrimony'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th class="ui-widget-header"><?php __('Código Interno'); ?></th>
		<th class="ui-widget-header"><?php __('Ordem Numérica'); ?></th>
		<th class="ui-widget-header"><?php __('Seção'); ?></th>
		<th class="ui-widget-header"><?php __('Sala'); ?></th>
		<th class="ui-widget-header"><?php __('Usuário'); ?></th>
		<th class="ui-widget-header"><?php __('Conferencia'); ?></th>
		<th class="ui-widget-header"><?php __('Ações');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($equipment['Patrimony'] as $eq):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $eq['id'];?></td>
			<td><?php echo $eq['orderNum'];?></td>
			<td><?php echo $eq['section_id'];?></td>
			<td><?php echo $eq['room'];?></td>
			<td><?php echo $eq['user_id'];?></td>
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
<?php endif; ?>
<?php echo $this->Html->link(__('Adcionar Patrimonio Relacionado ', true), array('controller' => 'patrimonies','action' => 'add', $equipment['Equipment']['id'])); ?>
</div>

