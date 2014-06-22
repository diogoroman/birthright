<?php
//App::import('Vendor','xtcpdf');
class PatrimoniesController extends AppController {

	var $name = 'Patrimonies';
        public $components = array('Paginator');
        public $paginate = array();

	var $helpers = array('Locale.Locale');
	/*
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
	*/
        
        function index() {
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

        function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid patrimony', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('patrimony', $this->Patrimony->read(null, $id));
	}
        
	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid patrimony', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('patrimony', $this->Patrimony->read(null, $id));
	}

        function add($equipmentId = null) {
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
				//print_r($this->data);
				$this->redirect(array('controller' => 'Equipment', 'action' => 'view', $this->data['Patrimony']['equipment_id']));
			} else {
				$this->setFlash(__('O Patrimonio não pode ser Gravado, verifique os campos preenchidos e tente novamente', 'system-error'));
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
				//print_r($this->data);
				$this->redirect(array('controller' => 'Equipment', 'action' => 'view', $this->data['Patrimony']['equipment_id']));
			} else {
				$this->setFlash(__('O Patrimonio não pode ser Gravado, verifique os campos preenchidos e tente novamente', 'system-error'));
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

        function edit($id = null) {
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

        function delete($id = null) {
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
		$xpdf = new Xtcpdf('L', PDF_UNIT, 'A4', true, 'UTF-8', false);
		$xpdf->SetCreator('Birthright - Patrimonio ATI/SINFO');
		$xpdf->SetAuthor('PHPMS');
		$xpdf->mainTitle =  '';
		$xpdf->xfootertext = '';
		//$xpdf->xheaderimage = Configure::read('Comitiva.certified_img');
		$xpdf->xheadertext = '';
		$xpdf->date = date('d-m-Y');

		$this->layout = 'blank';
		$this->set('xpdf', $xpdf);
		$this->set('patrimony', $this->Patrimony->read(null, $id));
		//$this->response->type('application/pdf');
	}
         

	function admin_ajuda()
	{

	}
	function admin_reportNotCheck()
	{

		$xpdf = new Xtcpdf('L', PDF_UNIT, 'A4', true, 'UTF-8', false);
		$xpdf->SetCreator('Birthright - Patrimonio ATI/SINFO');
		$xpdf->SetAuthor('ATI/SINFO');
		$xpdf->mainTitle =  '';
		$xpdf->xfootertext = '';
		//$xpdf->xheaderimage = Configure::read('Comitiva.certified_img');
		$xpdf->xheadertext = '';
		$xpdf->date = date('d-m-Y');

		$this->layout = 'blank';
		$this->set('xpdf', $xpdf);
		$this->set('patrimonies', $this->Patrimony->find('all', array('recursive' => 0)));
		//$this->response->type('application/pdf');

	}
	function admin_reportWaitDischarge()
	{

		$xpdf = new Xtcpdf('L', PDF_UNIT, 'A4', true, 'UTF-8', false);
		$xpdf->SetCreator('Birthright - Patrimonio ATI/SINFO');
		$xpdf->SetAuthor('ATI/SINFO');
		$xpdf->mainTitle =  '';
		$xpdf->xfootertext = '';
		//$xpdf->xheaderimage = Configure::read('Comitiva.certified_img');
		$xpdf->xheadertext = '';
		$xpdf->date = date('d-m-Y');

		$this->layout = 'blank';
		$this->set('xpdf', $xpdf);
		$this->set('patrimonies', $this->Patrimony->find('all', array('recursive' => 0)));
		//$this->response->type('application/pdf');

	}
	function admin_reportEmCautela()
	{

		$xpdf = new Xtcpdf('L', PDF_UNIT, 'A4', true, 'UTF-8', false);
		$xpdf->SetCreator('Birthright - Patrimonio ATI/SINFO');
		$xpdf->SetAuthor('ATI/SINFO');
		$xpdf->mainTitle =  '';
		$xpdf->xfootertext = '';
		//$xpdf->xheaderimage = Configure::read('Comitiva.certified_img');
		$xpdf->xheadertext = '';
		$xpdf->date = date('d-m-Y');

		$this->layout = 'blank';
		$this->set('xpdf', $xpdf);
		$this->set('patrimonies', $this->Patrimony->find('all', array('recursive' => 0)));
		//$this->response->type('application/pdf');

	}
	*/
}
?>
