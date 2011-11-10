<div class="users index">
	<h2><?php __('Users');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th class="ui-widget-header"><?php echo $this->Paginator->sort(__('Nome', true), 'name');?></th>
			<th class="ui-widget-header"><?php echo $this->Paginator->sort(__('Grupo', true), 'group_id');?></th>
			<th class="ui-widget-header"><?php __('Ações');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($users as $user):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $user['User']['name']; ?>&nbsp;</td>
		<td><?php 
		foreach($user['Group'] as $group)
			echo $group['name'] . ' ';
		?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver', true), array('action' => 'view', $user['User']['id']), array('class' => 'action-view')); ?>
			<?php echo $this->Html->link(__('Editar', true), array('action' => 'edit', $user['User']['id']),array('class' => 'action-edit')); ?>
			<?php 
				echo $this->Html->link(__('Excluir', true), array(
					'action' => 'delete', 
					$user['User']['id']), 
					array(
						'class' => 'action-delete'
					), 
					__('Você tem certeza que deseja excluir o usuário ', true) . $user['User']['name'] . '?' 
				); 
			?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	
	if(isset($this->params['url']))
	{
		foreach($this->params['url'] as $key => $value)
			$this->Paginator->options = array_merge($this->Paginator->options, array('url' => array($key => $value)));
	}			
	
	
	echo $this->Paginator->counter(array(
	'format' => __('Página %page% de %pages%, mostrando %current% registros de %count%, começando no registro %start% e terminando no %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php 
			$filter = null;
			if(isset($this->params['named']['q']) || isset($this->params['url']['q']))
				$filter = array('filters' => array('q' => isset($this->params['url']['q']) ? $this->params['url']['q'] : $this->params['named']['q']));
			$this->RPaginator->controls($this->Paginator, $filter);
		?>
	</div>
</div>