<?php
/**
 * UnderStrap enqueue scripts
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'understrap_scripts' ) ) {
	/**
	 * Load theme's JavaScript and CSS sources.
	 */
	function understrap_scripts() {
		// Get the theme data.
		$the_theme     = wp_get_theme();
		$theme_version = $the_theme->get( 'Version' );

		$css_version = $theme_version . '.' . filemtime( get_template_directory() . '/css/theme.min.css' );
		wp_enqueue_style( 'understrap-styles', get_template_directory_uri() . '/css/theme.min.css', array(), $css_version );
		wp_enqueue_style( 'slick-default-styles', get_template_directory_uri() . '/css/slick/slick.css', array(), $css_version );
		wp_enqueue_style( 'slick-custom-styles', get_template_directory_uri() . '/css/slick/slick-theme.css', array(), $css_version );

		wp_enqueue_script( 'jquery' );

		$js_version = $theme_version . '.' . filemtime( get_template_directory() . '/js/theme.min.js' );
		wp_enqueue_script( 'understrap-scripts', get_template_directory_uri() . '/js/theme.min.js', array(), $js_version, true );
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}

		wp_enqueue_script( 'slick-scripts', get_template_directory_uri() . '/js/slick.min.js', array(), $js_version, true );
		wp_enqueue_script( 'custom-scripts', get_template_directory_uri() . '/js/custom_theme.js', array(), $js_version, true );
		wp_enqueue_script( 'google-maps-app', get_template_directory_uri() . '/js/googlemapsapp.js', array(), $js_version, true );

		wp_enqueue_script('slick-scripts');
		wp_enqueue_script('custom-scripts');
		wp_enqueue_script('google-maps-app');
	}
} // End of if function_exists( 'understrap_scripts' ).

add_action( 'wp_enqueue_scripts', 'understrap_scripts' );
