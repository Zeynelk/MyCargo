<?php
App::uses('AppModel', 'Model');
/**
 * Message Model
 *
 * @property FromUser $FromUser
 * @property ToUser $ToUser
 * @property Offer $Offer
 * @property Request $Request
 * @property transmitter $transmitter
 * @property receiver $receiver
 * @property  $
 */
class Message extends AppModel {

  public $actsAs = array('Containable');
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'topic';

  public function send($data) {
    if(empty($data)) return false;
    return $this->save($data);
  }

  public function getMessages($transmitter = array(), $receiver = array(), $offer = array(), $request = array(), $extra = array()) {
    $options = $extra;
    if(!empty($transmitter))
      $options['Message.from_user_id'] = $transmitter;
    if(!empty($receiver))
      $options['Message.to_user_id'] = $receiver;

    if(!empty($offer))
      $options['Message.offer_id'] = $offer;

    if(!empty($request))
      $options['Message.request_id'] = $request;

    $options = array('and' => $options);
    $tmp = $this->find('all', array('conditions'=> $options));
    for($i = 0; $i < count($tmp); $i++) {
      $tmp[$i]['Answers'] = $this->getAnswers($tmp[$i]['Message']['id']);
    }
    return $tmp;
  }

  private function getAnswers($id = null) {
    $tmp = $this->find('all', array('conditions' => array('Message.answer_to' => $id)));
    for($i = 0; $i < count($tmp); $i++) {
      $tmp[$i]['Answers'] = $this->getAnswers($tmp[$i]['Message']['id']);
    }
    return $tmp;
  }

  /**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'from_user_id' => array(
			'uuid' => array(
				'rule' => array('uuid'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'to_user_id' => array(
			'uuid' => array(
				'rule' => array('uuid'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'topic' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'minLength' => array(
				'rule' => array('minLength', 5),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'message' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'maxLength' => array(
				'rule' => array('maxLength', 4000),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'created_on' => array(
			'datetime' => array(
				'rule' => array('datetime'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'unread' => array(
			'boolean' => array(
				'rule' => array('boolean'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

  public $hasMany = array(
    'Answers' => array(
      'className' => 'Message',
      'foreignKey' => 'answer_to',
      'conditions' => '',
      'fields' => ''
    )
  );

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'FromUser' => array(
			'className' => 'AppUser',
			'foreignKey' => 'from_user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'ToUser' => array(
			'className' => 'AppUser',
			'foreignKey' => 'to_user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Offer' => array(
			'className' => 'Offer',
			'foreignKey' => 'offer_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Request' => array(
			'className' => 'Request',
			'foreignKey' => 'request_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
