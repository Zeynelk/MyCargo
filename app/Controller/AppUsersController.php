<?php
  App::uses('UsersController', 'Users.Controller');

  class AppUsersController extends UsersController {
    public $name = 'AppUsers';

    public function beforeFilter() {
      parent::beforeFilter();
      $this->User = ClassRegistry::init('AppUser');
      $this->set('model', 'AppUser');
      $this->Auth->allow('display');
    }

    public function edit() {
      if(!empty($this->request->data)) {
        if( $this->{$this->modelClass}->edit($this->Auth->User('id'), $this->request->data) ) {
          $this->Session->setFlash(__d('users', 'The User has been saved'));
          $user = $this->User->find('first', array( 'conditions' => array( 'AppUser.id' => $this->Auth->user('id') ), 'contain' => 'UserDetail' ));
          $user['AppUser']['UserDetail'] = $user['UserDetail'];
          $this->Auth->login($user['AppUser']);
        }
      }
    }

    /**
     * Shows a users profile
     *
     * @param string $slug User Slug
     * @return void
     */
    public function view($slug = null) {
      try {
        if($slug == null)
          $slug = $this->Auth->user('id');
        $this->set('user', $this->{$this->modelClass}->details($slug, 'slug', array('contain' => 'UserDetail')));

      } catch( Exception $e ) {
        $this->Session->setFlash($e->getMessage());
        $this->redirect('/');
      }
    }

    public function dashboard() {
      $this->loadModel('Message');
      $this->set('user', $this->{$this->modelClass}->details($this->Auth->user('id'), 'slug', array('contain' => 'UserDetail')));
      $sended = $this->Message->getMessages($this->Auth->user('id'), null, null, null, array('answer_to' => null));
      $received = $this->Message->getMessages(null, $this->Auth->user('id'), null, null, array('answer_to' => null));
      $this->set('messages', $sended);
      $this->set('received', $received);
    }
  }