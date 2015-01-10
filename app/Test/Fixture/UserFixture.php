<?php

  /**
   * UserFixture
   *
   */
  class UserFixture extends CakeTestFixture {

    /**
     * Fields
     *
     * @var array
     */
    public $fields = array( 'id' => array( 'type' => 'string', 'null' => false, 'default' => null, 'length' => 36, 'key' => 'primary', 'collate' => 'utf8_bin', 'charset' => 'utf8' ), 'username' => array( 'type' => 'string', 'null' => false, 'default' => null, 'key' => 'index', 'collate' => 'utf8_bin', 'charset' => 'utf8' ), 'slug' => array( 'type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_bin', 'charset' => 'utf8' ), 'password' => array( 'type' => 'string', 'null' => true, 'default' => null, 'length' => 128, 'collate' => 'utf8_bin', 'charset' => 'utf8' ), 'password_salt' => array( 'type' => 'string', 'null' => true, 'default' => null, 'length' => 128, 'collate' => 'utf8_bin', 'charset' => 'utf8' ), 'password_token' => array( 'type' => 'string', 'null' => true, 'default' => null, 'length' => 128, 'collate' => 'utf8_bin', 'charset' => 'utf8' ), 'email' => array( 'type' => 'string', 'null' => true, 'default' => null, 'key' => 'index', 'collate' => 'utf8_bin', 'charset' => 'utf8' ), 'email_verified' => array( 'type' => 'boolean', 'null' => true, 'default' => '0' ), 'email_token' => array( 'type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_bin', 'charset' => 'utf8' ), 'email_token_expires' => array( 'type' => 'datetime', 'null' => true, 'default' => null ), 'tos' => array( 'type' => 'boolean', 'null' => true, 'default' => '0' ), 'active' => array( 'type' => 'boolean', 'null' => true, 'default' => '0' ), 'last_login' => array( 'type' => 'datetime', 'null' => true, 'default' => null ), 'last_action' => array( 'type' => 'datetime', 'null' => true, 'default' => null ), 'is_admin' => array( 'type' => 'boolean', 'null' => true, 'default' => '0' ), 'role' => array( 'type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_bin', 'charset' => 'utf8' ), 'created' => array( 'type' => 'datetime', 'null' => true, 'default' => null ), 'modified' => array( 'type' => 'datetime', 'null' => true, 'default' => null ), 'indexes' => array( 'PRIMARY' => array( 'column' => 'id', 'unique' => 1 ), 'BY_USERNAME' => array( 'column' => 'username', 'unique' => 0 ), 'BY_EMAIL' => array( 'column' => 'email', 'unique' => 0 ) ), 'tableParameters' => array( 'charset' => 'utf8', 'collate' => 'utf8_bin', 'engine' => 'InnoDB' ) );

    /**
     * Records
     *
     * @var array
     */
    public $records = array( array( 'id' => '54899c8a-f754-46e4-8897-0f75cbdd56cb', 'username' => 'Lorem ipsum dolor sit amet', 'slug' => 'Lorem ipsum dolor sit amet', 'password' => 'Lorem ipsum dolor sit amet', 'password_salt' => 'Lorem ipsum dolor sit amet', 'password_token' => 'Lorem ipsum dolor sit amet', 'email' => 'Lorem ipsum dolor sit amet', 'email_verified' => 1, 'email_token' => 'Lorem ipsum dolor sit amet', 'email_token_expires' => '2014-12-11 14:30:50', 'tos' => 1, 'active' => 1, 'last_login' => '2014-12-11 14:30:50', 'last_action' => '2014-12-11 14:30:50', 'is_admin' => 1, 'role' => 'Lorem ipsum dolor sit amet', 'created' => '2014-12-11 14:30:50', 'modified' => '2014-12-11 14:30:50' ), );

  }
