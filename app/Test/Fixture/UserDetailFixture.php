<?php

  /**
   * UserDetailFixture
   *
   */
  class UserDetailFixture extends CakeTestFixture {

    /**
     * Fields
     *
     * @var array
     */
    public $fields = array( 'id' => array( 'type' => 'biginteger', 'null' => false, 'default' => null, 'unsigned' => true, 'key' => 'primary' ), 'user_id' => array( 'type' => 'string', 'null' => false, 'default' => null, 'length' => 36, 'key' => 'index', 'collate' => 'utf8_bin', 'charset' => 'utf8' ), 'first_name' => array( 'type' => 'string', 'null' => false, 'default' => null, 'length' => 30, 'collate' => 'utf8_bin', 'charset' => 'utf8' ), 'last_name' => array( 'type' => 'string', 'null' => false, 'default' => null, 'length' => 30, 'collate' => 'utf8_bin', 'charset' => 'utf8' ), 'birthday' => array( 'type' => 'date', 'null' => false, 'default' => null ), 'biography' => array( 'type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_bin', 'charset' => 'utf8' ), 'mobile_number' => array( 'type' => 'string', 'null' => false, 'default' => null, 'length' => 20, 'collate' => 'utf8_bin', 'charset' => 'utf8' ), 'picture_path' => array( 'type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_bin', 'charset' => 'utf8' ), 'drive_count' => array( 'type' => 'integer', 'null' => false, 'default' => '0', 'unsigned' => false ), 'registration_date' => array( 'type' => 'datetime', 'null' => false, 'default' => 'CURRENT_TIMESTAMP' ), 'last_modified' => array( 'type' => 'datetime', 'null' => false, 'default' => 'CURRENT_TIMESTAMP' ), 'smoke' => array( 'type' => 'boolean', 'null' => false, 'default' => null ), 'indexes' => array( 'PRIMARY' => array( 'column' => 'id', 'unique' => 1 ), 'users_user_details_fk' => array( 'column' => 'user_id', 'unique' => 0 ) ), 'tableParameters' => array( 'charset' => 'utf8', 'collate' => 'utf8_bin', 'engine' => 'InnoDB' ) );

    /**
     * Records
     *
     * @var array
     */
    public $records = array( array( 'id' => '', 'user_id' => 'Lorem ipsum dolor sit amet', 'first_name' => 'Lorem ipsum dolor sit amet', 'last_name' => 'Lorem ipsum dolor sit amet', 'birthday' => '2014-12-11', 'biography' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.', 'mobile_number' => 'Lorem ipsum dolor ', 'picture_path' => 'Lorem ipsum dolor sit amet', 'drive_count' => 1, 'registration_date' => '2014-12-11 14:35:39', 'last_modified' => '2014-12-11 14:35:39', 'smoke' => 1 ), );

  }
