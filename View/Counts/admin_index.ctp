<div class="counts index">
	<h2><?php __('Conta');?></h2>

	<table cellpadding="0" cellspacing="0">
	<tr>
			<th class="ui-widget-header"><?php echo $this->Paginator->sort('Nome');?></th>
			<th class="ui-widget-header"><?php echo $this->Paginator->sort('cod');?></th>
			<th class="ui-widget-header"><?php __('Ações');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($counts as $count):
		if (!empty($count['Equipment'])):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $count['Count']['name']; ?>&nbsp;</td>
		<td><?php echo $count['Count']['cod']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver', true), array('action' => 'view', $count['Count']['id']), array('class' => 'action-view')); ?>
			<?php echo $this->Html->link(__('Editar', true), array('action' => 'edit', $count['Count']['id']), array('class' => 'action-edit')); ?>
			<?php echo $this->Html->link(__('Excluir', true), array('action' => 'delete', $count['Count']['id']), array('class' => 'action-delete'), null, sprintf(__('Are you sure you want to delete # %s?', true), $count['Count']['id'])); ?>
		</td>
	</tr>
	<?php endif; ?>
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