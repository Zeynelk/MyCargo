<?php
  App::uses('AppModel', 'Model');

  /**
   * UserDetail Model
   *
   * @property User $User
   */
  class UserDetail extends AppModel {

    /**
     * Display field
     *
     * @var string
     */
    public $displayField = 'user_id';

    /**
     * Validation rules
     *
     * @var array
     */
    public $validate = array( 'id' => array( 'notEmpty' => array( 'rule' => array( 'notEmpty' ), //'message' => 'Your custom message here',
      //'allowEmpty' => false,
      //'required' => false,
      //'last' => false, // Stop validation after this rule
      //'on' => 'create', // Limit validation to 'create' or 'update' operations
    ), ), 'user_id' => array( 'notEmpty' => array( 'rule' => array( 'notEmpty' ), //'message' => 'Your custom message here',
      //'allowEmpty' => false,
      //'required' => false,
      //'last' => false, // Stop validation after this rule
      //'on' => 'create', // Limit validation to 'create' or 'update' operations
    ), 'uuid' => array( 'rule' => array( 'uuid' ), //'message' => 'Your custom message here',
      //'allowEmpty' => false,
      //'required' => false,
      //'last' => false, // Stop validation after this rule
      //'on' => 'create', // Limit validation to 'create' or 'update' operations
    ), ), 'first_name' => array( 'alphaNumeric' => array( 'rule' => array( 'alphaNumeric' ), //'message' => 'Your custom message here',
      //'allowEmpty' => false,
      //'required' => false,
      //'last' => false, // Stop validation after this rule
      //'on' => 'create', // Limit validation to 'create' or 'update' operations
    ), ), 'last_name' => array( 'alphaNumeric' => array( 'rule' => array( 'alphaNumeric' ), //'message' => 'Your custom message here',
      //'allowEmpty' => false,
      //'required' => false,
      //'last' => false, // Stop validation after this rule
      //'on' => 'create', // Limit validation to 'create' or 'update' operations
    ), ), 'birthday' => array( 'date' => array( 'rule' => array( 'date' ), 'message' => 'Enter a valid date'
      //'message' => 'Your custom message here',
      //'allowEmpty' => false,
      //'required' => false,
      //'last' => false, // Stop validation after this rule
      //'on' => 'create', // Limit validation to 'create' or 'update' operations
    ), ), 'mobile_number' => array( 'notEmpty' => array( 'rule' => array( 'notEmpty' ), //'message' => 'Your custom message here',
      //'allowEmpty' => false,
      //'required' => false,
      //'last' => false, // Stop validation after this rule
      //'on' => 'create', // Limit validation to 'create' or 'update' operations
    ), 'phone' => array( 'rule' => array( 'phone' ), //'message' => 'Your custom message here',
      //'allowEmpty' => false,
      //'required' => false,
      //'last' => false, // Stop validation after this rule
      //'on' => 'create', // Limit validation to 'create' or 'update' operations
    ), ), 'drive_count' => array( 'numeric' => array( 'rule' => array( 'numeric' ), //'message' => 'Your custom message here',
      //'allowEmpty' => false,
      //'required' => false,
      //'last' => false, // Stop validation after this rule
      //'on' => 'create', // Limit validation to 'create' or 'update' operations
    ), ), 'registration_date' => array( 'datetime' => array( 'rule' => array( 'datetime' ), //'message' => 'Your custom message here',
      //'allowEmpty' => false,
      //'required' => false,
      //'last' => false, // Stop validation after this rule
      //'on' => 'create', // Limit validation to 'create' or 'update' operations
    ), ), 'last_modified' => array( 'datetime' => array( 'rule' => array( 'datetime' ), //'message' => 'Your custom message here',
      //'allowEmpty' => false,
      //'required' => false,
      //'last' => false, // Stop validation after this rule
      //'on' => 'create', // Limit validation to 'create' or 'update' operations
    ), ), 'smoke' => array( 'boolean' => array( 'rule' => array( 'boolean' ), //'message' => 'Your custom message here',
      //'allowEmpty' => false,
      //'required' => false,
      //'last' => false, // Stop validation after this rule
      //'on' => 'create', // Limit validation to 'create' or 'update' operations
    ), ), );

    function over18($field) {
      $user_bd = strtotime($field['birthday']);
      $age_req = strtotime('+18 years', $user_bd);
      debug(array( 'birthday' => $user_bd, 'age_req' => $age_req, 'time' => time(), 'bool' => time() >= $age_req ));
      return time() >= $age_req;
    }

    //The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
     * belongsTo associations
     *
     * @var array
     */
    public $belongsTo = array( 'User' => array(
      'className' => 'AppUser',
      'foreignKey' => 'user_id',
      'conditions' => '',
      'order' => ''
    ) );

    /**
     * hasMany associations
     *
     * @var array
     */
    public $hasMany = array( 'Offer' => array(
      'className' => 'Offer',
      'foreignKey' => 'user_id',
      'conditions' => '',
      'order' => '',
    ), 'Request' => array(
      'className' => 'Request',
      'foreignKey' => 'user_id',
      'conditions' => '',
      'order' => '',
    ), );

    /**
     * hasAndBelongsToMany associations
     *
     * @var array
     */
    public $hasAndBelongsToMany = array( 'Language' => array(
      'className' => 'Language',
      'joinTable' => 'users_languages',
      'foreignKey' => 'user_id',
      'associationForeignKey' => 'language_id',
      'unique' => 'keepExisting',
      'conditions' => '',
      'fields' => '',
      'order' => '',
      'limit' => '',
      'offset' => '',
      'finderQuery' => '',
    ), 'Search' => array(
      'className' => 'Search',
      'joinTable' => 'users_searches',
      'foreignKey' => 'user_id',
      'associationForeignKey' => 'search_id',
      'unique' => 'keepExisting',
      'conditions' => '',
      'fields' => '',
      'order' => '',
      'limit' => '',
      'offset' => '',
      'finderQuery' => '',
    ), 'Vehicle' => array(
      'className' => 'Vehicle',
      'joinTable' => 'users_vehicles',
      'foreignKey' => 'user_id',
      'associationForeignKey' => 'vehicle_id',
      'unique' => 'keepExisting',
      'conditions' => '',
      'fields' => '',
      'order' => '',
      'limit' => '',
      'offset' => '',
      'finderQuery' => '',
    ) );
  }
