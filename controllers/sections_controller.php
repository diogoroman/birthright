<?php
class SectionsController extends AppController {

	var $name = 'Sections';

	public $components = array(
		'RSearch.PaginationFilter' => array(
			'autoFilter' => true,
			'comparision' => 'or',
			'queryFields' => array ('Section.name' => 'like')
		)
	);
	
	function index() {
		$this->Section->recursive = 0;
		$this->set('sections', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid section', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('section', $this->Section->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Section->create();
			if ($this->Section->save($this->data)) {
				$this->Session->setFlash(__('The section has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The section could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid section', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Section->save($this->data)) {
				$this->Session->setFlash(__('The section has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The section could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Section->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for section', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Section->delete($id)) {
			$this->Session->setFlash(__('Section deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Section was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->Section->recursive = 0;
		$this->set('sections', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid section', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('section', $this->Section->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Section->create();
			if ($this->Section->save($this->data)) {
				$this->Session->setFlash(__('The section has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The section could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid section', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Section->save($this->data)) {
				$this->Session->setFlash(__('The section has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The section could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Section->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for section', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Section->delete($id)) {
			$this->Session->setFlash(__('Section deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Section was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>