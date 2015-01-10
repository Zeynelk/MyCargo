<h2><?php echo __('View Offer'); ?></h2>
<p>
	<strong><?php echo __('From:'); ?></strong> <?php echo $offer['Offer']['from']; ?>
	<?php if (!empty($offer['OfferRoutes'])) : ?>
	<strong><?php echo __('Via:'); ?></strong> <?php echo $waypoints; ?>
	<?php endif; ?>
	<strong><?php echo __('To:'); ?></strong> <?php echo $offer['Offer']['to']; ?>
</p>
<ul>
	<li><strong><?php echo __('At:'); ?></strong> <?php echo $this->Time->nice($offer['Offer']['drive_date'] .' '. $offer['Offer']['drive_time']); ?></li>
	<li><strong><?php echo __('Seats:'); ?></strong> <?php echo $offer['Offer']['available_seat']; ?></li>
	<li><strong><?php echo __('Price:'); ?></strong> <?php echo $offer['Offer']['price']; ?> €</li>
	<li><strong><?php echo __('Cargo:'); ?></strong> <?php echo $offer['Offer']['available_place_type']; ?> &mdash; <?php echo $offer['Offer']['available_place']; ?></li>
	<li><strong><?php echo __('Vehicle:'); ?></strong> <?php echo $offer['Vehicle']['vehicle_label']; ?> (<?php echo $offer['Vehicle']['vehicle_type']; ?>)</li>
</ul>

<p><?php echo $offer['Offer']['note_description']; ?></p>
