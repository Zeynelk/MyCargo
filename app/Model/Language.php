<?php
  App::uses('AppModel', 'Model');

  /**
   * Language Model
   *
   * @property User $User
   */
  class Language extends AppModel {

    /**
     * Display field
     *
     * @var string
     */
    public $displayField = 'language';

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
    ), ), 'language' => array( 'notEmpty' => array( 'rule' => array( 'notEmpty' ), //'message' => 'Your custom message here',
      //'allowEmpty' => false,
      //'required' => false,
      //'last' => false, // Stop validation after this rule
      //'on' => 'create', // Limit validation to 'create' or 'update' operations
    ), ), );

    //The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
     * hasAndBelongsToMany associations
     *
     * @var array
     */
    public $hasAndBelongsToMany = array( 'User' => array( 'className' => 'User', 'joinTable' => 'users_languages', 'foreignKey' => 'language_id', 'associationForeignKey' => 'user_id', 'unique' => 'keepExisting', 'conditions' => '', 'fields' => '', 'order' => '', 'limit' => '', 'offset' => '', 'finderQuery' => '', ) );

  }
