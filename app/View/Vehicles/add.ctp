<div class="comments form">
<?php echo $this->Form->create('Vehicle');?>
	<fieldset>
 		<legend><?php echo "Create new vehicle"; ?></legend>
	<?php
		echo $this->Form->input('vehicle_label');
		echo $this->Form->input('vehicle_type');
		//echo $this->Form->input('seats', array('type'=>'text'));

		echo $this->Form->input('seats', array(
			'options' => array(1,2,3,4,5,6,7,8,9),
			'empty' => '(Select number of seats.)'
		));

        echo $this->Form->input('vehicle_label', array(
        		'options' => $vehicle_labels,
                'empty' => '(Select a vehicle label)'
        ));

		echo $this->Form->input('max_weight');
		echo $this->Form->input('length');
		echo $this->Form->input('width');
		echo $this->Form->input('height');

		echo $this->Form->input('additional_equipment', array(
					'type' => 'textarea',
					'rows' =>'5',
					'cols' =>'10'
		));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Save', true));?>
</div>
<div class="actions">
	<h3><?php echo "Available Actions"; ?></h3>
	<ul>
        <h4>Vehicles</h4>
		<li><?php echo $this->Html->link('List vehicles', array('action' => 'index'));?></li>
		<h4>Trailers</h4>
       	<li><?php echo $this->Html->link('List trailers', array('controller' => 'trailers', 'action' => 'index')); ?> </li>
		<h4>Offers</h4>
		<li><?php echo $this->Html->link('List offers', array('controller' => 'offers', 'action' => 'index')); ?> </li>
		<h4>Requests</h4>
        <li><?php echo $this->Html->link('List requests', array('controller' => 'requests', 'action' => 'index')); ?> </li>
	</ul>
</div>
