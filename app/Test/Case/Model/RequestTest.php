<?php
App::uses('Request', 'Model');

/**
 * Request Test Case
 *
 */
class RequestTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.request',
		'app.user',
		'app.users_request'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Request = ClassRegistry::init('Request');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Request);

		parent::tearDown();
	}

}
