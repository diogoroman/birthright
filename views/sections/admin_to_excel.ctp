	<?php if (!empty($patrimonies)):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th class="ui-widget-header"><?php __('Código Interno'); ?></th>
		<th class="ui-widget-header"><?php __('Patrimonio'); ?></th>
		<th class="ui-widget-header"><?php __('BMP') ?></th>
		<th class="ui-widget-header"><?php __('Descrição'); ?></th>
		<th class="ui-widget-header"><?php __('Sala'); ?></th>
		<th class="ui-widget-header"><?php __('Conferencia'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($patrimonies as $eq):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $eq['Patrimony']['id'];?></td>
			<td><?php echo $eq['Patrimony']['orderNum'];?></td>
			<td><?php echo $eq['Patrimony']['bmpNumber']?></td>
			<td><?php echo $eq['Equipment']['description'];?></td>
			<td><?php echo $eq['Patrimony']['room'];?></td>
			<td><?php echo $eq['Patrimony']['conference'];?></td>
		</td>
		</tr>
	<?php endforeach; ?>
	</table>
	<?php endif; ?>
	<?php
		$excel->blacklist = array('cod','serialNumber','equipment_id','priceUnit','organization_id','section_id','user_id','discrepancy','observation','intervalConf','discharge_id','lock'); 
		$excel->generate($patrimonies, 'Lista de Informatica ');
	?>