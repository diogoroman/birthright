<?php
class PatrimoniesController extends AppController {

	var $name = 'Patrimonies';

	var $helpers = array('Locale.Locale');
	
	public $components = array(
		'RSearch.PaginationFilter' => array(
			'autoFilter' => true,
			'comparision' => 'or',
			'queryFields' => array ( 'Equipment.description' => 'like',
									  'Patrimony.orderNum' => '=',
									  'Equipment.fcg' => '=',
									  'Patrimony.id' => '=',
									  'Patrimony.bmpNumber' => '=')
		)
	);
	
	function admin_index() {
		if(!empty($this->params['url']['filter']) && $this->params['url']['filter'] == 'waiting')
		{
			$this->Patrimony->recursive = 0;
			$this->paginate['order'] = array('Patrimony.created DESC');
			$this->set('patrimonies', $this->paginate('Patrimony',array(
													  'Patrimony.patrimony_status_id =' => '3')));
		}
		else if(!empty($this->passedArgs['filter']) && $this->passedArgs['filter'] == 'waiting')
		{
			$this->Patrimony->recursive = 0;
			$this->paginate['order'] = array('Patrimony.created DESC');
			$this->set('patrimonies', $this->paginate('Patrimony',array(
													  'Patrimony.patrimony_status_id =' => '3')));
		}
		else
		{
			$this->Patrimony->recursive = 0;
			$this->paginate['order'] = array('Patrimony.created DESC');
			$this->set('patrimonies', $this->paginate());
		}
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid patrimony', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('patrimony', $this->Patrimony->read(null, $id));
	}

	function admin_add($equipmentId = null) {
		if (!empty($this->data)) {
			$this->Patrimony->create();
			if ($this->Patrimony->save($this->data)) {
				if(!empty($this->data['Patrimony']['bmpNumber'])){
					$idpat = array('type' => 'BMP', 'value' => $this->data['Patrimony']['bmpNumber']);
				}
				else if(!empty($this->data['Patrimony']['orderNum'])){
					$idpat = array('type' => 'PATRIMONIO', 'value' => $this->data['Patrimony']['orderNum']);
				}
				else{
					$idpat = array('type' => 'Código Interno', 'value' => $this->Patrimony->id);
				}
				$this->__setFlash('O Patrimonio '.$idpat['value'].'('.$idpat['type'].') foi Gravado com Sucesso','system-success');
				print_r($this->data);
				$this->redirect(array('controller' => 'Equipment', 'action' => 'view', $this->data['Patrimony']['equipment_id']));
			} else {
				$this->Session->setFlash(__('O Patrimonio não pode ser Gravado, verifique os campos preenchidos e tente novamente', true));
			}
		}
		if(!empty($equipmentId))
		{
			$this->set(compact('equipmentId'));
		}
		$equipment = $this->Patrimony->Equipment->find('list',array('fields' => array('Equipment.id', 'Equipment.fcg')));
		$organizations = $this->Patrimony->Organization->find('list');
		$sections = $this->Patrimony->Section->find('list',array('order' => array('Section.name')));
		$users = $this->Patrimony->User->find('list');
		$patrimonyStatuses = $this->Patrimony->PatrimonyStatus->find('list',array('fields' => array('PatrimonyStatus.id', 'PatrimonyStatus.name')));
		$this->set(compact('equipment', 'organizations', 'sections', 'users','patrimonyStatuses'));
		
		//busca os valores padrões
		$this->set('defaultValues', $this->Patrimony->Section->DefaultValue->read(null, '1'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Patrimonio Invalido', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			//$this->Patrimony->set(array('lock' => '0'));
			if ($this->Patrimony->save($this->data)) {
				if(!empty($this->data['Patrimony']['bmpNumber'])){
					$idpat = array('type' => 'BMP', 'value' => $this->data['Patrimony']['bmpNumber']);
				}
				else if(!empty($this->data['Patrimony']['orderNum'])){
					$idpat = array('type' => 'PATRIMONIO', 'value' => $this->data['Patrimony']['orderNum']);
				}
				else{
					$idpat = array('type' => 'Código Interno', 'value' => $this->Patrimony->id);
				}
				$this->__setFlash('O Patrimonio '.$idpat['value'].'('.$idpat['type'].') foi modificado com sucesso','system-success');
				$this->redirect(array('action' => 'view', $this->Patrimony->id));
			} else {
				$this->__setFlash('O Patrimonio não pode ser Gravado, verifique os campos preenchidos e tente novamente', 'system-error');
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Patrimony->read(null, $id);
			/*
			if($this->data['Patrimony']['lock'] == 1)
			{
				$this->__setFlash('Este patrimonio ja esta sendo editado por outra pessoa. Tente novamente mais tarde.', 'system-warning');
				$this->redirect(array('action' => 'view', $this->data['Patrimony']['id']));
			}

			else
			{
				$this->Patrimony->set(array('lock' => '1'));
				if(!$this->Patrimony->save())
				{
					$this->__setFlash('Erro interno, informe o desenvolvedor', 'system-error');
					$this->redirect(array('action' => 'view', $this->data['Patrimony']['id']));
				}
			}
			*/
		}
		$equipment = $this->Patrimony->Equipment->find('list',array('fields' => array('Equipment.id', 'Equipment.fcg')));
		$organizations = $this->Patrimony->Organization->find('list');
		$sections = $this->Patrimony->Section->find('list',array('order' => array('Section.name')));
		$users = $this->Patrimony->User->find('list',array('order' => array('User.name')));
		$patrimonyStatuses = $this->Patrimony->PatrimonyStatus->find('list');
		$this->set(compact('equipment', 'organizations', 'sections', 'users','patrimonyStatuses'));
		
		$this->set('patrimony', $this->Patrimony->read(null, $id));
		
		$this->set('defaultValues', $this->Patrimony->Section->DefaultValue->read(null, '1'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for patrimony', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Patrimony->delete($id)) {
			$this->Session->setFlash(__('Patrimony deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Patrimony was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	/*
    function admin_viewPdf($id = null)
    {
 		App::import('Vendor','xtcpdf');
    	$this->set('pdf',new XTCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false));
    	if (!$id) 
    	{
			$this->Session->setFlash('Sorry, there was no PDF selected.');
			$this->redirect(array('action'=>'index'), null, true);
		}
		$this->layout = 'pdf'; //this will use the pdf.ctp layout
		$this->render();
    	
    	
        if (!$id)
        {
            $this->Session->setFlash('Sorry, there was no property ID submitted.');
            $this->redirect(array('action'=>'index'), null, true);
        }
        Configure::write('debug',0); // Otherwise we cannot use this method while developing
		
        $id = intval($id);
		
        
        $property = $this->__view($id); // here the data is pulled from the database and set for the view
		
        if (empty($property))
        {
            $this->Session->setFlash('Sorry, there is no property with the submitted ID.');
            $this->redirect(array('action'=>'index'), null, true);
        }
		
        //$this->layout = 'pdf'; //this will use the pdf.ctp layout
        //$this->render();
    }
    */
    function admin_viewPdf($id = null) 
    {
		if (!$id) {
		$this->Session->setFlash('Sorry, there was no PDF selected.');
		$this->redirect(array('action'=>'index'), null, true);
		}
		$this->layout = 'pdf'; //this will use the pdf.ctp layout
		$this->render();
	}
	function admin_ajuda()
	{

	}
	
}
?>
