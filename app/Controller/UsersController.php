<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */
class UsersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');
	public function login() {
		if ($this->request->is('post')) {
			if ($this->Auth->login()) { 
                            
				//$this->request->data['User']['password'] = $this->Auth->password($this->request->data['User']['password']);
				$this->User->id = $this->Auth->user('id');
                                $this->User->investment_id = $this->Auth->user('investment_id');
				$this->User->saveField('last_login', date('Y-m-d H:i:s'));
				$this->Session->setFlash('Zalogowany');
                                return $this->redirect($this->Auth->redirectUrl());
			} else {
				$this->Session->setFlash('Nieprawidłowy login lub hasło'); 
			}
		}
	}
	
    
    public function logout() {
        if ($this->Auth->loggedIn()) {
            $this->redirect($this->Auth->logout()); 
    }   
        else {
            $this->redirect(array('action' => 'login'));
    }
         
}
/**
 * index method
 *
 * @return void
 */
 
	public function index($userID = null) {
            if($userID == null){
                if($this->sprawdzam_dostep(1) || $this->sprawdzam_dostep(2)){
			$this->User->recursive = 0;
			$this->set('users', $this->Paginator->paginate());
                }
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
		if($this->sprawdzam_dostep(1))
		{
			if (!$this->User->exists($id)) {
				throw new NotFoundException(__('Invalid user'));
			}
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->set('user', $this->User->find('first', $options));
		}else {
                    $this->redirect(array('controller' => 'pages' , 'action' => 'display','denied'));
                }
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
	
		if($this->sprawdzam_dostep(1)){
			if ($this->request->is('post')) {
				$this->User->create();
				if ($this->User->save($this->request->data)) {
					$this->Session->setFlash(__('The user has been saved.'));
					return $this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
				}
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
	
		if($this->sprawdzam_dostep(1))
		{
			if (!$this->User->exists($id)) {
				throw new NotFoundException(__('Invalid user'));
			}
			if ($this->request->is(array('post', 'put'))) {
				if ($this->User->save($this->request->data)) {
					$this->Session->setFlash(__('The user has been saved.'));
					return $this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
				}
			} else {
				$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
				$this->request->data = $this->User->find('first', $options);
			}
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if($this->sprawdzam_dostep(1))
		{
			$this->User->id = $id;
			if (!$this->User->exists()) {
				throw new NotFoundException(__('Invalid user'));
			}
			$this->request->allowMethod('post', 'delete');
			if ($this->User->delete()) {
				$this->Session->setFlash(__('The user has been deleted.'));
			} else {
				$this->Session->setFlash(__('The user could not be deleted. Please, try again.'));
			}
			return $this->redirect(array('action' => 'index'));
		}
	}
}
