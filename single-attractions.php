<?php
/**
 * Single Merchant Template
 *
 * @package understrap
 */

get_header(); ?>
<!-- Full width image -->
<div class="container-fluid hero-area">
	<div class="row justify-content-md-center align-items-center">
		<div class="title-container text-center">
			<h1><?php the_title(); ?></h1>
		</div>
	</div>
</div>

<div class="wrapper" id="single-wrapper">
	<div class="container" id="content" tabindex="-1">
		<div class="row">
			<div class="col-md-8">
				<main class="site-main" id="main">
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> 
						<div class="entry-content">
							<?php
							while ( have_posts() ) {
								the_post(); ?>
							<?php } ?>
							<?php if ( has_post_thumbnail() ): ?>
								<div class="featured-image">
									<?php the_post_thumbnail(); ?>
								</div>
							<?php endif; ?>
							<?php the_content(); ?>
							<?php understrap_post_nav(); ?>
							<footer>
								<?php $tag = get_the_tags(); if (!$tag) { } else { ?><p><?php the_tags(); ?></p><?php } ?>
							</footer>
							<hr />
						</div>
					</article><!-- #post-## -->
				</main><!-- #main -->
			</div>
			<div class="col-md-4 sidebar-events">
				
				<?php if( get_field('attraction_address') ): ?>
				<div class="place-address">
					<h6>Address</h6>
					<?php 
					// Returns the Address from Google Map Place
					$contact_address = get_field('attraction_address');
					?>
					<?php $address = explode( "," , $contact_address['address']);
					echo $address[0]; //street, number
					?><br />
					<?php
					echo $address[1].','.$address[2]; //city, state + zip
					?>
				</div>
				<?php endif; ?>
				<?php if( get_field('address_text') ): ?>
				<div class="place-address">
					<h6>Address</h6>
					<?php echo the_field('address_text'); ?>
				</div>
				<?php endif; ?>
				<?php if( get_field('attraction_phone') ): ?>
				<div class="place-number">
					<h6>Phone Number</h6>
					<a href="tel:<?php echo the_field('attraction_phone'); ?>"><?php the_field('attraction_phone'); ?></a>
				</div>
				<?php endif; ?>

				<?php
				if( $time = get_field('attraction_start_time') && get_field('attraction_end_time') ) { ?>
				<div class="place-time">
					<h6>Time</h6>
					<strong>Starts:</strong> <?php the_field('attraction_start_time'); ?><br />
					<strong>Ends:</strong> <?php the_field('attraction_end_time'); ?>
				</div>
				<?php } ?>

			</div>
		</div><!-- .row -->
	</div><!-- #content -->
</div><!-- #single-wrapper -->
<?php get_footer(); ?>

