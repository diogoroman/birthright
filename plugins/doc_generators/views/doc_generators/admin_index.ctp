<div class="docGenerators index">
	<h2><?php __('Documentos');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort(__('Nome',true),'name');?></th>
			<th><?php echo $this->Paginator->sort(__('Texto Base',true),'text');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($docGenerators as $docGenerator):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $docGenerator['DocGenerator']['name']; ?>&nbsp;</td>
		<td><?php echo $docGenerator['DocGenerator']['text']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Vizualizar', true), array('action' => 'view', $docGenerator['DocGenerator']['id'])); ?>
			<?php echo $this->Html->link(__('Editar', true), array('action' => 'edit', $docGenerator['DocGenerator']['id'])); ?>
			<?php echo $this->Html->link(__('Excluir', true), array('action' => 'delete', $docGenerator['DocGenerator']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $docGenerator['DocGenerator']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('Anterior', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('Próxima', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>