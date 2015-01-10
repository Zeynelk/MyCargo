<?php
/**
 * RequestFixture
 *
 */
class RequestFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'unsigned' => true, 'key' => 'primary'),
		'drive_date' => array('type' => 'date', 'null' => false, 'default' => null),
		'drive_time' => array('type' => 'time', 'null' => false, 'default' => null),
		'person_number' => array('type' => 'integer', 'null' => false, 'default' => '1', 'unsigned' => false),
		'cargo_details' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_bin', 'charset' => 'utf8'),
		'notes' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_bin', 'charset' => 'utf8'),
		'last_modified' => array('type' => 'datetime', 'null' => false, 'default' => 'CURRENT_TIMESTAMP'),
		'created_on' => array('type' => 'datetime', 'null' => false, 'default' => 'CURRENT_TIMESTAMP'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'request_id_UNIQUE' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_bin', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '',
			'drive_date' => '2014-12-14',
			'drive_time' => '21:35:02',
			'person_number' => 1,
			'cargo_details' => 'Lorem ipsum dolor sit amet',
			'notes' => 'Lorem ipsum dolor sit amet',
			'last_modified' => '2014-12-14 21:35:02',
			'created_on' => '2014-12-14 21:35:02'
		),
	);

}
