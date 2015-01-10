<?php

  /**
   * Languages Controller
   *
   * @property Language $Language
   * @property PaginatorComponent $Paginator
   * @property SessionComponent $Session
   */
  class MessagesController extends AppController {

    public function send() {
      $data = $this->request->data;
      if(!empty($data)) {
        $this->loadModel('User');
        $here = $data['Message']['i_am_here'];
        $count = 1;
        $here = str_replace($this->request->base, '', $here, $count);
        unset($data['Message']['i_am_here']);

        $data['Message']['from_user_id'] = $this->Auth->User('id');
        if(!empty($data['Message']['to_user']) && empty($data['Message']['to_user_id'])) {
          $user = $this->User->find('first', array( 'conditions' => array( 'username' =>  $data['Message']['to_user'])));
          if(empty($user)) {
            $this->Session->setFlash(__d('users', 'User not found'), 'alert', array(
              'plugin' => 'BoostCake',
              'class' => 'alert-danger'
            ));
            $this->redirect($here);
          }
          $data['Message']['to_user_id'] = $user['User']['id'];
          unset($data['Message']['to_user']);
        }
        if($this->Message->send($data))
          $this->Session->setFlash(__d('messages','Message sended'), 'alert', array(
              'plugin' => 'BoostCake',
              'class' => 'alert-success'
            ));
        else
          $this->Session->setFlash(__d('messages','Message not sended'), 'alert', array(
              'plugin' => 'BoostCake',
              'class' => 'alert-error'
            ));
        $this->redirect($here);
      } else {
        $this->Session->setFlash(__d('messages', 'Missing Data'), 'alert', array(
            'plugin' => 'BoostCake',
            'class' => 'alert-danger'
          ));
        $this->redirect('/');
      }
    }
  }

?>