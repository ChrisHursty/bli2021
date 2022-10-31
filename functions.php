<?php
/**
 * UnderStrap functions and definitions
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// Google Maps API
function bronx_acf_google_map_api( $api ) {
	$api['key'] = 'AIzaSyAzsrM2L54rKoR7JhO9SjDcY1haERCbXIE';
	return $api;

}

// UnderStrap's includes directory.
$understrap_inc_dir = get_template_directory() . '/inc';

// Array of files to include.
$understrap_includes = array(
	'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/widgets.php',                         // Register widget area.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/template-tags.php',                   // Custom template tags for this theme.
	'/pagination.php',                      // Custom pagination for this theme.
	'/hooks.php',                           // Custom hooks.
	'/extras.php',                          // Custom functions that act independently of the theme templates.
	'/customizer.php',                      // Customizer additions.
	'/custom-comments.php',                 // Custom Comments file.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker. Trying to get deeper navigation? Check out: https://github.com/understrap/understrap/issues/567.
	'/editor.php',                          // Load Editor functions.
	'/deprecated.php',                      // Load deprecated functions.
	'/custom-post-types.php',               // Custom Post Types.
);

// Load WooCommerce functions if WooCommerce is activated.
if ( class_exists( 'WooCommerce' ) ) {
	$understrap_includes[] = '/woocommerce.php';
}

// Load Jetpack compatibility file if Jetpack is activiated.
if ( class_exists( 'Jetpack' ) ) {
	$understrap_includes[] = '/jetpack.php';
}

// Include files.
foreach ( $understrap_includes as $file ) {
	require_once $understrap_inc_dir . $file;
}

/* ------------------------------------------
Permalinks Structure

Changes the way permalinks are saved in the post edit form so that merchants post will be saved with a url like www.mysite.com/merchants/new_type/post-slug. This function uses the post_type_link hook. Rewrite_merchants_post_links function. Adds rule to rewrite post permalinks when saved.
-------------------------------------------*/

function rewrite_merchants_post_links( $post_link, $id = 0 ) {

	$post = get_post($id);
	 // checks to see that there is a post and that it is a "merchants" post type.
	if ( is_wp_error($post) || 'merchants' != $post->post_type || empty($post->post_name) )
		return $post_link;

	// Get the merchants_type taxonomy associated with the post:
	$terms = get_the_terms($post->ID, 'merchants_type');

	if( is_wp_error($terms) || !$terms ) {
		 //if you change the initial taxonomy to all you can replace 'uncategorize'd with "all"
		 $merchants_type = 'uncategorized';
	}
	else {
		$merchants_type_obj = array_pop($terms);
		// if merchants post type has merchants_type taxonomy get the taxonomy slug
		$merchants_type = $merchants_type_obj->slug;
	}
	// returns permalink in the form of /merchants/merchants-type-taxonomy-word/post-slug
	return home_url(user_trailingslashit( "merchants/$merchants_type/$post->post_name" ));
}
add_filter( 'post_type_link', 'rewrite_merchants_post_links' , 10, 2 );//*/

function rewrite_recipes_post_links( $post_link, $id = 0 ) {

	$post = get_post($id);
	 // checks to see that there is a post and that it is a "merchants" post type.
	if ( is_wp_error($post) || 'recipes' != $post->post_type || empty($post->post_name) )
		return $post_link;

	// Get the recipe_type taxonomy associated with the post:
	$terms = get_the_terms($post->ID, 'recipe_type');

	if( is_wp_error($terms) || !$terms ) {
		 //if you change the initial taxonomy to all you can replace 'uncategorize'd with "all"
		 $recipe_type = 'uncategorized';
	}
	else {
		$recipe_type_obj = array_pop($terms);
		// if merchants post type has recipe_type taxonomy get the taxonomy slug
		$recipe_type = $recipe_type_obj->slug;
	}
	// returns permalink in the form of /merchants/merchants-type-taxonomy-word/post-slug
	return home_url(user_trailingslashit( "recipes/$recipe_type/$post->post_name" ));
}
add_filter( 'post_type_link', 'rewrite_recipes_post_links' , 10, 2 );//*/


// rewrite rule that will allow wordpress to parse a url with the structure www.mysite.com/merchants/merchants_type/post-slug and return a post of the merchants post type with a matching taxonomy word and post slug.

/**
 * rewrite_rules function.
 * 
 * @access public
 * @return void
 */
function rewrite_rules() {
	//adds rewrite rule so wordpress will recognize /merchants/anything/anything
	add_rewrite_rule("^merchants/([^/]+)/([^/]+)/?",'index.php?post_type=merchants&merchants_type=$matches[1]&merchants=$matches[2]','top');

	add_rewrite_rule("^recipes/([^/]+)/([^/]+)/?",'index.php?post_type=recipes&recipe_type=$matches[1]&recipes=$matches[2]','top');
}
add_action('init', 'rewrite_rules');

// Removes update theme notification
add_filter( 'site_transient_update_themes', 'remove_update_themes' );
function remove_update_themes( $value ) {
    return null;
}
