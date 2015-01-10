<div class="posts form">
<?php echo $this->Form->create('Offer');?>
	<fieldset>
 		<legend><?php echo "Create a new offer"; ?></legend>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('drive_date');
		echo $this->Form->input('drive_time');
		echo $this->Form->input('note_description');

		echo $this->Form->input('available_seat');
		echo $this->Form->input('available_place_type');
		echo $this->Form->input('available_place');
		echo $this->Form->input('price_per_person');
		echo $this->Form->input('price');
		echo $this->Form->input('from');
		echo $this->Form->input('to');

		echo $this->Form->input('vehicle_id');
		echo $this->Form->input('trailer_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Create', true));?>
</div>
<div class="actions">
	<h3><?php echo "Available Actions"; ?></h3>
	<ul>
	    <h4>Offers</h4>
		<li><?php echo $this->Html->link('List offers', array('action' => 'index'));?></li>
		<h4>Requests</h4>
        <li><?php echo $this->Html->link('List requests', array('controller' => 'requests', 'action' => 'index')); ?> </li>
		<h4>Vehicles</h4>
		<li><?php echo $this->Html->link('List vehicles', array('controller' => 'vehicles', 'action' => 'index')); ?> </li>
		<h4>Trailers</h4>
        <li><?php echo $this->Html->link('List trailers', array('controller' => 'trailers', 'action' => 'index')); ?> </li>
	</ul>
</div>