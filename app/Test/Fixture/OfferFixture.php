<?php
/**
 * OfferFixture
 *
 */
class OfferFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'unsigned' => true, 'key' => 'primary'),
		'drive_date' => array('type' => 'date', 'null' => false, 'default' => null),
		'drive_time' => array('type' => 'time', 'null' => false, 'default' => null),
		'available_seat' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'available_place_type' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_bin', 'charset' => 'utf8'),
		'available_place' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'price_per_person' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'price' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'note_description' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_bin', 'charset' => 'utf8'),
		'vehicle_id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'unsigned' => true, 'key' => 'index'),
		'last_modified' => array('type' => 'datetime', 'null' => false, 'default' => 'CURRENT_TIMESTAMP'),
		'created_on' => array('type' => 'datetime', 'null' => false, 'default' => 'CURRENT_TIMESTAMP'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'id' => array('column' => 'id', 'unique' => 1),
			'vehicle_id' => array('column' => 'vehicle_id', 'unique' => 0)
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
			'drive_date' => '2014-12-13',
			'drive_time' => '12:07:47',
			'available_seat' => 1,
			'available_place_type' => 'Lorem ipsum dolor sit amet',
			'available_place' => 1,
			'price_per_person' => 1,
			'price' => 1,
			'note_description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'vehicle_id' => '',
			'last_modified' => '2014-12-13 12:07:47',
			'created_on' => '2014-12-13 12:07:47'
		),
	);

}
