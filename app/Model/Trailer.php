<?php

/**
 * Model class vor trailers.
 *
 * Class Trailer representing the model vor all trailers.
 */
class Trailer extends AppModel
{
    var $name = 'Trailer';
    var $displayField = 'trailer_label';
    var $validate = array(
                  // TODO: define validation vor a vehicle.
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


