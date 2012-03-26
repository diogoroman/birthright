
<div class="patrimonies index">
	<h2><?php __('Patrimonios');?></h2>
	<h4><?php echo $this->Html->link(__('Aguardando Descarga', true), array('action' => 'index', '?' => array('filter' => 'waiting'))); ?></h4>
	<table cellpadding="0" cellspacing="0">
	<tr>
		<th class="ui-widget-header"><?php echo $this->Paginator->sort(__('Código Interno', true),'id');?></th>
		<th class="ui-widget-header"><?php echo $this->Paginator->sort(__('Ordem Numérica', true),'orderNum');?></th>
		<th class="ui-widget-header"><?php echo $this->Paginator->sort(__('Material', true),'Equipment.description');?></th>
		<th class="ui-widget-header"><?php echo $this->Paginator->sort(__('Seção', true),'section_id');?></th>
		<th class="ui-widget-header"><?php echo $this->Paginator->sort(__('Sala', true),'room');?></th>
		<th class="ui-widget-header"><?php echo $this->Paginator->sort(__('Status', true),'patrimony_status_id');?></th>
		<th class="ui-widget-header"><?php echo $this->Paginator->sort(__('Discrepancia', true),'discrepancy');?></th>
		<th class="ui-widget-header"><?php echo $this->Paginator->sort(__('Usuário', true),'user_id');?></th>
		<th class="ui-widget-header"><?php echo $this->Paginator->sort(__('Conferencia', true),'conference');?></th>
		<th class="ui-widget-header"><?php echo $this->Paginator->sort(__('Inclusão no Registro', true),'Equipment.includeRegister');?></th>
		<th class="ui-widget-header"><?php __('Ações');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($patrimonies as $patrimony):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $patrimony['Patrimony']['id']; ?>&nbsp;</td>
		<td><?php echo $patrimony['Patrimony']['orderNum']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($patrimony['Equipment']['description'], array('controller' => 'equipment', 'action' => 'view', $patrimony['Equipment']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($patrimony['Section']['name'], array('controller' => 'sections', 'action' => 'view', $patrimony['Section']['id'])); ?>
		</td>
		<td><?php echo $patrimony['Patrimony']['room']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($patrimony['PatrimonyStatus']['name'], array('controller' => 'patrimony_statuses', 'action' => 'view', $patrimony['PatrimonyStatus']['id'])); ?>
		</td>
		<td><?php echo $patrimony['Patrimony']['discrepancy']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($patrimony['User']['name'], array('controller' => 'users', 'action' => 'view', $patrimony['User']['id'])); ?>
		</td>
		<td><?php echo $this->Locale->dateTime($patrimony['Patrimony']['conference'], true, true); ?>&nbsp;</td>
		<td>
			<?php echo $this->Locale->dateTime($patrimony['Equipment']['includeRegister']); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Cautela', true), array('action' => 'viewPdf', $patrimony['Patrimony']['id']),array('class' => 'action-view')); ?>
			<?php echo $this->Html->link(__('Ver', true), array('action' => 'view', $patrimony['Patrimony']['id']), array('class' => 'action-view')); ?>
			<?php echo $this->Html->link(__('Editar', true), array('action' => 'edit', $patrimony['Patrimony']['id']),array('class' => 'action-edit')); ?>
			<?php 
				echo $this->Html->link(__('Excluir', true), array(
					'action' => 'delete', 
					$patrimony['Patrimony']['id']), 
					array(
						'class' => 'action-delete'
					), 
					__('Você tem certeza que deseja excluir o material ', true) . $patrimony['Patrimony']['orderNum'] . '?' 
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
			//print_r($this->params);
			$filter = null;
			if(isset($this->params['url']['filter']))
				$filter = array('filters' => array('filter' => $this->params['url']['filter']));
			else if(isset($this->params['url']['q']))
				$filter = array('filters' => array('q' => $this->params['url']['q']));
			else if(isset($this->params['named']['q']))
				$filter = array('filters' => array('q' => $this->params['named']['q']));
			else if(isset($this->params['named']['filter']))
				$filter = array('filters' => array('filter' => $this->params['named']['filter']));
			$this->RPaginator->controls($this->Paginator, $filter);
		?>
	</div>
</div>