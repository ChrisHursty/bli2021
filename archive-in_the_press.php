<?php
/*
Taxonomy Index Page - For Business Types/Merchants
 */

get_header() ;?>
<!-- Full width image -->
<div class="container-fluid hero-area">
	<div class="row justify-content-md-center align-items-center">
		<div class="title-container text-center">
			<h1>In The Press</h1>
		</div>
	</div>
</div>

<?php
// Shows image for custom taxonomy (via plugin)
$tax_terms = get_terms($taxonomy);
$terms     = apply_filters( 'taxonomy-images-get-terms', '', array('taxonomy' => 'press_year') ); ?>
<div class="container press-year-container">
		<div class="row">

	<?php if ( ! empty( $terms ) ) { ;?>

	<?php
		foreach( (array) $terms as $term ) {
			echo '<div class="col-sm-6 col-md-4 archive-block"><a href="' . get_term_link( $term ) . '" title="' . sprintf( __( 'See All %s', 'understrap' ), $term->name ) . '">';
			echo '<div class="archive-img tax-img">' . wp_get_attachment_image( $term->image_id, 'taxonomy-thumb' );
			echo '<div class="archive-text"><div class="title-container">' . $term->name . '</div><div class="see-all">See All <span>&#9656;</span></div></div>';
			echo '</div></div></a>';
		}
	}; ?>
	</div>
</div>

<?php get_footer();
