<?php
/**
 * Taxonomy index template
 */

get_header(); ?>
<?php
	$current_year = get_queried_object();
	$taxonomyName     = get_taxonomy($current_year->taxonomy);
	$store_type       = $current_year->name;
	$stores           = get_posts( array(
		'post_type'      => 'in_the_press',
		'posts_per_page' => -1,
		get_field('merchant_address',$store->ID),
		'tax_query' => array( 
			array(
				'taxonomy' => 'press_year', // taxonomy name
				'field'    => 'slug',
				'terms'    => array( $store_type ), // taxonomy term
			)
		)
	));
?>
	<!-- Full width image -->
	<div class="container-fluid hero-area">
		<div class="row justify-content-md-center align-items-center">
			<div class="title-container text-center">
				<h1>In The Press <?php 
						$current_year = get_queried_object();
						$taxonomyName = get_taxonomy($current_year->taxonomy);
						echo $current_year->name;
					?>
				</h1>
			</div>
		</div>
	</div>

	
	<div class="container press-year-container">
		<div class="row">
			<?php get_template_part('parts/press_year_filter'); ?>
		</div>
	</div>

<?php get_footer();
