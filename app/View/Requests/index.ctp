<h2><?php echo __('Requests'); ?></h2>
<table>
	<thead>
		<tr>
			<th><?php echo __('From'); ?></th>
			<th><?php echo __('To'); ?></th>
			<th><?php echo __('Date'); ?></th>
			<th><?php echo __('Time'); ?></th>
			<th><?php echo __('Actions'); ?></th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($requests as $request) : ?>
			<tr>
				<td><?php echo $request['Request']['from']; ?></td>
				<td><?php echo $request['Request']['to']; ?></td>
				<td><?php echo $request['Request']['drive_date']; ?></td>
				<td><?php echo $request['Request']['drive_time']; ?></td>
				<td><?php echo $this->Html->link(__('View'), array('controller' => 'requests', 'action' => 'view', $request['Request']['id'])); ?>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>
