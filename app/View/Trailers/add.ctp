<div class="comments form">
<?php echo $this->Form->create('Trailer');?>
	<fieldset>
 		<legend><?php echo "Create new trailer"; ?></legend>
	<?php
		echo $this->Form->input('trailer_label');
		echo $this->Form->input('max_weight');
		echo $this->Form->input('length');
		echo $this->Form->input('width');
		echo $this->Form->input('height');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Save', true));?>
</div>
<div class="actions">
	<h3><?php echo "Available Actions"; ?></h3>
	<ul>
        <h4>Trailers</h4>
        <li><?php echo $this->Html->link('List trailers', array('action' => 'index'));?></li>
        <h4>Vehicles</h4>
        <li><?php echo $this->Html->link('List vehicles', array('controller' => 'vehicles', 'action' => 'index')); ?> </li>
        <h4>Offers</h4>
        <li><?php echo $this->Html->link('List offers', array('controller' => 'offers', 'action' => 'index')); ?> </li>
        <h4>Requests</h4>
        <li><?php echo $this->Html->link('List requests', array('controller' => 'requests', 'action' => 'index')); ?> </li>
	</ul>
</div>