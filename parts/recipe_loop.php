<?php 
// Loop for the merchants
 ?>
<a href="<?php the_permalink(); ?>">
	<div class="archive-img tax-img">
		<?php
			if ( has_post_thumbnail() ) { 
				the_post_thumbnail();
			}
		?>
	</div>
	<div class="tax-text">
		<div class="archive-title tax-title">
			<?php the_title(); ?>
			<?php echo $current_merchant_type->name; ?>
		</div>
	</div> <!-- archiveText -->
</a>
