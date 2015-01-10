<?php
App::uses('RequestsRoute', 'Model');

/**
 * RequestsRoute Test Case
 *
 */
class RequestsRouteTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.requests_route',
		'app.request',
		'app.location',
		'app.offers_route',
		'app.offer',
		'app.vehicle',
		'app.user',
		'app.users_offer'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->RequestsRoute = ClassRegistry::init('RequestsRoute');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->RequestsRoute);

		parent::tearDown();
	}

}
