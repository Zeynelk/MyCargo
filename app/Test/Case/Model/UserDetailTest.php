<?php
  App::uses('UserDetail', 'Model');

  /**
   * UserDetail Test Case
   *
   */
  class UserDetailTest extends CakeTestCase {

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = array( 'app.user_detail', 'app.user', 'app.language', 'app.users_language', 'app.offer', 'app.users_offer', 'app.request', 'app.users_request', 'app.search', 'app.users_search', 'app.vehicle', 'app.users_vehicle' );

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp() {
      parent::setUp();
      $this->UserDetail = ClassRegistry::init('UserDetail');
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown() {
      unset($this->UserDetail);

      parent::tearDown();
    }

  }
