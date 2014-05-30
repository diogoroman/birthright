<?php 
if(isset($menuItems) && !empty($menuItems)):
?>
<ul id="jmenu" class="adx menu">
<?php
	foreach($menuItems as $title => $item)
	{
		echo $this->Menu->printItem($item, $title);
	}	
?>
</ul>
<?php
endif;
?>