<?php
$current_press_year  = get_queried_object();
$taxonomy_type       = get_taxonomy($current_press_year->taxonomy);
$press_term          = '2021';
$loop = new WP_Query(array(
	'post_type'         =>  'in_the_press', // name of CPT
	'tax_query' => array( 
		array(
			'taxonomy' => 'press_year', // taxonomy name
			'field'    => 'slug',
			'terms'    => array( $press_term ), // taxonomy term
		)
	),
	'posts_per_page' =>  12
));
?>
<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
	<div class="col-sm-6 col-md-4 archive-block">
		<?php get_template_part('parts/recipe_loop'); ?>
	</div>
<?php endwhile; wp_reset_postdata(); ?>