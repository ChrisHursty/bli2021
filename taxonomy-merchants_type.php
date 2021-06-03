<?php
/**
 * Taxonomy index template
 */

get_header(); ?>
<?php
	$current_merchant = get_queried_object();
	$taxonomyName     = get_taxonomy($current_merchant->taxonomy);
	$store_type       = $current_merchant->name;
	$stores           = get_posts( array(
		'post_type'      => 'merchants',
		'posts_per_page' => -1,
		get_field('merchant_address',$store->ID),
		'tax_query' => array( 
			array(
				'taxonomy' => 'merchants_type', // taxonomy name
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
				<h1><?php 
						$current_merchant = get_queried_object();
						$taxonomyName = get_taxonomy($current_merchant->taxonomy);
						echo $current_merchant->name;
					?>
				</h1>
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
		</div>
	</div>
	<div class="container">
		<div class="row">
			<?php get_template_part('parts/merchant_filter'); ?>
		</div>
	</div>

<?php get_footer();
