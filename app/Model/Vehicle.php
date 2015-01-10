<?php
App::uses('AppModel', 'Model');
/**
 * Model class vor vehicles.
 *
 * Class Vehicle representing the model vor all vehicles.
 */
class Vehicle extends AppModel
{
    var $name = 'Vehicle';
    var $displayField = 'vehicle_label';
    var $validate = array(
		'car_label' => array(
				'rule' => 'notEmpty',
				'message'=>'No car label defined'
			)
    );

    /*
     * BelongsTo-relation description for a offer.
     *
     * @var array containing relationships for a offer.
     *
    var $belongsTo = array(
        'Offer' => array(
            'className' => 'Offer',
            'foreignKey' => 'offer_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        )
    );*/
}
