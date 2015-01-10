<h2><?php echo __('Offers'); ?></h2>
<table>
	<thead>
		<tr>
			<th><?php echo __('From'); ?></th>
			<th><?php echo __('Via'); ?></th>
			<th><?php echo __('To'); ?></th>
			<th><?php echo __('Date'); ?></th>
			<th><?php echo __('Time'); ?></th>
			<th><?php echo __('Actions'); ?></th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($offers as $offer) : ?>
			<tr>
				<td><?php echo $offer['Offer']['from']; ?></td>
				<td>
					<ul>
						<li>Erstes Zwischenziel</li>
					</ul>
				</td>
				<td><?php echo $offer['Offer']['to']; ?></td>
				<td><?php echo $offer['Offer']['drive_date']; ?></td>
				<td><?php echo $offer['Offer']['drive_time']; ?></td>
				<td><?php echo $this->Html->link(__('View'), array('controller' => 'offers', 'action' => 'view', $offer['Offer']['id'])); ?></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>
