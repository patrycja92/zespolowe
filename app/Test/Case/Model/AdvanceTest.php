<?php
App::uses('Advance', 'Model');

/**
 * Advance Test Case
 *
 */
class AdvanceTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.advance',
		'app.users'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Advance = ClassRegistry::init('Advance');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Advance);

		parent::tearDown();
	}

}
