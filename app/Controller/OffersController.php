<?php
App::uses('AppController', 'Controller');

/**
 * Controller class for creating, deleting or editing a cargo-offer.
 * Additional features: index() -> get list of all created offers.
 *                      view()  -> get detailed view of specific offer.
 */
class OffersController extends AppController
{
    var $name = 'Offers';

    /**
     * Create a listed view of created offers.
     */
    public function index()
    {
		$this->Offer->recursive = 0;
		$this->set('offers', $this->paginate());
    }

    /**
     * Get detailed view of an offer specified by id.
     *
     * @param $id offer-id specifying the offer which will be viewed.
     */
    public function view($id = null)
    {
        if (!$id) {
            $this->Session->setFlash('Invalid offer id! Please try again.');
            $this->redirect(array('action' => 'index'));
        }

        $offer = $this->Offer->findById($id);
		$this->set('offer', $offer);

		if (!empty($offer['OfferRoutes'])) {
			$waypoints = array();
			$count = count($offer['OfferRoutes']);
			for ($i = 0; $i < $count; $i++) {
				if ($i != 0 && $i != $count - 1) {
					$waypoints[] = $offer['OfferRoutes'][$i]['location'];
				}
			}
			$this->set('waypoints', implode(', ', $waypoints));
		}
    }

    /**
     * Create a new offer.
     */
    public function add()
    {
        if (!empty($this->data)) {
            $this->Offer->create();
            if ($this->Offer->save($this->data)) {
                $this->Session->setFlash('Your offer has been saved.');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Your offer could not be saved! Please try again.');
            }
        }
        $vehicles = $this->Offer->Vehicle->find('list');
        $this->set(compact('vehicles'));

        $trailers = $this->Offer->Trailer->find('list');
        $this->set(compact('trailers'));
    }

    /**
     * Edit an existing offer specified by id.
     *
     * @param $id offer-id specifying the offer which will be edited.
     */
    public function edit($id = null)
    {
        if (!$id && empty($this->data)) {
            $this->Session->setFlash('Some error occurred! Please try again.');
            $this->redirect(array('action' => 'index'));
        }
        if (!empty($this->data)) {
            if ($this->Offer->save($this->data)) {
                $this->Session->setFlash('Your offer has been edited.');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Your offer could not be edited. Please, try again.');
            }
        }
        if (empty($this->data)) {
            $this->data = $this->Offer->read(null, $id);
        }
        $vehicles = $this->Offer->Vehicle->find('list');
        $this->set(compact('vehicles'));

        $trailers = $this->Offer->Trailer->find('list');
        $this->set(compact('trailers'));
    }

    /**
     * Delete an existing offer specified by id.
     *
     * @param $id offer-id specifying the offer which will be deleted.
     */
    public function delete($id = null)
    {
        if (!$id) {
            $this->Session->setFlash('Invalid offer id.');
            $this->redirect(array('action'=>'index'));
        }
        if ($this->Offer->delete($id)) {
            $this->Session->setFlash('Offer deleted.');
            $this->redirect(array('action'=>'index'));
        }
        $this->Session->setFlash('Offer was not deleted. Please try again.');
        $this->redirect(array('action' => 'index'));
    }
}
