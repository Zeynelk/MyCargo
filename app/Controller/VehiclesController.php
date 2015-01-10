<?php
/**
 * Controller class for creating, deleting or editing a vehicle.
 * Additional features: index() -> get list of all created vehicles.
 *                      view()  -> get detailed view of specific vehicle.
 */
class VehiclesController extends AppController
{
    var $name = 'Vehicles';

    /**
     * Create a listed view of created vehicles.
     */
    public function index()
    {
        $this->Vehicle->recursive = 0;
        $this->set('vehicles', $this->paginate());
    }

    /**
     * Get detailed view of a vehicle specified by id.
     *
     * @param $id offer-id specifying the vehicle which will be viewed.
     */
    public function view($id = null)
    {
        if (!$id) {
            $this->Session->setFlash('Invalid vehicle id! Please try again.');
            $this->redirect(array('action' => 'index'));
        }
        $this->set('vehicle', $this->Vehicle->read(null, $id));
    }

    /**
     * Create a new vehicle.
     */
    public function add()
    {
        App::uses('ConnectionManager', 'Model');

        $db = ConnectionManager::getDataSource('default');

        $result = $db->query("SELECT DISTINCT make FROM vehiclemodelyear");

        $tmp = array();
        foreach($result as $elem){
            array_push($tmp, $elem["vehiclemodelyear"]["make"]);
        }
        $this->set('vehicle_labels', $tmp);


        if (!empty($this->data)) {
            $this->Vehicle->create();
            if ($this->Vehicle->save($this->data)) {
                $this->Session->setFlash('Your vehicle has been saved.');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Your offer could not be saved! Please try again.');
            }
        }
	}


    /**
     * Edit an existing vehicle specified by id.
     *
     * @param $id vehicle-id specifying the vehicle which will be edited.
     */
    public function edit($id = null)
    {
        if (!$id && empty($this->data)) {
            $this->Session->setFlash('Some error occurred! Please try again.');
            $this->redirect(array('action' => 'index'));
        }
        if (!empty($this->data)) {
            if ($this->Vehicle->save($this->data)) {
                $this->Session->setFlash('Your vehicle has been edited.');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Your vehicle could not be edited. Please, try again.');
            }
        }
        if (empty($this->data)) {
            $this->data = $this->Vehicle->read(null, $id);
        }
    }

    /**
     * Delete an existing vehicle specified by id.
     *
     * @param $id vehicle-id specifying the vehicle which will be deleted.
     */
    public function delete($id = null)
    {
        if (!$id) {
            $this->Session->setFlash('Invalid vehicle id.');
            $this->redirect(array('action'=>'index'));
        }
        if ($this->Vehicle->delete($id)) {
            $this->Session->setFlash('Vehicle deleted.');
            $this->redirect(array('action'=>'index'));
        }
        $this->Session->setFlash('Vehicle was not deleted. Please try again.');
        $this->redirect(array('action' => 'index'));
    }
}
