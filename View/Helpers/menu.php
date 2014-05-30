<?php
class MenuHelper extends AppHelper
{
	public $helpers = array('Html');
	
	/**
	 * Método recursive que constrói um menu aninhado com submenus
	 * 
	 * @param $item
	 * @param $label
	 * 
	 * @return $out string
	 */
	public function printItem($item, $label)
	{
		$out = '<li>';
		
		if(isset($item['action']))
		{
			$out .= $this->Html->link($label, array('plugin' => $item['plugin'], 'controller' => $item['controller'], 'action' => $item['action'], isset($item['group_id']) ?  $item['group_id'] : '', $this->params['prefix'] => isset($item['admin']) ? $item['admin'] : true ), array('class' => ''));	
		}
		else 
		{
			$out .= $this->Html->link($label,'#');
		}
		
		if(!isset($item['action']))
		{
			$out .= '<ul >';
			foreach($item as $title => $itens)
			{
				$out .= $this->printItem($itens, $title);
			}
						
			$out .= '</ul>';
		}

		$out .= '</li>';		
		return $out;
	}
	
	/**
	 * 
	 * @param string $title
	 * @param string $img
	 * @param array $url
	 * @param string|null $confirmation
	 * 
	 * @return string
	 */
	public function button($title, $img, $url, $confirmation = null)
	{
		$title = __($title, true);
		$img = '../img/' . $img;
		
		if($confirmation === null)
			$button = $this->Html->link(
				$this->Html->image($img, array('alt' => $title)),
				$url,
				array('escape' => false, 'title' => $title, 'class' => 'jbutton')
			);
		else
			$button = $this->Html->link(
				$this->Html->image($img, array('alt' => $title)),
				$url,
				array('escape' => false, 'title' => $title, 'class' => 'jbutton'),
				__($confirmation, true)
			);
			
		return $button;
	}
}

?>