<?php
/*
Taxonomy Index Page - For Business Types/Merchants
 */

get_header() ;?>
<!-- Full width image -->
<div class="container-fluid hero-area">
	<div class="row justify-content-md-center align-items-center">
		<div class="title-container text-center">
			<h1>Merchants</h1>
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
<?php
// Shows image for custom taxonomy (via plugin)
$tax_terms = get_terms($taxonomy);
$terms     = apply_filters( 'taxonomy-images-get-terms', '', array('taxonomy' => 'merchants_type') ); ?>
<div class="container">
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
