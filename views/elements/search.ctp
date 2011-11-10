<div id="search"> 
<?php
	echo $this->RSearch->searchForm(
		'q', 
		array('label' => '', 'class' => 'search', 'div' => false),
		array('users' => array('group'))
	);
?>
</div>
