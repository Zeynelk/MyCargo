<div class="posts form">
<?php echo $this->Form->create('Request');?>
	<fieldset>
 		<legend><?php echo "Edit Request"; ?></legend>
	<?php
		echo $this->Form->input('id');
        echo $this->Form->input('title');
		echo $this->Form->input('drive_date');
		echo $this->Form->input('drive_time');
		echo $this->Form->input('note_description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Save changes', true));?>
</div>
<div class="actions">
	<h3><?php echo "Available Actions"; ?></h3>
	<ul>
		<h4>Requests</h4>
		<li><?php echo $this->Html->link(__('Delete this request', true), array('action' => 'delete', $this->Form->value('Request.id')), null, 'Are you sure you want to delete this?'); ?></li>
		<li><?php echo $this->Html->link('List requests', array('action' => 'index'));?></li>
		<h4>Vehicles</h4>
		<li><?php echo $this->Html->link('List vehicles', array('controller' => 'vehicles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link('New vehicle', array('controller' => 'vehicles', 'action' => 'add')); ?> </li>
		<h4>Trailers</h4>
        <li><?php echo $this->Html->link('List trailers', array('controller' => 'trailers', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link('New trailers', array('controller' => 'trailers', 'action' => 'add')); ?> </li>
	</ul>
</div>