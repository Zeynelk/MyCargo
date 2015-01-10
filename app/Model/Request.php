<?php
App::uses('AppModel', 'Model');
/**
 * Model class vor requests.
 *
 * Class Request representing the model vor all requests.
 */
class Request extends AppModel
{
    var $name = 'Request';

    public $virtualFields = array(
			'from' => 'SELECT Location.location FROM requests_routes INNER JOIN locations AS Location on location_id = Location.id WHERE Request.id = requests_routes.request_id ORDER BY requests_routes.order LIMIT 1',
			'to' => 'SELECT Location.location FROM requests_routes INNER JOIN locations AS Location on location_id = Location.id WHERE Request.id = requests_routes.request_id ORDER BY requests_routes.order DESC LIMIT 1',
		);

    //var $displayField = 'title';
    /*var $validate = array(
        // TODO: define validation vor a vehicle.
        );*/


/**
 * hasMany associations
 *
 * @var array
 */
		public $hasMany = array(
			'RequestsRoute' => array(
				'className' => 'RequestsRoute',
				'foreignKey' => 'request_id',
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
}
