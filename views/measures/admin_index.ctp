<div class="measures index">
	<h2><?php __('Measures');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
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
		<td><?php echo $measure['Measure']['id']; ?>&nbsp;</td>
		<td><?php echo $measure['Measure']['name']; ?>&nbsp;</td>
		<td><?php echo $this->Locale->dateTime($measure['Measure']['created']); ?>&nbsp;</td>
		<td><?php echo $this->Locale->dateTime($measure['Measure']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $measure['Measure']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $measure['Measure']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $measure['Measure']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $measure['Measure']['id'])); ?>
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