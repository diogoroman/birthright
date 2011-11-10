<div class="groups view">
<h2><?php  __('Visualizar Grupo');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>	
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nome'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $group['Group']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Apelido'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $group['Group']['alias']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<?php if (!empty($group['User'])):?>
<div class="related">
	<h3><?php __('Usuários relacionados');?></h3>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th class="ui-widget-header"><?php __('Nome'); ?></th>
		<th class="ui-widget-header"><?php __('Ações');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($group['User'] as $user):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $user['name'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver', true), array('controller' => 'users', 'action' => 'admin_view', $user['id']),  array('class' => 'action-view')); ?>
				<?php echo $this->Html->link(__('Editar', true), array('controller' => 'users', 'action' => 'edit', $user['id']),  array('class' => 'action-edit')); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
</div>
<?php endif; ?>