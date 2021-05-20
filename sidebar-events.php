<?php
/**
 * The sidebar containing the main widget area
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div class="col-md-4 widget-area" id="secondary" role="complementary">

	<?php do_action('bliTheme_before_sidebar'); ?>
	<div class="placeAddress">
		<h6>Address</h6>
		<?php 
		// Returns the Address from Google Map Place
		$contact_address = get_field('event_address');
		?>
		<?php $address = explode( "," , $contact_address['address']);
		echo $address[0]; //street, number
		?><br />
		<?php
		echo $address[1].','.$address[2]; //city, state + zip
		?>
	</div>

	<?php if( get_field('event_phone') ): ?>
	<div class="placeNumber">
		<h6>Phone Number</h6>
		<?php the_field('event_phone'); ?>
	</div>
	<?php endif; ?>

	<?php if( get_field('event_hours') ): ?>
	<div class="placeHours">
		<h6>Opening Hours</h6>
		<?php the_field('event_hours'); ?>
	</div>
	<?php endif; ?>

	<?php if( get_field('event_website') ): ?>
		<div class="placeWeb">
			<h6>Website</h6>
			<a href="<?php echo the_field('event_website')?>" target="_blank">
				<?php the_field('event_website') ?></a>  
		</div>
	<?php endif; ?>

	<?php if ( $sidebar = dynamic_sidebar("sidebar-events") ) { ?>
			<div class="placeWidgets">
			<?php is_active_widget('sidebar-events'); ?>
			</div>
	<?php }; ?>

	<?php do_action('bliTheme_after_sidebar'); ?>

</div><!-- #secondary -->
