<div class="posts view">
<h2><?php  echo "Detailed View"; ?></h2>
		<h3> Title </h3>
		<p>
			<?php echo $request['Request']['title']; ?>     		&nbsp;
        </p>

		<h3> Description </h3>
		<p>
			<?php echo $request['Request']['note_description']; ?>  		&nbsp;
		</p>

		<h3> Date </h3>
		<p>
			<?php echo $request['Request']['drive_date']; ?>			&nbsp;
		</p>

		<h3> Time </h3>
		<p>
			<?php echo $request['Request']['drive_time']; ?>			&nbsp;
		</p>
	</dl>
</div>

<div class="actions">
	<h3><?php echo "Available Actions"; ?></h3>
	<ul>
	   <h4>Requests</h4>
       		<li><?php echo $this->Html->link('Edit this request', array('action' => 'edit', $request['Request']['id'])); ?> </li>
       		<li><?php echo $this->Html->link('Delete this request', array('action' => 'delete', $request['Request']['id']), null, 'Are you sure you want to delete this?'); ?> </li>
       		<li><?php echo $this->Html->link('List requests', array('action' => 'index')); ?> </li>
       		<h4>Vehicles</h4>
       		<li><?php echo $this->Html->link('List vehicles', array('controller' => 'vehicles', 'action' => 'index')); ?> </li>
       		<li><?php echo $this->Html->link('New vehicle', array('controller' => 'vehicles', 'action' => 'add')); ?> </li>
       		<h4>Trailers</h4>
            <li><?php echo $this->Html->link('List trailers', array('controller' => 'trailers', 'action' => 'index')); ?> </li>
            <li><?php echo $this->Html->link('New trailer', array('controller' => 'treailers', 'action' => 'add')); ?> </li>
            <h4>Offers</h4>
            <li><?php echo $this->Html->link('List offers', array('controller' => 'offers', 'action' => 'index')); ?> </li>
            <li><?php echo $this->Html->link('New offer', array('controller' => 'offers', 'action' => 'add')); ?> </li>
	</ul>
</div>
