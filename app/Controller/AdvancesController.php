<?php
App::uses('AppController', 'Controller');
/**
 * Advances Controller
 *
 * @property Advance $Advance
 * @property PaginatorComponent $Paginator
 */
class AdvancesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
            if($this->sprawdzam_dostep(1)){
                $this->Advance->recursive = 0;
		$this->set('advances', $this->Paginator->paginate());
            } else  {
                $this->Advance->recursive = 0;
                $options = array('conditions' => array('user_id' => $this->Auth->user('id')));
                $this->set('advances', $this->Advance->find('all', $options),$this->Paginator->paginate());
            }
		
                
                
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Advance->exists($id)) {
			throw new NotFoundException(__('Invalid advance'));
		}
		$options = array('conditions' => array('Advance.' . $this->Advance->primaryKey => $id));
		$this->set('advance', $this->Advance->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
            if(!$this ->sprawdzam_dostep(1)) {
                $options = array('conditions' => array('id' => $this->Auth->user('id')));
            } else {
                $options = null;
            }
		if ($this->request->is('post')) {
			$this->Advance->create();
			if ($this->Advance->save($this->request->data)) {
				$this->Session->setFlash(__('The advance has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The advance could not be saved. Please, try again.'));
			}
		}
		$users = $this->Advance->User->find('list', $options);
            
		$this->set(compact('users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Advance->exists($id)) {
			throw new NotFoundException(__('Invalid advance'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Advance->save($this->request->data)) {
				$this->Session->setFlash(__('The advance has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The advance could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Advance.' . $this->Advance->primaryKey => $id));
			$this->request->data = $this->Advance->find('first', $options);
		}
		$users = $this->Advance->User->find('list');
		$this->set(compact('users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Advance->id = $id;
		if (!$this->Advance->exists()) {
			throw new NotFoundException(__('Invalid advance'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Advance->delete()) {
			$this->Session->setFlash(__('The advance has been deleted.'));
		} else {
			$this->Session->setFlash(__('The advance could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
