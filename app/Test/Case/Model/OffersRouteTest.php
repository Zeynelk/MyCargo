<?php
App::uses('OffersRoute', 'Model');

/**
 * OffersRoute Test Case
 *
 */
class OffersRouteTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.offers_route',
		'app.offer',
		'app.vehicle',
		'app.offer_route',
		'app.user',
		'app.users_offer',
		'app.location'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->OffersRoute = ClassRegistry::init('OffersRoute');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->OffersRoute);

		parent::tearDown();
	}

}
