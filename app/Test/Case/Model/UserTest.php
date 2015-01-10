<?php
  App::uses('User', 'Model');

  /**
   * User Test Case
   *
   */
  class UserTest extends CakeTestCase {

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = array( 'app.user', 'app.user_detail', 'app.language', 'app.users_language', 'app.offer', 'app.users_offer', 'app.request', 'app.users_request', 'app.search', 'app.users_search', 'app.vehicle', 'app.users_vehicle' );

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp() {
      parent::setUp();
      $this->User = ClassRegistry::init('User');
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown() {
      unset($this->User);

      parent::tearDown();
    }

  }
