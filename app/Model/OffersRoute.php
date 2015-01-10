<?php
App::uses('AppModel', 'Model');
/**
 * OffersRoute Model
 *
 * @property Offer $Offer
 * @property Location $Location
 */
class OffersRoute extends AppModel {
	//The Associations below have been created with all possible keys, those that are not needed can be removed
	public $actsAs = array('Containable');
/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Offer' => array(
			'className' => 'Offer',
			'foreignKey' => 'offer_id',
			'conditions' => '',
			'fields' => array(
				'id',
				'offer_id',
				'location_id',
				'order',
			),
			'order' => ''
		),
		'Location' => array(
			'className' => 'Location',
			'foreignKey' => 'location_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
