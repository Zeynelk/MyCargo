<?php
  App::uses('UserLogin', 'Model');

  /**
   * UserLogin Test Case
   *
   */
  class UserLoginTest extends CakeTestCase {

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = array( 'app.user_login', 'app.user', 'app.user_logins', 'app.language', 'app.users_language', 'app.offer', 'app.users_offer', 'app.request', 'app.users_request', 'app.search', 'app.users_search', 'app.vehicle', 'app.users_vehicle' );

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp() {
      parent::setUp();
      $this->UserLogin = ClassRegistry::init('UserLogin');
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown() {
      unset($this->UserLogin);

      parent::tearDown();
    }

  }
