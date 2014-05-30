<div class="equipment view">
<h2><?php  __('Materiais');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Ficha Carga'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $equipment['0']['Equipment']['fcg']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Descrição'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $equipment['0']['Equipment']['description']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Classe'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($equipment['0']['Kind']['name'], array('controller' => 'kinds', 'action' => 'view', $equipment['0']['Kind']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Conta'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($equipment['0']['Count']['name'], array('controller' => 'counts', 'action' => 'view', $equipment['0']['Count']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Descrição Sucinta'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $equipment['0']['Equipment']['alias']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Seção a que Pertence'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($equipment['0']['Owner']['acronym'], array('controller' => 'owners', 'action' => 'view', $equipment['0']['Owner']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Preço Total'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $equipment['0']['Equipment']['price']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Unidade de Medida'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($equipment['0']['Measure']['name'], array('controller' => 'measures', 'action' => 'view', $equipment['0']['Measure']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Quantidade'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $equipment['0']['Equipment']['quantity']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Inluido no Registro'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Locale->dateTime($equipment['0']['Equipment']['includeRegister'], true, true); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Locale->dateTime($equipment['0']['Equipment']['created']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Locale->dateTime($equipment['0']['Equipment']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>

<div class="related">
	<h3><?php __('Patrimonios Relacionados');?></h3>
	<?php if (!empty($equipment['0']['Patrimony'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th class="ui-widget-header"><?php __('Código Interno'); ?></th>
		<th class="ui-widget-header"><?php __('Patrimonio'); ?></th>
		<th class="ui-widget-header"><?php __('BMP'); ?></th>
		<th class="ui-widget-header"><?php __('Seção'); ?></th>
		<th class="ui-widget-header"><?php __('Sala'); ?></th>
		<th class="ui-widget-header"><?php __('Usuário'); ?></th>
		<th class="ui-widget-header"><?php __('Conferencia'); ?></th>
		<th class="ui-widget-header"><?php __('Ações');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($equipment['0']['Patrimony'] as $eq):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $eq['id'];?></td>
			<td><?php echo $eq['orderNum'];?></td>
			<td><?php echo $eq['bmpNumber'];?></td>
			<?php if(!empty($eq['Section']['name'])):?>
			<td><?php echo $eq['Section']['name'];?></td>
			<?php else:?>
			<td><?php echo $eq['section_id'];?></td>
			<?php endif; ?>
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
<?php endif; ?>
<?php echo $this->Html->link(__('Adcionar Patrimonio Relacionado ', true), array('controller' => 'patrimonies','action' => 'add', $equipment['0']['Equipment']['id'])); ?>

</div>

