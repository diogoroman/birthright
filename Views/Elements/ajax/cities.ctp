<?php
if(!empty($cities))
{
	foreach($cities as $id => $name)
	{
		echo '<option value="', $id, '">', $name, '</option>';
	}
}