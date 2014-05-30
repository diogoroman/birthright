<?php 
	echo $this->Html->script('datepicker', false);
?>
<div class="index">
	<h2><?php __('Relatórios');?></h2>
	
	<div class="periodFilter">
	<?php 
		echo $this->Form->create('Report', array('action' => 'report'));
		echo $this->Form->input('period_start', array('label' => __('De', true), 'type' => 'text', 'div' => 'smallDateInput required', 'class' => 'term'));
		echo $this->Form->input('period_end', array('label' => __('Até', true), 'type' => 'text', 'div' => 'smallDateInput required',  'class' => 'term'));
		echo $this->Form->input('report_type', array('type' => 'hidden', 'div' => false));
		echo $this->Form->end();
	?>
	</div>
	<div class="reports-menu">
		<?php 
		foreach ($options as $op => $name)
		{	
		?>		
			<div class="report-options thin-border">
			<span class="report-option"><?php echo $name?></span>
				<?php
					echo $this->Html->link(' ',
						array('controller' => 'reports', 'action' => 'report', false),
						array('title' => __('Visualizar', true), 'class' => 'view generate-report jbutton', 'rel' => $op)
					);
					
					echo $this->Html->link(' ', 
						array('controller' => 'reports', 'action' => 'report', false),
						array('title' => __('Imprimir', true), 'class' => 'print generate-report jbutton', 'rel' => $op)	
					);
				?>
			</div>
		<?php 
		}
		?>
	</div>
</div>