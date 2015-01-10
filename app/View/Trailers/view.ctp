<div class="comments view">
<h2><?php echo "Detailed view"; ?></h2>
        <h3> Trailer Label </h3>
		<p>
			<?php echo$trailer['Trailer']['trailer_label']; ?>		&nbsp;
        </p>

		<h3> Maximum Payload </h3>
		<p>
			<?php $trailer['Trailer']['max_weight']; ?>		&nbsp;
		</p>

		<h3> Metrics (lxwxh) </h3>
        <p>
            <?php echo $trailer['Trailer']['length']; echo " x ";
                  echo $trailer['Trailer']['width']; echo " x ";
                  echo $trailer['Trailer']['height']; ?> &nbsp;
        </p>
	</dl>
</div>


<div class="actions">
	<h3><?php echo "Available Actions"; ?></h3>
	<ul>
	    <h4>Trailers</h4>
        <li><?php echo $this->Html->link('New trailer', array('action' => 'add')); ?></li>
        <h4>Vehicles</h4>
        <li><?php echo $this->Html->link('List vehicles', array('controller' => 'vehicles', 'action' => 'index')); ?> </li>
        <h4>Offers</h4>
        <li><?php echo $this->Html->link('List offers', array('controller' => 'offers', 'action' => 'index')); ?> </li>
        <h4>Requests</h4>
        <li><?php echo $this->Html->link('List requests', array('controller' => 'requests', 'action' => 'index')); ?> </li>
	</ul>
</div>
