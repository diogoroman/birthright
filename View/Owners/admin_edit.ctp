<div class="owners form">
<?php echo $this->Form->create('Owner');?>
	<fieldset>
 		<legend><?php __('Admin Edit Owner'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('acronym');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>