<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<script src="https://kit.fontawesome.com/a5fca45676.js" crossorigin="anonymous"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v10.0" nonce="HbzTz9gx"></script>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar">
		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>
		<div id="" class="navbar navbar-expand-md navbar-dark" aria-labelledby="logo-text-area">
			<div class="container header">
				<!-- Your site title as branding in the menu -->
				<?php if ( ! has_custom_logo() ) { ?>
					<?php if ( is_front_page() && is_home() ) : ?>
						<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>
					<?php else : ?>
						<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>

					<?php endif; ?>

					<?php
				} else {
					the_custom_logo();
				}
				?>
				<!-- end custom logo -->
				<div class="right-header">
					<div class="header-headline">
						<h3><?php echo get_theme_mod('bli_header_text'); ?></h3>
					</div>
					<div class="socials">
						<div class="facebook"><a class="fab fa-facebook" href="https://facebook.com/BronxLittleItaly" rel="noopener noreferrer nofollow" target="_blank"></a></div>
						<div class="twitter"><a class="fab fa-twitter"href="https://twitter.com/BXLittleItaly" rel="noopener noreferrer nofollow" target="_blank"></a></div>
						<div class="instagram"><a class="fab fa-instagram" href="https://instagram.com/bronxlittleitaly/" rel="noopener noreferrer nofollow" target="_blank"></a></div>
						<div class="youtube"><a class="fab fa-youtube" href="https://www.youtube.com/channel/UC-gNHnKz5UtNtZ8sTo4hSGw" rel="noopener noreferrer nofollow" target="_blank"></a></div>
						<div class="tiktok"><a class="fab fa-tiktok" href="https://www.tiktok.com/@bronxlittleitaly" rel="noopener noreferrer nofollow" target="_blank"></a></div>
					</div> <!-- /socialLinks -->
				</div>
				
			</div><!-- .container -->

		</div><!-- .site-navigation -->
		<nav id="main-nav" class="navbar navbar-expand-md navbar-dark" aria-labelledby="main-nav-label">
			<h2 id="main-nav-label" class="sr-only">
				<?php esc_html_e( 'Main Navigation', 'understrap' ); ?>
			</h2>
			<div class="container-fluid header-nav">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
					<span class="navbar-toggler-icon"></span>
				</button>

				<!-- The WordPress Menu goes here -->
				<?php
				wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse col-12',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth'           => 2,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				);
				?>
			</div><!-- .container -->
		</nav><!-- .site-navigation -->
		<div class="container bli-message"> <!-- Official BLI -->
			<div class="row">
				<div class="col-sm-12 official-bli-message">
					<h2><?php echo get_theme_mod('bli_hero_text'); ?></h2>
				</div>
			</div>

		</div>
	</div><!-- #wrapper-navbar end -->
