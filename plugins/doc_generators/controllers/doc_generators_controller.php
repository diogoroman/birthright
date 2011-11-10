<?php
class DocGeneratorsController extends DocGeneratorsAppController {

	var $name = 'DocGenerators';
	public $helpers = array('TinyMce.TinyMce');
	
	function index() {
		$this->DocGenerator->recursive = 0;
		$this->set('docGenerators', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->__setFlash(__('Documento Invalido', 'system-error'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('docGenerator', $this->DocGenerator->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->DocGenerator->create();
			if ($this->DocGenerator->save($this->data)) {
				$this->__setFlash(__('Documento Salvo', 'system-sucess'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->__setFlash(__('O Documento não foi salvo. Tente Novamente.', 'system-warning'));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->__setFlash(__('Documento Invalido', 'system-warning'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->DocGenerator->save($this->data)) {
				$this->__setFlash(__('Documento Salvo', 'system-sucess'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->__setFlash(__('O Documento não foi salvo. Tente Novamente.', 'system-warning'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->DocGenerator->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->__setFlash(__('Invalid id for doc generator', 'system-error'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->DocGenerator->delete($id)) {
			$this->__setFlash(__('Documento Excluido', 'system-sucess'));
			$this->redirect(array('action'=>'index'));
		}
		$this->__setFlash(__('O Documento não foi Excluido. Tente Novamente ', 'system-warning'));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->DocGenerator->recursive = 0;
		$this->set('docGenerators', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->__setFlash(__('Documento Invalido', 'system-error'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('docGenerator', $this->DocGenerator->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->DocGenerator->create();
			if ($this->DocGenerator->save($this->data)) {
				$this->__setFlash(__('O Documento foi adicionado', 'system-sucess'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->__setFlash(__('O Documento não pode ser salvo, tente novamente', 'system-warning'));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->__setFlash(__('Documento Invalido', 'system-error'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->DocGenerator->save($this->data)) {
				$this->__setFlash(__('O documento foi Editado.', 'system-sucess'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->__setFlash(__('O Documento não foi alterado. Tente Novamente.', 'system-warning'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->DocGenerator->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for doc generator', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->DocGenerator->delete($id)) {
			$this->__setFlash(__('Documento Excluido', 'system-sucess'));
			$this->redirect(array('action'=>'index'));
		}
		$this->__setFlash(__('O Documento não foi excluido', 'system-error'));
		$this->redirect(array('action' => 'index'));
	}
}
?>