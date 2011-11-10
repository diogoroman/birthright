<?php
class MeasuresController extends AppController {

	var $name = 'Measures';

	function admin_index() {
		$this->Measure->recursive = 0;
		$this->set('measures', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid measure', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('measure', $this->Measure->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Measure->create();
			if ($this->Measure->save($this->data)) {
				$this->Session->setFlash(__('The measure has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The measure could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid measure', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Measure->save($this->data)) {
				$this->Session->setFlash(__('The measure has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The measure could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Measure->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for measure', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Measure->delete($id)) {
			$this->Session->setFlash(__('Measure deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Measure was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>