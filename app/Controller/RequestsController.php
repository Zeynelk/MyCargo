<?php
App::uses('AppController', 'Controller');
/**
 * Controller class for creating, deleting or editing a cargo-request.
 * Additional features: index() -> get list of all created requests.
 *                      view()  -> get detailed view of specific request.
 */
class RequestsController extends AppController
{
    var $name = 'Requests';

    /**
     * Create a listed view of created requests.
     */
    public function index()
    {
	  $this->Request->recursive = 0;
	  $this->set('requests', $this->paginate());
    }

    /**
     * Get detailed view of an request specified by id.
     *
     * @param $id request-id specifying the request which will be viewed.
     */
    public function view($id = null)
    {
        if (!$id) {
            $this->Session->setFlash('Invalid request id! Please try again.');
            $this->redirect(array('action' => 'index'));
        }
        $this->set('request', $this->Request->read(null, $id));
    }

    /**
     * Create a new request.
     */
    public function add()
    {
        if (!empty($this->data)) {
            $this->Request->create();
            if ($this->Request->save($this->data)) {
                $this->Session->setFlash('Your request has been saved.');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Your request could not be saved! Please try again.');
            }
        }
//        $vehicles = $this->Request->Vehicle->find('list');
//        $this->set(compact('vehicles'));

//        $trailers = $this->Request->Trailer->find('list');
//        $this->set(compact('trailers'));
    }

    /**
     * Edit an existing request specified by id.
     *
     * @param $id request-id specifying the request which will be edited.
     */
    public function edit($id = null)
    {
        if (!$id && empty($this->data)) {
            $this->Session->setFlash('Some error occurred! Please try again.');
            $this->redirect(array('action' => 'index'));
        }
        if (!empty($this->data)) {
            if ($this->Request->save($this->data)) {
                $this->Session->setFlash('Your request has been edited.');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Your request could not be edited. Please, try again.');
            }
        }
        if (empty($this->data)) {
            $this->data = $this->Request->read(null, $id);
        }
//        $vehicles = $this->Request->Vehicle->find('list');
//        $this->set(compact('vehicles'));

//        $trailers = $this->Request->Trailer->find('list');
//        $this->set(compact('trailers'));
    }

    /**
     * Delete an existing request specified by id.
     *
     * @param $id request-id specifying the request which will be deleted.
     */
    public function delete($id = null)
    {
        if (!$id) {
            $this->Session->setFlash('Invalid request id.');
            $this->redirect(array('action'=>'index'));
        }
        if ($this->Request->delete($id)) {
            $this->Session->setFlash('Request deleted.');
            $this->redirect(array('action'=>'index'));
        }
        $this->Session->setFlash('Request was not deleted. Please try again.');
        $this->redirect(array('action' => 'index'));
    }
}
