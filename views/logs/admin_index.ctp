<div class="logs index">
	<h2><?php __('Histórico');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th class="ui-widget-header"><?php echo $this->Paginator->sort(__('Título', true), 'title');?></th>
			<th class="ui-widget-header"><?php echo $this->Paginator->sort(__('Criado em', true), 'created');?></th>
			<th class="ui-widget-header"><?php __('Ações');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($logs as $log):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $log['Log']['title']; ?>&nbsp;</td>
		<td><?php echo $this->Locale->datetime($log['Log']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver', true), array('action' => 'view', $log['Log']['id']), array('class' => 'action-view')); ?>
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
		<div class="paging">
		<?php 
			$filter = null;
			if(isset($this->params['named']['q']) || isset($this->params['url']['q']))
				$filter = array('filters' => array('q' => isset($this->params['url']['q']) ? $this->params['url']['q'] : $this->params['named']['q']));
			$this->RPaginator->controls($this->Paginator, $filter);
		?>
	</div>
	</div>
</div>