<?php
/**
 * The front-page template
 *
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<!-- Home Page Slider -->
	<?php 
	// Query Arguments
		$args = array(
			'post_type'      => 'slides',
			'posts_per_page' => 5
		);  
		
		// The Query
		$the_query = new WP_Query( $args );
		
		// Check if the Query returns any posts
		$the_query->have_posts()
		
		// Start the Slider ?>
<div class="container">
	<div class="row">
		<div class="col-12">
			<div class="sliderHome">
				<?php 
				// The Loop
				while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					<div>
					<?php 
					// The Slide's Image
					echo the_post_thumbnail('homeSlider'); ?>
					</div>
				<?php endwhile; ?>
			</div><!-- /sliderHome -->
		</div>
	</div>
</div>
<?php 
	// Reset Post Data
	wp_reset_postdata();
?>
<!-- /Home Page Slider -->
<div class="wrapper" id="full-width-page-wrapper">
	<div class="<?php echo esc_attr( $container ); ?>" id="content">
		<div class="row">
			<div class="col-md-12 content-area" id="primary">
				<main class="site-main" id="main" role="main">
					<?php the_content(); ?>
				</main><!-- #main -->
			</div><!-- #primary -->
		</div><!-- .row end -->
	</div><!-- #content -->

	<!-- Socials -->
	<div class="<?php echo esc_attr( $container ); ?> hp-socials" style="margin-top: 30px;">
		<div class="row">
			<div class="col-sm-12 col-md-6 homeFacebook">
				<?php dynamic_sidebar("homepage-facebook"); ?>
			</div>

			<div class="col-sm-12 col-md-6 columns homeTwitter">
				<?php dynamic_sidebar("homepage-twitter"); ?>
			</div>
		</div> <!-- /row -->

		<div class="row">
			<div class="col-sm-12 col-md-12 homeInstagram">
				<?php dynamic_sidebar("homepage-instagram"); ?>
			</div>
		</div> <!-- /row -->
	</div><!-- #content -->
</div><!-- #full-width-page-wrapper -->


<?php
get_footer();
