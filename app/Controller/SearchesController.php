<?php
App::uses('AppController', 'Controller');

/**
 * Controller class for creating, deleting or editing a cargo-offer.
 * Additional features: index() -> get list of all created offers.
 *                      view()  -> get detailed view of specific offer.
 */
class SearchesController extends AppController
{
	var $uses = array('Location', 'Offer', 'Request');

	function search()
	{
		$url['action'] = $this->data['controllerAction'];

		foreach ($this->data as $key => $value) {
			foreach ($value as $kk => $vv) {
				if (!empty($vv))
					$url[$key . '.' . $kk] = $vv;
			}
		}

		//$this->set('d', $url);

		// redirect the user to the url
		$this->redirect($url, null, true);
	}

	/**
	 * Create a listed view of created offers.
	 */
	public function offerSearch()
	{
		$from = $this->passedArgs['Search.from'];
		$to = $this->passedArgs['Search.to'];

		if (!empty($this->passedArgs['Search.minDate'])) {
			$minDate = join('-', array_slice($this->passedArgs['Search.minDate'], 0, 3));
			$minDateTime = $minDate . ' ' . join(':', array_slice($this->passedArgs['Search.minDate'], 3, 5)) . ":00";
		}
		if (!empty($this->passedArgs['Search.maxDate'])) {
			$maxDate = join('-', array_slice($this->passedArgs['Search.maxDate'], 0, 3));
			$maxDateTime = $maxDate . ' ' . join(':', array_slice($this->passedArgs['Search.maxDate'], 3, 5)) . ":00";
		}
		$offers = array();

//			$from = 'Wetzlar';
//			$to = 'Dortmund';

		//Location entry for start
		$from = $this->Location->find('first', array(
			'contain' => false,
			'conditions' => array(
				'Location.location' => $from,
			),
		));

		//Location entry for goal
		$to = $this->Location->find('first', array(
			'contain' => false,
			'conditions' => array(
				'Location.location' => $to,
			),
		));

		if (isset($to['Location']) && isset($from['Location'])) {
			//All Offers with routes from start to goal
			$offer_ids = $this->Offer->OffersRoute->find('list', array(
				'contain' => false,
				'fields' => array('OffersRoute.offer_id'),
				'group' => array('OffersRoute.offer_id HAVING MAX(OffersRoute.order) > MIN(OffersRoute.order)'),
				'conditions' => array(
					'OffersRoute.location_id IN' => array($from['Location']['id'], $to['Location']['id']),
				),
			));

			//Offers to Display
			$cond = array(
				'Offer.id' => array_values($offer_ids)
			);
			if (isset($maxDateTime)) {
				$cond['CONCAT(Offer.drive_date, " ", Offer.drive_time) <='] = $maxDateTime;
			}
			if (isset($minDateTime)) {
				$cond['CONCAT(Offer.drive_date, " ", Offer.drive_time) >='] = $minDateTime;
			}

			$offers = $this->Offer->find('all', array(
				'contain' => array('OffersRoute'),
				'conditions' => array(
					'AND' => $cond,
				),
			));
		}

		$this->set('offers', $offers);

		/*
		 * Render index-view of OfferController, as the display of the search results
		 */
		$this->render('/Offers/index');
	}

	/**
	 * Create a listed view of created requests.
	 */
	public function requestSearch()
	{
		$from = $this->passedArgs['Search.from'];
		$to = $this->passedArgs['Search.to'];
		if (!empty($this->passedArgs['Search.minDate'])) {
			$minDate = join('-', array_slice($this->passedArgs['Search.minDate'], 0, 3));
			$minDateTime = $minDate . ' ' . join(':', array_slice($this->passedArgs['Search.minDate'], 3, 5)) . ":00";
		}
		if (!empty($this->passedArgs['Search.maxDate'])) {
			$maxDate = join('-', array_slice($this->passedArgs['Search.maxDate'], 0, 3));
			$maxDateTime = $maxDate . ' ' . join(':', array_slice($this->passedArgs['Search.maxDate'], 3, 5)) . ":00";
		}

		$requests = array();

//			$from = 'Wetzlar';
//			$to = 'Dortmund';

		//Location entry for start
		$from = $this->Location->find('first', array(
			'contain' => false,
			'conditions' => array(
				'Location.location' => $from,
			),
		));

		//Location entry for goal
		$to = $this->Location->find('first', array(
			'contain' => false,
			'conditions' => array(
				'Location.location' => $to,
			),
		));

		if(isset($to['Location']) && isset($from['Location'])) {
			//All Request with routes from start to goal
			$request_ids = $this->Request->RequestsRoute->find('list', array(
				'contain' => false,
				'fields' => array('RequestsRoute.request_id'),
				'group' => array('RequestsRoute.request_id HAVING MAX(RequestsRoute.order) > MIN(RequestsRoute.order)'),
				'conditions' => array(
					'RequestsRoute.location_id IN' => array($from['Location']['id'], $to['Location']['id']),
				),
			));

			//Requests to Display
			$requests = $this->Request->find('all', array(
				'contain' => array('RequestsRoute'),
				'conditions' => array(
					'AND' => array(
						'Request.id' => array_values($request_ids),
						'CONCAT(Request.drive_date, " ", Request.drive_time) <=' => $maxDateTime,
						'CONCAT(Request.drive_date, " ", Request.drive_time) >=' => $minDateTime,
					),
				),
			));
		}

		$this->set('requests', $requests);

		/*
		 * Render index-view of RequestController, as the display of the search results
		 */
		$this->render('/Requests/index');
	}
}
