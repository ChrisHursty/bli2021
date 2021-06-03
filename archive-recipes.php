<?php
/*
Taxonomy Index Page - For Recipes
 */

get_header() ;?>
<!-- Full width image -->
<div class="container-fluid hero-area">
	<div class="row justify-content-md-center align-items-center">
		<div class="title-container text-center">
			<h1>Recipes</h1>
		</div>
	</div>
</div>

<div class="container">
<!-- Row for main content area -->
	<div class="row archive-categories">
		<article>
			<?php
			// Breadcrumb Style Inline List of all Recipes
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
		</article>
	</div> <!-- row archive-categories -->
</div>
<?php
// Shows image for custom taxonomy (via plugin)
$tax_terms = get_terms($taxonomy);
$terms     = apply_filters( 'taxonomy-images-get-terms', '', array('taxonomy' => 'recipe_type') ); ?>
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
<div class="container-fluid cookbook-container">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h4 class="text-center">From my Kitchen to your Table</h4>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6 cookbook-cover">
				<a href="https://www.bronxlittleitaly.com/wp-content/uploads/2021/03/From-my-Kitchen-to-your-Table.pdf" target="_blank">
					<img src="https://www.bronxlittleitaly.com/wp-content/uploads/2021/06/cook-book-cover.jpg" alt="Cookbook Cover">
				</a>
			</div>
			<div class="col-sm-6 cookbook-link">
				<p>A recipe book from Chef Michael Teitel, a chef and cook for 35 years. Featuring recipes that reference ingredients from Teitel Brothers and other local establishments.</p>
				<p><button type="button" class="btn btn-primary"><a href="https://www.bronxlittleitaly.com/wp-content/uploads/2021/03/From-my-Kitchen-to-your-Table.pdf" target="_blank">See Cookbook</a></button></p>
			</div>
		</div>
	</div>
	
</div>

<?php get_footer();
