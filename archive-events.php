<?php
/*
Taxonomy Index Page - For Attractions
 */

get_header() ;?>
<!-- Full width image -->
<div class="container-fluid hero-area">
	<div class="row justify-content-md-center align-items-center">
		<div class="title-container text-center">
			<h1>Attractions</h1>
		</div>
	</div>
</div>

<div class="container events-container">
	<div class="row" role="main">
		<?php if ( have_posts() ) : ?>
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="col-sm-6 col-md-4 archive-block">
					<div class="archive-anchor">
						<a href="<?php the_permalink(); ?>">
							<div class="archive-img tax-img">
								<?php the_post_thumbnail(); ?>
							</div>
						</a>
						<div class="attr-archive-text">
							<div class="title-container">
								<h3><?php the_title(); ?></h3>
							</div>
							<div class="place-address">
								<h6>Address</h6>
								<?php 
								if($address = get_field('event_address') ) {
									// Returns the Address from Google Map Place
									$contact_address = get_field('event_address');
									$address = explode( "," , $contact_address['address']);
									echo $address[0]; //street, number
									echo '<br />';
									echo $address[1].','.$address[2]; //city, state + zip
								}
								?>
								<?php
									if( $time = get_field('event_start_time') && get_field('event_end_time') ) { ?>
										<div class="place-number">
											<h6>Time</h6>
											<strong>Starts: <?php the_field('event_start_time'); ?> / Ends: <?php the_field('event_end_time'); ?></strong>
										</div>
									<?php } ?>

									<div class="place-excerpt">
										<p><?php the_field('event_excerpt'); ?></p>
									</div>
									<?php
									if( $website = get_field('event_website') ) {
										?>
										<div class="place-web">
											<h6>Website</h6>
											<a href="<?php the_field('event_website'); ?>" target="_blank">
												<?php the_field('event_website'); ?>
											</a>
										</div>
										<?php
									}; ?>
								<a href="<?php the_permalink(); ?>" class="read-more">Read More...</a>
							</div> <!-- /place-address -->
						</div> <!-- /archive-text --> 
					</div> <!-- /archive-anchor -->
				</div>
			<?php endwhile; ?>
		<?php endif; // end have_posts() check ?>
	</div> <!-- /row -->
</div> <!-- /container -->
<?php get_footer();
