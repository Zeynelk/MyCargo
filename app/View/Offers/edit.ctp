<div class="posts form">
<?php echo $this->Form->create('Offer');?>
	<fieldset>
 		<legend><?php echo "Edit Offer"; ?></legend>
	<?php
		echo $this->Form->input('id');
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
<?php echo $this->Form->end(__('Save changes', true));?>
</div>
<div class="actions">
	<h3><?php echo "Available Actions"; ?></h3>
	<ul>
        <h4>Offers</h4>
		<li><?php echo $this->Html->link(__('Delete this offer', true), array('action' => 'delete', $this->Form->value('Offer.id')), null, 'Are you sure you want to delete this?'); ?></li>
		<li><?php echo $this->Html->link('List offers', array('action' => 'index'));?></li>
		<h4>Vehicles</h4>
		<li><?php echo $this->Html->link('List vehicles', array('controller' => 'vehicles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link('New vehicle', array('controller' => 'vehicles', 'action' => 'add')); ?> </li>
		<h4>Trailers</h4>
        <li><?php echo $this->Html->link('List trailers', array('controller' => 'trailers', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link('New trailers', array('controller' => 'trailers', 'action' => 'add')); ?> </li>
	</ul>
</div>