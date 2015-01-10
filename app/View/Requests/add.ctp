<div class="posts form">
<?php echo $this->Form->create('Request');?>
	<fieldset>
 		<legend><?php echo "Create a new request"; ?></legend>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('drive_date');
		echo $this->Form->input('drive_time');
		echo $this->Form->input('note_description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Create', true));?>
</div>
<div class="actions">
	<h3><?php echo "Available Actions"; ?></h3>
	<ul>
	    <h4>Requests</h4>
		<li><?php echo $this->Html->link('List requests', array('action' => 'index'));?></li>
		<h4>Offers</h4>
    	<li><?php echo $this->Html->link('List offers', array('action' => 'index'));?></li>
   		<h4>Vehicles</h4>
        <li><?php echo $this->Html->link('List vehicles', array('controller' => 'vehicles', 'action' => 'index')); ?> </li>
        <h4>Trailers</h4>
        <li><?php echo $this->Html->link('List trailers', array('controller' => 'trailers', 'action' => 'index')); ?> </li>
	</ul>
</div>