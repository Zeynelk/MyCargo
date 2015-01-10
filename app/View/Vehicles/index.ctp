<div class="comments index">
<h2><?php  echo "List of all vehicles"; ?></h2>
<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('vehicle_label');?></th>
			<th><?php echo $this->Paginator->sort('vehicle_type');?></th>
			<th><?php echo $this->Paginator->sort('seats');?></th>
			<th><?php echo $this->Paginator->sort('max_weight');?></th>
			<th><?php echo $this->Paginator->sort('length');?></th>
			<th><?php echo $this->Paginator->sort('width');?></th>
			<th><?php echo $this->Paginator->sort('height');?></th>
			<th><?php echo $this->Paginator->sort('additional_equipment');?></th>
			<th><?php echo "Actions"; ?></th>
	</tr>
	<?php foreach ($vehicles as $vehicle): ?>
	<tr>
		<td><?php echo $vehicle['Vehicle']['id']; ?>&nbsp;</td>
		<td><?php echo $vehicle['Vehicle']['vehicle_label']; ?>&nbsp;</td>
		<td><?php echo $vehicle['Vehicle']['vehicle_type']; ?>&nbsp;</td>
		<td><?php echo $vehicle['Vehicle']['seats']; ?>&nbsp;</td>
		<td><?php echo $vehicle['Vehicle']['max_weight']; ?>&nbsp;</td>
		<td><?php echo $vehicle['Vehicle']['length']; ?>&nbsp;</td>
		<td><?php echo $vehicle['Vehicle']['width']; ?>&nbsp;</td>
		<td><?php echo $vehicle['Vehicle']['height']; ?>&nbsp;</td>
		<td><?php echo $vehicle['Vehicle']['additional_equipment']; ?>&nbsp;</td>

		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $vehicle['Vehicle']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $vehicle['Vehicle']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $vehicle['Vehicle']['id']), null, 'Are you sure you want to delete this?'); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>

</div>
<div class="actions">
	<h3><?php echo "Available Actions"; ?></h3>
	<ul>
	    <h4>Vehicles</h4>
		<li><?php echo $this->Html->link('New vehicle', array('action' => 'add')); ?></li>
		<h4>Trailers</h4>
        <li><?php echo $this->Html->link('List trailers', array('controller' => 'trailers', 'action' => 'index')); ?> </li>
        <h4>Offers</h4>
        <li><?php echo $this->Html->link('List offers', array('controller' => 'offers', 'action' => 'index')); ?> </li>
        <h4>Requests</h4>
        <li><?php echo $this->Html->link('List requests', array('controller' => 'requests', 'action' => 'index')); ?> </li>
	</ul>
</div>
