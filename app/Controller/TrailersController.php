<?php

/**
 * Controller class for creating, deleting or editing a trailer.
 * Additional features: index() -> get list of all created trailers.
 *                      view()  -> get detailed view of specific trailer.
 */
class TrailersController extends AppController
{
    var $name = 'Trailers';

    /**
     * Create a listed view of created trailers.
     */
    public function index()
    {
        $this->Trailer->recursive = 0;
        $this->set('trailers', $this->paginate());
    }

    /**
     * Get detailed view of a trailer specified by id.
     *
     * @param $id trailer-id specifying the trailer which will be viewed.
     */
    public function view($id = null)
    {
        if (!$id) {
            $this->Session->setFlash('Invalid trailer id! Please try again.');
            $this->redirect(array('action' => 'index'));
        }
        $this->set('trailer', $this->Trailer->read(null, $id));
    }

    /**
     * Create a new trailer.
     */
    public function add()
    {
        if (!empty($this->data)) {
            $this->Trailer->create();
            if ($this->Trailer->save($this->data)) {
                $this->Session->setFlash('Your trailer has been saved.');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Your trailer could not be saved! Please try again.');
            }
        }
    }

    /**
     * Edit an existing trailer specified by id.
     *
     * @param $id trailer-id specifying the trailer which will be edited.
     */
    public function edit($id = null)
    {
        if (!$id && empty($this->data)) {
            $this->Session->setFlash('Some error occurred! Please try again.');
            $this->redirect(array('action' => 'index'));
        }
        if (!empty($this->data)) {
            if ($this->Trailer->save($this->data)) {
                $this->Session->setFlash('Your trailer has been edited.');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Your trailer could not be edited. Please, try again.');
            }
        }
        if (empty($this->data)) {
            $this->data = $this->Trailer->read(null, $id);
        }
    }

    /**
     * Delete an existing trailer specified by id.
     *
     * @param $id trailer-id specifying the trailer which will be deleted.
     */
    public function delete($id = null)
    {
        if (!$id) {
            $this->Session->setFlash('Invalid trailer id.');
            $this->redirect(array('action'=>'index'));
        }
        if ($this->Trailer->delete($id)) {
            $this->Session->setFlash('Trailer deleted.');
            $this->redirect(array('action'=>'index'));
        }
        $this->Session->setFlash('Trailer was not deleted. Please try again.');
        $this->redirect(array('action' => 'index'));
    }
}
