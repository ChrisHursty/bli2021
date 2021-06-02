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
			<p>
				<?php
				// Breadcrumb Style Inline List of all Businesses
				$args = array( 'hide_empty=0' );

				$terms = get_terms( 'recipe_type', $args );
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
			<div class="col-md-4 sidebar-recipes">
				<?php if( get_field('serving_size') ): ?>
				<div class="serving-size">
					<h6>Serving Size</h6>
					<?php echo the_field('serving_size'); ?>
				</div>
				<?php endif; ?>
				<?php if( get_field('cooking_time') ): ?>
				<div class="serving-size">
					<h6>Cooking Time</h6>
					<?php echo the_field('cooking_time'); ?>
				</div>
				<?php endif; ?>
			</div>
		</div><!-- .row -->
	</div><!-- #content -->
</div><!-- #single-wrapper -->
<?php get_footer(); ?>

