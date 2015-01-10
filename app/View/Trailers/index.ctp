<div class="comments index">
	<h2><?php echo "List of all trailers"; ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('trailer_label');?></th>
			<th><?php echo $this->Paginator->sort('max_weight');?></th>
			<th><?php echo $this->Paginator->sort('length');?></th>
			<th><?php echo $this->Paginator->sort('width');?></th>
			<th><?php echo $this->Paginator->sort('height');?></th>
			<th class="actions"><?php echo "Actions";?></th>
	</tr>
	<?php
	foreach ($trailers as $trailer): ?>
	<tr>
		<td><?php echo $trailer['Trailer']['id']; ?>&nbsp;</td>
		<td><?php echo $trailer['Trailer']['trailer_label']; ?>&nbsp;</td>
		<td><?php echo $trailer['Trailer']['max_weight']; ?>&nbsp;</td>
		<td><?php echo $trailer['Trailer']['length']; ?>&nbsp;</td>
		<td><?php echo $trailer['Trailer']['width']; ?>&nbsp;</td>
		<td><?php echo $trailer['Trailer']['height']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $trailer['Trailer']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $trailer['Trailer']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $trailer['Trailer']['id']), null, 'Are you sure you want to delete this?'); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>

</div>
<div class="actions">
	<h3><?php echo "Available Actions"; ?></h3>
	<ul>
	    <h4>Trailers</h4>
        <li><?php echo $this->Html->link('Edit this trailer', array('action' => 'edit', $trailer['Trailer']['id'])); ?> </li>
        <li><?php echo $this->Html->link('Delete this trailer', array('action' => 'delete', $trailer['Trailer']['id']), null, 'Are you sure you want to delete this?'); ?> </li>
        <li><?php echo $this->Html->link('List trailer', array('action' => 'index')); ?> </li>
        <h4>Vehicle</h4>
        <li><?php echo $this->Html->link('List vehicles', array('controller' => 'vehicles', 'action' => 'index')); ?> </li>
        <h4>Offers</h4>
        <li><?php echo $this->Html->link('List offers', array('controller' => 'offers', 'action' => 'index')); ?> </li>
        <h4>Requests</h4>
        <li><?php echo $this->Html->link('List requests', array('controller' => 'requests', 'action' => 'index')); ?> </li>
	</ul>
</div>