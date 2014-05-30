<div class="docGenerators view">
<h2><?php  __('Gerador de Documentos');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $docGenerator['DocGenerator']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $docGenerator['DocGenerator']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Text'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $docGenerator['DocGenerator']['text']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $docGenerator['DocGenerator']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $docGenerator['DocGenerator']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Doc Generator', true), array('action' => 'edit', $docGenerator['DocGenerator']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Doc Generator', true), array('action' => 'delete', $docGenerator['DocGenerator']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $docGenerator['DocGenerator']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Doc Generators', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Doc Generator', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
