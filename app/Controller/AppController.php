<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
	public $components = array(
        'Cookie', 
		'Session',
<<<<<<< HEAD
		'Auth' => array (
			'loginRedirect' => array('controller' => 'users' , 'action' => 'add' ),
			'logoutRedirect' => array (
				'controller' => 'users',
				'action' => 'login'),
			
		)
	
=======
//        'Auth' => array (
//			'loginRedirect' => array('controller' => 'users' , 'action' => 'add' ),
//			'logoutRedirect' => array (
//				'controller' => 'users',
//				'action' => 'login'		
//			),
//		),
      
		
>>>>>>> 0f1b48f33ea5443228732afcfca179b6c11517cc
	);
	
	protected function sprawdzam_dostep($przywilej)
	{
		if($this->Auth->loggedIn())
		{
			if($przywilej >= $this->Auth->user('privilages'))
				return true;
			$this->redirect(array('controller' => 'pages' , 'action' => 'display','denied'));
		}else
		{
			$this->redirect($this->Auth->redirect());
			
		}
		return false;
	}

}

