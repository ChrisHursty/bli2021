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

<div class="container attractions-container">
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
								<?php 
								if($address = get_field('attraction_address') ) {
									echo '<h6>Address</h6>';
									// Returns the Address from Google Map Place
									$contact_address = get_field('attraction_address');
									$address = explode( "," , $contact_address['address']);
									echo $address[0]; //street, number
									echo '<br />';
									echo $address[1].','.$address[2]; //city, state + zip
								} elseif ( get_field( 'address_text' ) ) {
									echo '<h6>Address</h6>';
									echo the_field('address_text');
								}
								?>
								<?php 
								if( $phone_number = get_field('attraction_phone') ) {
									?> 
								<div class="place-number">
									<h6>Phone Number</h6>
									<?php the_field('attraction_phone'); ?>
								</div>
									<?php
								}; ?>
								<?php 
								if( $website = get_field('attraction_website') ) {
									?> 
									<div class="place-web">
										<h6>Website</h6>
										<a href="<?php the_field('attraction_website'); ?>" target="_blank">
											<?php the_field('attraction_website'); ?>
										</a>
									</div>
									<?php
								}; ?>
							</div> <!-- /place-address -->
						</div> <!-- /archive-text --> 
					</div> <!-- /archive-anchor -->
				</div>
			<?php endwhile; ?>
		<?php endif; // end have_posts() check ?>
	</div> <!-- /row -->
</div> <!-- /container -->
<?php get_footer();
