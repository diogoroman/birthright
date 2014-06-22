<?php
/**
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2009, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     
 * @link          
 * @package       
 * @subpackage    cake.cake.console.libs.templates.skel.views.layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php 
		__('Sistema de Patrimonio GIA-SJ:'); 
		__($title_for_layout);
		?>
	</title>
	<?php
		echo $this->Html->meta('icon', '/img/giasj.icon.gif');		
		echo $this->Html->css('main');
		echo $this->Html->css('AdxMenu');
		echo $this->Html->css('ui');
		echo $this->Html->script('jquery');
		echo $this->Html->script('jquery-ui');
		echo $this->Html->script('tooltips.min');
		echo $this->Html->script('AdxMenu');
		echo $this->Html->script('ui');
        ?>

</head>
<body>
	<div id="container">
		<div id="header">
			<div class="logo">
				<img src="/img/header.png"/>
			</div>
			<?php echo $this->element('jmenu'); ?>
			
		</div>
		<div id="content">
			<?php echo $this->Session->flash(); ?>
			<?php if(isset($activeUser)) echo $this->element('buttons') ?>
			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
		<?php echo $this->Html->image('giasj.icon.gif', array('alt'=> __("Desenvolvido em parceria com Radig - Soluções em TI", true), 'border'=> '0', 'url' => 'http://www.giasj.cta.br/', 'target'=>'_blank'));?>
		</div>
	</div>
</body>
</html>