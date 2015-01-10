<div class="comments view">
<h2><?php  echo "Detailed view"; ?></h2>
        <h3> Vehicle Label </h3>
		<p>
			<?php echo$vehicle['Vehicle']['vehicle_label']; ?> &nbsp;
        </p>

		<h3> Vehicle Type </h3>
		<p>
			<?php $vehicle['Vehicle']['vehicle_type']; ?>   	&nbsp;
		</p>

		<h3> Seats </h3>
		<p>
			<?php echo $vehicle['Vehicle']['seats']; ?>	&nbsp;
		</p>

		<h3> Maximum Payload </h3>
		<p>
			<?php echo $vehicle['Vehicle']['max_weight']; ?>	&nbsp;
		</p>
		<h3> Metrics (lxwxh) </h3>
		<p>
		    <?php echo $vehicle['Vehicle']['length']; echo " x ";
		          echo $vehicle['Vehicle']['width']; echo " x ";
		          echo $vehicle['Vehicle']['height']; ?> &nbsp;
		</p>
		<h3> Additional Equipment </h3>
		<p>
		    <?php echo $vehicle['Vehicle']['additional_equipment']; ?>	&nbsp;
		</p>
	</dl>
</div>

<div class="actions">
	<h3><?php echo "Available Actions"; ?></h3>
	<ul>
	    <h4>Vehicles</h4>
		<li><?php echo $this->Html->link('Edit this vehicle', array('action' => 'edit', $vehicle['Vehicle']['id'])); ?> </li>
		<li><?php echo $this->Html->link('Delete this vehicle', array('action' => 'delete', $vehicle['Vehicle']['id']), null, 'Are you sure you want to delete this?'); ?> </li>
		<li><?php echo $this->Html->link('List vehicles', array('action' => 'index')); ?> </li>
		<h4>Trailers</h4>
        <li><?php echo $this->Html->link('List trailers', array('controller' => 'trailers', 'action' => 'index')); ?> </li>
        <h4>Offers</h4>
        <li><?php echo $this->Html->link('List offers', array('controller' => 'offers', 'action' => 'index')); ?> </li>
        <h4>Requests</h4>
        <li><?php echo $this->Html->link('List requests', array('controller' => 'requests', 'action' => 'index')); ?> </li>
	</ul>
</div>
