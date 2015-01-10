<?php
  App::uses('Language', 'Model');

  /**
   * Language Test Case
   *
   */
  class LanguageTest extends CakeTestCase {

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = array( 'app.language', 'app.user', 'app.user_detail', 'app.users_language', 'app.offer', 'app.users_offer', 'app.request', 'app.users_request', 'app.search', 'app.users_search', 'app.vehicle', 'app.users_vehicle' );

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp() {
      parent::setUp();
      $this->Language = ClassRegistry::init('Language');
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown() {
      unset($this->Language);

      parent::tearDown();
    }

  }
