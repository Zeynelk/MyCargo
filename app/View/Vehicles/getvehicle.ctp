<h2> All Vehicles </h2>

<table>
  <tr>

    <th>ID</th>
    <th>Car label</th>
    <th>Vehicletype</th>
    <th>Free seats</th>
    <th>Max Weight</th>
    <th>Metrics</th>
    <th>Created on</th>
    <th>Last modified on</th>
    <th>Actions</th>
  <tr>
    <?php foreach ($vehicles as $vehicle) : ?>

  <tr>

    <td> <?php echo $vehicle['Vehicle']['id']; ?></td>
    <td> <?php echo $vehicle['Vehicle']['car_label']; ?></td>
    <td> <?php echo $vehicle['Vehicle']['vehicle_type']; ?></td>
    <td> <?php echo $vehicle['Vehicle']['free_seats']; ?></td>
    <td> <?php echo $vehicle['Vehicle']['max_weight']; ?></td>
    <td> <?php echo $vehicle['Vehicle']['metrics']; ?></td>
    <td> <?php echo $vehicle['Vehicle']['created_on']; ?></td>
    <td> <?php echo $vehicle['Vehicle']['modified_on']; ?></td>
    <td>
      <?php echo $this->Html->link('Select', array( 'action' => 'returnvehicleid', $vehicle['Vehicle']['id'] )); ?>
    </td>
  </tr>

  <?php endforeach; ?>
</table>
