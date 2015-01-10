<?php

  /**
   * UserLoginFixture
   *
   */
  class UserLoginFixture extends CakeTestFixture {

    /**
     * Fields
     *
     * @var array
     */
    public $fields = array( 'id' => array( 'type' => 'biginteger', 'null' => false, 'default' => null, 'unsigned' => true, 'key' => 'primary' ), 'username' => array( 'type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'key' => 'unique', 'collate' => 'utf8_bin', 'charset' => 'utf8' ), 'password' => array( 'type' => 'string', 'null' => false, 'default' => null, 'length' => 64, 'key' => 'unique', 'collate' => 'utf8_bin', 'charset' => 'utf8' ), 'salt' => array( 'type' => 'string', 'null' => false, 'default' => null, 'length' => 64, 'collate' => 'utf8_bin', 'charset' => 'utf8' ), 'indexes' => array( 'PRIMARY' => array( 'column' => 'id', 'unique' => 1 ), 'user_logins_id_UNIQUE' => array( 'column' => 'id', 'unique' => 1 ), 'username_UNIQUE' => array( 'column' => 'username', 'unique' => 1 ), 'password_UNIQUE' => array( 'column' => 'password', 'unique' => 1 ) ), 'tableParameters' => array( 'charset' => 'utf8', 'collate' => 'utf8_bin', 'engine' => 'InnoDB' ) );

    /**
     * Records
     *
     * @var array
     */
    public $records = array( array( 'id' => '', 'username' => 'Lorem ipsum dolor sit amet', 'password' => 'Lorem ipsum dolor sit amet', 'salt' => 'Lorem ipsum dolor sit amet' ), );

  }
