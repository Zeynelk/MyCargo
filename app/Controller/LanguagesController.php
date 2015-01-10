<?php
  App::uses('AppController', 'Controller');

  /**
   * Languages Controller
   *
   * @property Language $Language
   * @property PaginatorComponent $Paginator
   * @property SessionComponent $Session
   */
  class LanguagesController extends AppController {

    /**
     * Components
     *
     * @var array
     */
    public $components = array( 'Paginator', 'Session' );

    /**
     * index method
     *
     * @return void
     */
    public function index() {
      $this->Language->recursive = 0;
      $this->set('languages', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
      if( ! $this->Language->exists($id) ) {
        throw new NotFoundException(__('Invalid language'));
      }
      $options = array( 'conditions' => array( 'Language.' . $this->Language->primaryKey => $id ) );
      $this->set('language', $this->Language->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
      if( $this->request->is('post') ) {
        $this->Language->create();
        if( $this->Language->save($this->request->data) ) {
          $this->Session->setFlash(__('The language has been saved.'));
          return $this->redirect(array( 'action' => 'index' ));
        } else {
          $this->Session->setFlash(__('The language could not be saved. Please, try again.'));
        }
      }
      $users = $this->Language->User->find('list');
      $this->set(compact('users'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
      if( ! $this->Language->exists($id) ) {
        throw new NotFoundException(__('Invalid language'));
      }
      if( $this->request->is(array( 'post', 'put' )) ) {
        if( $this->Language->save($this->request->data) ) {
          $this->Session->setFlash(__('The language has been saved.'));
          return $this->redirect(array( 'action' => 'index' ));
        } else {
          $this->Session->setFlash(__('The language could not be saved. Please, try again.'));
        }
      } else {
        $options = array( 'conditions' => array( 'Language.' . $this->Language->primaryKey => $id ) );
        $this->request->data = $this->Language->find('first', $options);
      }
      $users = $this->Language->User->find('list');
      $this->set(compact('users'));
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
      $this->Language->id = $id;
      if( ! $this->Language->exists() ) {
        throw new NotFoundException(__('Invalid language'));
      }
      $this->request->allowMethod('post', 'delete');
      if( $this->Language->delete() ) {
        $this->Session->setFlash(__('The language has been deleted.'));
      } else {
        $this->Session->setFlash(__('The language could not be deleted. Please, try again.'));
      }
      return $this->redirect(array( 'action' => 'index' ));
    }

    /**
     * admin_index method
     *
     * @return void
     */
    public function admin_index() {
      $this->Language->recursive = 0;
      $this->set('languages', $this->Paginator->paginate());
    }

    /**
     * admin_view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function admin_view($id = null) {
      if( ! $this->Language->exists($id) ) {
        throw new NotFoundException(__('Invalid language'));
      }
      $options = array( 'conditions' => array( 'Language.' . $this->Language->primaryKey => $id ) );
      $this->set('language', $this->Language->find('first', $options));
    }

    /**
     * admin_add method
     *
     * @return void
     */
    public function admin_add() {
      if( $this->request->is('post') ) {
        $this->Language->create();
        if( $this->Language->save($this->request->data) ) {
          $this->Session->setFlash(__('The language has been saved.'));
          return $this->redirect(array( 'action' => 'index' ));
        } else {
          $this->Session->setFlash(__('The language could not be saved. Please, try again.'));
        }
      }
      $users = $this->Language->User->find('list');
      $this->set(compact('users'));
    }

    /**
     * admin_edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function admin_edit($id = null) {
      if( ! $this->Language->exists($id) ) {
        throw new NotFoundException(__('Invalid language'));
      }
      if( $this->request->is(array( 'post', 'put' )) ) {
        if( $this->Language->save($this->request->data) ) {
          $this->Session->setFlash(__('The language has been saved.'));
          return $this->redirect(array( 'action' => 'index' ));
        } else {
          $this->Session->setFlash(__('The language could not be saved. Please, try again.'));
        }
      } else {
        $options = array( 'conditions' => array( 'Language.' . $this->Language->primaryKey => $id ) );
        $this->request->data = $this->Language->find('first', $options);
      }
      $users = $this->Language->User->find('list');
      $this->set(compact('users'));
    }

    /**
     * admin_delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function admin_delete($id = null) {
      $this->Language->id = $id;
      if( ! $this->Language->exists() ) {
        throw new NotFoundException(__('Invalid language'));
      }
      $this->request->allowMethod('post', 'delete');
      if( $this->Language->delete() ) {
        $this->Session->setFlash(__('The language has been deleted.'));
      } else {
        $this->Session->setFlash(__('The language could not be deleted. Please, try again.'));
      }
      return $this->redirect(array( 'action' => 'index' ));
    }
  }
