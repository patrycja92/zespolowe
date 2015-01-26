<?php
App::uses('AppController', 'Controller');
/**
 * Timetables Controller
 *
 * @property Timetable $Timetable
 * @property PaginatorComponent $Paginator
 */
class TimetablesController extends AppController {

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
                $this->Timetable->recursive = 0;
		$this->set('timetables', $this->Paginator->paginate());
            } else {
                $this->Timetable->recursive = 0;
                $options = array('conditions' => array('user_id' => $this->Auth->user('id')));
                $this->set('timetables', $this->Timetable->find('all', $options),$this->Paginator->paginate());
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
		if (!$this->Timetable->exists($id)) {
			throw new NotFoundException(__('Invalid timetable'));
		}
		$options = array('conditions' => array('Timetable.' . $this->Timetable->primaryKey => $id));
		$this->set('timetable', $this->Timetable->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Timetable->create();
			if ($this->Timetable->save($this->request->data)) {
				$this->Session->setFlash(__('The timetable has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The timetable could not be saved. Please, try again.'));
			}
		}
		$users = $this->Timetable->User->find('list');
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
		if (!$this->Timetable->exists($id)) {
			throw new NotFoundException(__('Invalid timetable'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Timetable->save($this->request->data)) {
				$this->Session->setFlash(__('The timetable has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The timetable could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Timetable.' . $this->Timetable->primaryKey => $id));
			$this->request->data = $this->Timetable->find('first', $options);
		}
		$users = $this->Timetable->Users->find('list');
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
		$this->Timetable->id = $id;
		if (!$this->Timetable->exists()) {
			throw new NotFoundException(__('Invalid timetable'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Timetable->delete()) {
			$this->Session->setFlash(__('The timetable has been deleted.'));
		} else {
			$this->Session->setFlash(__('The timetable could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
