<?php

  /**
   * LanguageFixture
   *
   */
  class LanguageFixture extends CakeTestFixture {

    /**
     * Fields
     *
     * @var array
     */
    public $fields = array( 'id' => array( 'type' => 'biginteger', 'null' => false, 'default' => null, 'unsigned' => true, 'key' => 'primary' ), 'language' => array( 'type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'key' => 'unique', 'collate' => 'utf8_bin', 'charset' => 'utf8' ), 'indexes' => array( 'PRIMARY' => array( 'column' => 'id', 'unique' => 1 ), 'language_id_UNIQUE' => array( 'column' => 'id', 'unique' => 1 ), 'language_UNIQUE' => array( 'column' => 'language', 'unique' => 1 ) ), 'tableParameters' => array( 'charset' => 'utf8', 'collate' => 'utf8_bin', 'engine' => 'InnoDB' ) );

    /**
     * Records
     *
     * @var array
     */
    public $records = array( array( 'id' => '', 'language' => 'Lorem ipsum dolor sit amet' ), );

  }
