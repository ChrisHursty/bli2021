<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>
<div class="wrapper" id="wrapper-footer">
	<div class="<?php echo esc_attr( $container ); ?>">
		<div class="row">
			<div class="col-md-12">
				<?php dynamic_sidebar("after-footer"); ?>
				<footer class="site-footer" id="colophon">
					<div class="site-info">
						<p>website designed and maintained by <a href="https://iamchrishurst.com" target="_blank">Chris Hurst</a></p>
					</div><!-- .site-info -->
				</footer><!-- #colophon -->
			</div><!--col end -->
		</div><!-- row end -->
	</div><!-- container end -->
</div><!-- wrapper end -->
</div><!-- #page we need this extra closing tag here -->
<?php wp_footer(); ?>
</body>
</html>
