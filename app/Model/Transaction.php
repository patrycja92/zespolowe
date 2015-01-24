<?php
App::uses('AppModel', 'Model');
/**
 * Transaction Model
 *
 * @property Users $Users
 * @property Timetables $Timetables
 */
class Transaction extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'title';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Users' => array(
			'className' => 'Users',
			'foreignKey' => 'users_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Timetables' => array(
			'className' => 'Timetables',
			'foreignKey' => 'timetables_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
