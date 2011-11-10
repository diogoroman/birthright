<?php
$controller = $this->params['controller'];
$passed = $this->params['pass'];
$id = isset($this->params['pass'][0]) ? $this->params['pass'][0] : '';
$prefix = $this->params['prefix'];
$action = $this->params['action'];

if(isset($backUrl))
{
	$buttons = $this->Html->link(
		$this->Html->image('agt_back.png', array('alt' => __('Voltar', true))),
		$backUrl,
		array('escape' => false, 'class' => 'jbutton', 'title' => __('Voltar', true))
	);
}
else
{
	$buttons = $this->Html->link(
		$this->Html->image('agt_back.png', array('alt' => __('Voltar', true))),
		'#',
		array('escape' => false, 'class' => 'jbutton jsHistoryBack', 'title' => __('Voltar', true))
	);
}

if($action != $prefix.'_index' && $controller != 'attachments')
{
	$buttons .= $this->Menu->button('Visualizar Todos', 'all.png', array('controller' => $controller, 'action' => 'index'));
}

if($action != $prefix.'_add' && !in_array($controller, array('attachments' , 'reports', 'activities', 'audiences', 'expertises', 'logs')))
{
	$buttons .= $this->Menu->button('Criar', 'add.png', array('controller' => $controller, 'action' => 'add'));
}

if($action == $prefix.'_index' && $controller != 'reports')
{
	$buttons .= $this->Html->link(
		$this->Html->image('search.png', array('alt' => __('Pesquisar', true))),
		'#',
		array('escape' => false, 'id' => 'buttonSearch', 'class' => 'jbutton', 'title' => __('Pesquisar', true))
	);
}


?>
<div class="buttons">

<?php

//using the Search element
echo $buttons, $this->element('search',
	array(
		'getVars' => array('users' => array('group')),
		'query_var' => 'q',
		'options' => array(
			'label' => '', 
			'class' => 'search',
			'div' => false
		)
	)
); ?>
</div>