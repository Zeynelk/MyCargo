<?php
  App::uses('User', 'Users.Model');

  /**
   * AppUser Model
   *
   * @property UserDetail $UserDetail
   * @property ReceivedMsgs $ReceivedMsgs
   * @property TransmittedMsgs $TransmittedMsgs
   * @property Language $Language
   * @property Offer $Offer
   * @property Request $Request
   * @property Search $Search
   * @property Vehicle $Vehicle
   */
  class AppUser extends User {

    public $name = 'AppUser';
    public $useTable = 'users';


    /**
     * Registers a new user
     *
     * Options:
     * - bool emailVerification : Default is true, generates the token for email verification
     * - bool removeExpiredRegistrations : Default is true, removes expired registrations to do cleanup when no cron is configured for that
     * - bool returnData : Default is true, if false the method returns true/false the data is always available through $this->User->data
     *
     * @param array $postData Post data from controller
     * @param mixed should be array now but can be boolean for emailVerification because of backward compatibility
     * @return mixed
     */
    public function register($postData = array(), $options = array()) {
      if( parent::register($postData, $options) ) {
        $data = array_merge(array( 'user_id' => $this->id ), $postData['UserDetail']);
        $this->UserDetail->set($data);
        if( $this->UserDetail->validates() ) {
          $this->UserDetail->create();
          $this->UserDetail->save($data);
          return true;
        }
        $this->delete(null, false);
        return false;
      }
      debug($this->id);
    }

    public function edit($userId = null, $postData = null) {
      $user = $this->getUserForEditing($userId, array( 'contain' => 'UserDetail' ));
      if(empty($user['UserDetail']['id'])) {
        $user['UserDetail']['user_id'] = $user['AppUser']['id'];
        $user['UserDetail']['drive_count'] = 0;
        $user['UserDetail']['registration_date'] = $user['AppUser']['created'];
        $user['UserDetail']['last_modified'] = $user['AppUser']['modified'];
      }
      $this->set($user);
      $this->UserDetail->set($user);
      if( ! empty($postData) ) {
        $this->set($postData);
        $this->UserDetail->set($postData);
        if( $this->validates() ) {
          if( ! empty($postData['password']) ) {
            $this->data[$this->alias]['password'] = $this->hash($this->data[$this->alias]['password'], 'sha1', true);
          }
          $result = $this->save(null, false);
          $result2 = $this->UserDetail->save(null, false);
          if( $result || $result2 ) {
            return true;
          }
          return false;
        }
      }
    }

    /**
     * Returns all data about a user
     *
     * @param string|integer $slug user slug or the uuid of a user
     * @param string $field
     * @param array $options
     * @throws NotFoundException
     * @return array
     */
    public function details($slug = null, $field = 'slug', $options = array('contain' => array(), 'conditions' => array()) ) {
      if(!empty($options['conditions']))
        $options['conditions'] = array('and' =>
                                  array($options['conditions'],
                                    array( 'OR' =>
                                      array(  $this->alias . '.' . $field => $slug, $this->alias . '.' . $this->primaryKey => $slug ),
                                      $this->alias . '.active' => 1,
                                      $this->alias . '.email_verified' => 1
                                    )
                                  )
        );
      else
        $options['conditions'] = array( 'OR' =>
                                  array( $this->alias . '.' . $field => $slug, $this->alias . '.' . $this->primaryKey => $slug ),
                                  $this->alias . '.active' => 1,
                                  $this->alias . '.email_verified' => 1
        );

      $user = $this->find('first', $options);

      if( empty($user) ) {
        throw new NotFoundException(__d('users', 'The user does not exist.'));
      }
      return $user;
    }

    /**
     * hasOne associations
     *
     * @var array
     */
	public $hasOne = array( 
		'UserDetail' => array( 
			'className' => 'UserDetail', 
			'foreignKey' => 'user_id', 
			'dependent' => true
		) 
	);
/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'ReceivedMsgs' => array(
			'className' => 'Message',
			'foreignKey' => 'to_user_id',
			'conditions' => '',
			'fields' => '',
			'order' => 'created_on'
		),
		'TransmittedMsgs' => array(
			'className' => 'Message',
			'foreignKey' => 'from_user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => 'created_on'
		)
	);

  }
