<?php if(!empty($section['0']['Section']['name'])):?>
	<h3><?php __('MATERIAIS DE INFORMÁTICA EM '.$section['0']['Section']['name']);?></h3>
<?php else:?>
	<h3><?php __('MATERIAIS DE INFORMÁTICA EM '.$section['0']['Patrimony']['section_id']);?></h3>
<?php endif;?>
	<?php if (!empty($section['0']['Patrimony'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th class="ui-widget-header"><?php __('Código Interno'); ?></th>
		<th class="ui-widget-header"><?php __('Patrimonio'); ?></th>
		<th class="ui-widget-header"><?php __('BMP'); ?></th>
		<th class="ui-widget-header"><?php __('Descrição'); ?></th>
		<th class="ui-widget-header"><?php __('Sala'); ?></th>
		<th class="ui-widget-header"><?php __('Usuário'); ?></th>
		<th class="ui-widget-header"><?php __('Conferencia'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($section['0']['Patrimony'] as $eq):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr>
			<td><?php echo $eq['id'];?></td>
			<td><?php echo $eq['orderNum'];?></td>
			<td><?php echo $eq['bmpNumber'];?></td>
			<td><?php echo $eq['Equipment']['description'];?></td>
			<td><?php echo $eq['room'];?></td>
			<?php if(!empty($eq['User']['name'])):?>
			<td><?php echo $eq['User']['name'];?></td>
			<?php else:?>
			<td><?php echo $eq['user_id'];?></td>
			<?php endif; ?>
			<td><?php echo $eq['conference'];?></td>
		</tr>
	<?php endforeach; ?>
	</table>
	 <?php $excel->generate($section['0']['Patrimony'], 'LISTA DE TI '.$section['0']['Section']['name']);?> 
<?php endif; ?>
