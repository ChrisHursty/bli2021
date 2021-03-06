<?php 
// Loop for the merchants
 ?>
<a href="<?php the_permalink(); ?>">
	<div class="archive-img tax-img">
		<?php
			if ( has_post_thumbnail() ) { 
				the_post_thumbnail();
			}
		?>
	</div>
	<div class="tax-text">
		<div class="archive-title tax-title">
			<?php the_title(); ?>
			<?php echo $current_merchant_type->name; ?>
		</div>
		<div class="place-address">
			<?php if( get_field('merchant_address') ): ?>
			<h6>Address</h6>
			<?php 
			// Returns the Address from Google Map Place
			$contact_address = get_field('merchant_address');
			?>
			<?php $address = explode( "," , $contact_address['address']);
			echo $address[0]; //street, number
			?><br />
			<?php
			echo $address[1].','.$address[2]; //city, state + zip
			?>
			<?php endif; ?>
			<?php if( get_field('address_text') ): ?>
			<h6>Address</h6>
			<?php echo the_field('address_text'); ?>
			<?php endif; ?>
		</div> <!-- placeAddress -->
	</div> <!-- archiveText -->
</a>
