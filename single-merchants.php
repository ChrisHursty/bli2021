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
<div class="container">
<!-- Row for main content area -->
	<div class="row archive-categories">
		<article>
			<?php get_template_part('parts/merchants_content'); ?>
			<p>
				<?php
				// Breadcrumb Style Inline List of all Businesses
				$args = array( 'hide_empty=0' );

				$terms = get_terms( 'merchants_type', $args );
				if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
					$count = count( $terms );
					$i = 0;
					$term_list = '<p>';
					foreach ( $terms as $term ) {
						$i++;
						$term_list .= '<a href="' . get_term_link( $term ) . '" title="' . sprintf( __( 'See All %s', 'understrap' ), $term->name ) . '">' . $term->name . '</a>';
						if ( $count != $i ) {
							$term_list .= ' &#9656; ';
						}
						else {
							$term_list .= '</p>';
						}
					}
					echo $term_list;
				};
				?>
			</p>
		</article>
	</div> <!-- row archive-categories -->
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
								<div class="fetaured-image">
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
			<div class="col-md-4 sidebar-merchants">
				<div class="place-address">
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
				</div>
				<?php if( get_field('merchant_phone') ): ?>
				<div class="place-number">
					<h6>Phone Number</h6>
					<a href="tel:<?php echo the_field('merchant_phone'); ?>"><?php the_field('merchant_phone'); ?></a>
				</div>
				<?php endif; ?>

				<?php if( get_field('merchant_hours') ): ?>
				<div class="place-hours">
					<h6>Opening Hours</h6>
					<?php the_field('merchant_hours'); ?>
				</div>
				<?php endif; ?>

				<?php if( get_field('merchant_website') ): ?>
					<div class="place-web">
						<h6>Website</h6>
						<a href="<?php echo the_field('merchant_website')?>" target="_blank">Click Here</a>
					</div>
				<?php endif; ?>
			</div>
		</div><!-- .row -->
	</div><!-- #content -->
</div><!-- #single-wrapper -->
<?php get_footer(); ?>

