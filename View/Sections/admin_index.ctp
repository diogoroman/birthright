<div class="sections index">
	<h2><?php __('Seções/Dependencias');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th class="ui-widget-header"><?php echo $this->Paginator->sort(__('Nome',true),'name');?></th>
			<th class="ui-widget-header"><?php echo $this->Paginator->sort(__('Sigla',true),'acronym');?></th>
			<th class="ui-widget-header"><?php echo $this->Paginator->sort(__('Criado',true),'created');?></th>
			<th class="ui-widget-header"><?php echo $this->Paginator->sort(__('Modificado',true),'modified');?></th>
			<th class="ui-widget-header"><?php __('Ações');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($sections as $section):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $section['Section']['name']; ?>&nbsp;</td>
		<td><?php echo $section['Section']['acronym']; ?>&nbsp;</td>
		<td><?php echo $this->Locale->dateTime($section['Section']['created']); ?>&nbsp;</td>
		<td><?php echo $this->Locale->dateTime($section['Section']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver', true), array('action' => 'view', $section['Section']['id']), array('class' => 'action-view')); ?>
			<?php echo $this->Html->link(__('Editar', true), array('action' => 'edit', $section['Section']['id']), array('class' => 'action-edit')); ?>
			<?php echo $this->Html->link(__('Excluir', true), array('action' => 'delete', $section['Section']['id']), array('class' => 'action-delete'), null, sprintf(__('Are you sure you want to delete # %s?', true), $section['Section']['id'])); ?>
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