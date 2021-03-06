<div class="measures index">
	<h2><?php __('Measures');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th class="ui-widget-header"><?php echo $this->Paginator->sort(__('Nome', true), 'name');?></th>
			<th class="ui-widget-header"><?php echo $this->Paginator->sort(__('Criado', true), 'created');?></th>
			<th class="ui-widget-header"><?php echo $this->Paginator->sort(__('Modificado', true), 'modified');?></th>
			<th  class="ui-widget-header"><?php __('Ações');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($measures as $measure):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $measure['Measure']['name']; ?>&nbsp;</td>
		<td><?php echo $this->Locale->dateTime($measure['Measure']['created']); ?>&nbsp;</td>
		<td><?php echo $this->Locale->dateTime($measure['Measure']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver', true), array('action' => 'view', $measure['Measure']['id']), array('class' => 'action-view'));?>
			<?php echo $this->Html->link(__('Editar', true), array('action' => 'edit', $measure['Measure']['id']), array('class' => 'action-edit'));?>
			<?php echo $this->Html->link(__('Excluir', true), array('action' => 'delete', $measure['Measure']['id']),array('class' => 'action-delete'),  null, sprintf(__('Você tem certeza que deseja excluir a unidade de medida', true), $measure['Measure']['id'])); ?>
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
	'format' => __('Página %page% de %pages%, mostrando %current% registros de %count%, começando no registro %start% e terminando no %end%')
	));
	?>	</p>

	<div class="paging">
		<?php
                /*
			$filter = null;
			if(isset($this->params['named']['q']) || isset($this->params['url']['q']))
				$filter = array('filters' => array('q' => isset($this->params['url']['q']) ? $this->params['url']['q'] : $this->params['named']['q']));
			$this->RPaginator->controls($this->Paginator, $filter);
                 */
		?>
	</div>
</div>