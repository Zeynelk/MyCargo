<?php
App::uses('AppModel', 'Model');
/**
 * Model class vor offers.
 *
 * Class Offer representing the model vor all offers.
 */
class Offer extends AppModel
{
	var $name = 'Offer';
    var $displayField = 'title';
    public $actsAs = array('Containable');
    /*var $validate = array(
        // TODO: define validation vor a vehicle.
        );*/

		/*
		public $virtualFields = array(
			'from' => 'SELECT Location.location FROM offers_routes INNER JOIN locations AS Location on location_id = Location.id WHERE Offer.id = offers_routes.offer_id ORDER BY offers_routes.order LIMIT 1',
			'to' => 'SELECT Location.location FROM offers_routes INNER JOIN locations AS Location on location_id = Location.id WHERE Offer.id = offers_routes.offer_id ORDER BY offers_routes.order DESC LIMIT 1',
		);
		*/

    /**
     * HasMany-relation description for a offer.
     *
     * @var array containing relationships for a offer.
     */
    var $hasMany = array(
        'Vehicle' => array(
            'className' => 'Vehicle',
            'foreignKey' => 'id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''
        ),
        'Trailer' => array(
            'className' => 'Trailer',
            'foreignKey' => 'id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''
            )
        );

		/**
		 * hasAndBelongsToMany associations
		 *
		 * @var array
		 */
			public $hasAndBelongsToMany = array(
				'OfferRoutes' => array(
					'className' => 'Location',
					'joinTable' => 'offers_routes',
					'foreignKey' => 'offer_id',
					'associationForeignKey' => 'location_id',
					'unique' => 'keepExisting',
					'conditions' => '',
					'fields' => '',
					'order' => 'order',
					'limit' => '',
					'offset' => '',
					'finderQuery' => '',
				)
			);
}
?>
