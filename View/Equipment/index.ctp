<div class="equipment index">
	<h2><?php echo __('Materiais');?></h2>
	<h4><?php echo __('Adicione a descrição dos novos equipamentos aqui, na tela "ver" de cada equipamento há um link para adcionar um Patrimonio Relacionado. Um equipamento tem 1 ou mais patrimonios relacionados. Utilize a ferramenta de busca para buscar pela descrição ou numero FCG')?></h4>
	<h4><?php echo $this->Html->link(__('Aguardando Inclusão no Registro', true), array('action' => 'index', '?' => array('filter' => 'include'))); ?></h4>
	<h4><?php echo $this->Html->link(__('Todos os Registros', true), array('action' => 'index')); ?></h4>
	<h4><?php //echo $this->Html->link(__('Acertar Preços', true), array('action' => 'acert_value')); ?></h4>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th class="ui-widget-header"><?php echo $this->Paginator->sort(__('Numero Carga', true));?></th>
			<th class="ui-widget-header"><?php echo $this->Paginator->sort(__('Descrição', true));?></th>
			<th class="ui-widget-header"><?php echo $this->Paginator->sort(__('Incluido no Registro', true));?></th>
			<th class="ui-widget-header"><?php echo __('Ações');?></th>
	</tr>
	<?php
	
	$i = 0;
	foreach ($equipment as $gear):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
		
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $gear['Equipment']['fcg']; ?>&nbsp;</td>
		<td><?php echo $gear['Equipment']['description']; ?>&nbsp;</td>
		<td><?php echo $this->Locale->dateTime($gear['Equipment']['includeRegister'],true,true); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver', true), array('action' => 'view', $gear['Equipment']['id']), array('class' => 'action-view')); ?>
			<?php echo $this->Html->link(__('Editar', true), array('action' => 'edit', $gear['Equipment']['id']),array('class' => 'action-edit')); ?>
			<?php 
				echo $this->Html->link(__('Excluir', true), array(
					'action' => 'delete', 
					$gear['Equipment']['id']), 
					array(
						'class' => 'action-delete'
					), 
					__('Você tem certeza que deseja excluir o material ', true) . $gear['Equipment']['description'] . '?' 
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
	'format' => __('Página %page% de %pages%, mostrando %current% registros de %count%, começando no registro %start% e terminando no %end%')
	));
	?>
        </p>
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