<?php
/**
 * Custom header setup
 *
 * @package UnderStrap
 */

/*_____________________________________________________

-------------Register Custom Post Types----------------
_______________________________________________________*/
function bli_custom_post_type() {

	// Merchants Post Type
	$labels = array(
		'name'               => _x( 'Merchants', 'post type general name' ),
		'singular_name'      => _x( 'Merchant', 'post type singular name' ),
		'menu_name'          => _x( 'Merchants', 'admin menu' ),
		'name_admin_bar'     => _x( 'Merchants', 'add new on admin bar' ),
		'add_new'            => _x( 'Add New', 'Merchants' ),
		'add_new_item'       => __( 'Add New Merchants' ),
		'new_item'           => __( 'New Merchants' ),
		'edit_item'          => __( 'Edit Merchants' ),
		'view_item'          => __( 'View Merchants' ),
		'all_items'          => __( 'All Merchants' ),
		'search_items'       => __( 'Search Merchants' ),
		'parent_item_colon'  => __( 'Parent Merchants:' ),
		'not_found'          => __( 'No merchants found.' ),
		'not_found_in_trash' => __( 'No merchants found in Trash.' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'menu_icon'          => 'dashicons-id-alt',
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'merchants' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 5,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);

	register_post_type( 'merchants', $args );

	// Attractions Post Type
	$labels = array(
		'name'               => _x( 'Attractions', 'post type general name' ),
		'singular_name'      => _x( 'Attraction', 'post type singular name' ),
		'menu_name'          => _x( 'Attractions', 'admin menu' ),
		'name_admin_bar'     => _x( 'Attractions', 'add new on admin bar' ),
		'add_new'            => _x( 'Add New', 'Attractions' ),
		'add_new_item'       => __( 'Add New Attractions' ),
		'new_item'           => __( 'New Attractions' ),
		'edit_item'          => __( 'Edit Attractions' ),
		'view_item'          => __( 'View Attractions' ),
		'all_items'          => __( 'All Attractions' ),
		'search_items'       => __( 'Search Attractions' ),
		'parent_item_colon'  => __( 'Parent Attractions:' ),
		'not_found'          => __( 'No attractions found.' ),
		'not_found_in_trash' => __( 'No attractions found in Trash.' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'menu_icon'          => 'dashicons-tickets-alt',
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'attractions' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 6,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);

	register_post_type( 'attractions', $args );

	// Events Post Type
	$labels = array(
		'name'               => _x( 'Events', 'post type general name' ),
		'singular_name'      => _x( 'Event', 'post type singular name' ),
		'menu_name'          => _x( 'Events', 'admin menu' ),
		'name_admin_bar'     => _x( 'Events', 'add new on admin bar' ),
		'add_new'            => _x( 'Add New', 'Events' ),
		'add_new_item'       => __( 'Add New Events' ),
		'new_item'           => __( 'New Events' ),
		'edit_item'          => __( 'Edit Events' ),
		'view_item'          => __( 'View Events' ),
		'all_items'          => __( 'All Events' ),
		'search_items'       => __( 'Search Events' ),
		'parent_item_colon'  => __( 'Parent Events:' ),
		'not_found'          => __( 'No events found.' ),
		'not_found_in_trash' => __( 'No events found in Trash.' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'menu_icon'          => 'dashicons-calendar-alt',
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'events' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 7,
		'supports'           => array( 'title', 'editor', 'thumbnail', 'custom-fields' )
	);

	register_post_type( 'events', $args );

	// Recipes Post Type
	$labels = array(
		'name'               => _x( 'Recipes', 'post type general name' ),
		'singular_name'      => _x( 'Recipe', 'post type singular name' ),
		'menu_name'          => _x( 'Recipes', 'admin menu' ),
		'name_admin_bar'     => _x( 'Recipes', 'add new on admin bar' ),
		'add_new'            => _x( 'Add New', 'Recipes' ),
		'add_new_item'       => __( 'Add New Recipes' ),
		'new_item'           => __( 'New Recipes' ),
		'edit_item'          => __( 'Edit Recipes' ),
		'view_item'          => __( 'View Recipes' ),
		'all_items'          => __( 'All Recipes' ),
		'search_items'       => __( 'Search Recipes' ),
		'parent_item_colon'  => __( 'Parent Recipes:' ),
		'not_found'          => __( 'No recipes found.' ),
		'not_found_in_trash' => __( 'No recipes found in Trash.' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'menu_icon'          => 'dashicons-carrot',
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'recipes' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 5,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);

	register_post_type( 'recipes', $args );

	// In The Press Post Type
	$labels = array(
		'name'               => _x( 'In The Press', 'post type general name' ),
		'singular_name'      => _x( 'In The Press', 'post type singular name' ),
		'menu_name'          => _x( 'In The Press', 'admin menu' ),
		'name_admin_bar'     => _x( 'In The Press', 'add new on admin bar' ),
		'add_new'            => _x( 'Add New', 'Recipes' ),
		'add_new_item'       => __( 'Add New Press Month' ),
		'new_item'           => __( 'New Press Month' ),
		'edit_item'          => __( 'Edit Press Month' ),
		'view_item'          => __( 'View Press Months' ),
		'all_items'          => __( 'All Press Months' ),
		'search_items'       => __( 'Search Press Months' ),
		'parent_item_colon'  => __( 'Parent Press Months:' ),
		'not_found'          => __( 'No Press Months found.' ),
		'not_found_in_trash' => __( 'No Press Months found in Trash.' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'menu_icon'          => 'dashicons-calendar',
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'in-the-press' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 5,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);

	register_post_type( 'in_the_press', $args );

}
add_action('init', 'bli_custom_post_type' );


// Flush rewrite rules to add "review" as a permalink slug
function bli_rewrite_flush() {
	bli_custom_post_type();
	flush_rewrite_rules();
}
register_activation_hook( __FILE__, 'bli_rewrite_flush' );


/*_____________________________________________________

---Custom Taxonomies - with Rewrite slug same as CPT---
_______________________________________________________*/

/**
 * bli_custom_taxonomies function. Creates Type of Merchants Taxonomy for taggin merchants & events.
 * 
 * @access public
 * @return void
 */
function bli_custom_taxonomies() {
	// Add new taxonomy, make it hierarchical (like categories)
	$labels = array(
		'name'              => _x( 'Types of Merchants', 'taxonomy general name' ),
		'singular_name'     => _x( 'Types of Merchant', 'taxonomy singular name' ),
		'search_items'      => __( 'Search Type of Merchants' ),
		'all_items'         => __( 'All Types of Merchants' ),
		'parent_item'       => __( 'Parent Types of Merchants' ),
		'parent_item_colon' => __( 'Parent Types of Merchants:' ),
		'edit_item'         => __( 'Edit Type of Merchants' ),
		'update_item'       => __( 'Update Type of Merchants' ),
		'add_new_item'      => __( 'Add New Type of Merchants' ),
		'new_item_name'     => __( 'New Type of Merchants Name' ),
		'menu_name'         => __( 'Type of Merchants' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'merchants' ),
	);

	register_taxonomy( 'merchants_type', array( 'merchants' ), $args );

	// Add new taxonomy, make it hierarchical (like categories)
	$labels = array(
		'name'              => _x( 'Types of Recipes', 'taxonomy general name' ),
		'singular_name'     => _x( 'Types of Recipe', 'taxonomy singular name' ),
		'search_items'      => __( 'Search Type of Recipes' ),
		'all_items'         => __( 'All Types of Recipes' ),
		'parent_item'       => __( 'Parent Types of Recipes' ),
		'parent_item_colon' => __( 'Parent Types of Recipes:' ),
		'edit_item'         => __( 'Edit Type of Recipes' ),
		'update_item'       => __( 'Update Type of Recipes' ),
		'add_new_item'      => __( 'Add New Type of Recipes' ),
		'new_item_name'     => __( 'New Type of Recipes Name' ),
		'menu_name'         => __( 'Type of Recipes' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'recipes' ),
	);

	register_taxonomy( 'recipe_type', array( 'recipes' ), $args );

	// Add new taxonomy, make it hierarchical (like categories)
	$labels = array(
		'name'              => _x( 'In The Press Year', 'taxonomy general name' ),
		'singular_name'     => _x( 'In The Press Year', 'taxonomy singular name' ),
		'search_items'      => __( 'Search In The Press Years' ),
		'all_items'         => __( 'All In The Press Years' ),
		'parent_item'       => __( 'Parent In The Press Years' ),
		'parent_item_colon' => __( 'Parent In The Press Years:' ),
		'edit_item'         => __( 'Edit In The Press Years' ),
		'update_item'       => __( 'Update In The Press Years' ),
		'add_new_item'      => __( 'Add New In The Press Years' ),
		'new_item_name'     => __( 'New In The Press Year' ),
		'menu_name'         => __( 'In The Press Year' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'in_the_press' ),
	);

	register_taxonomy( 'press_year', array( 'in_the_press' ), $args );

}
add_action( 'init', 'bli_custom_taxonomies', 0 );

/*_____________________________________________________

-----Register Custom Post Type for Home Page Slider-----
_______________________________________________________*/

function bli_homeSlider() {
	$labels = array(
		'name'              => _x( 'Slides', 'post type general name' ),
		'singular_name'     => _x( 'Slide', 'post type singular name' ),
		'add_new'           => __( 'Add New Slide' ),
		'add_new_item'      => __( 'Add New Slide' ),
		'edit_item'         => __( 'Edit Slide' ),
		'new_item'          => __( 'New Slide' ),
		'view_item'         => __( 'View Slide' ),
		'search_items'      => __( 'Search Slides' ),
		'not_found'         => __( 'Slide' ),
		'not_found_in_trash'=> __( 'Slide' ),
		'parent_item_colon' => __( 'Slide' ),
		'menu_name'         => __( 'Slides' )
	);
	
	$taxonomies = array();
	
	$supports = array('title','thumbnail');
	
	$post_type_args = array(
		'labels'            => $labels,
		'singular_label'    => __('Slide'),
		'public'            => true,
		'show_ui'           => true,
		'publicly_queryable'=> true,
		'query_var'         => true,
		'capability_type'   => 'post',
		'has_archive'       => false,
		'hierarchical'      => false,
		'rewrite'           => array('slug' => 'slides', 'with_front' => false ),
		'supports'          => $supports,
		'menu_position'     => 10,
		'menu_icon'         => 'dashicons-images-alt2',
		'taxonomies'        => $taxonomies
	 );
	 register_post_type('slides',$post_type_args);
}
add_action('init', 'bli_homeSlider');

/*_____________________________________________________

--- Register Custom Post Type for Home Page Sponsors---
_______________________________________________________*/

function bli_sponsors() {

	$labels = array(
		'name'                => _x( 'Sponsors', 'Post Type General Name', 'understrap' ),
		'singular_name'       => _x( 'Sponsor', 'Post Type Singular Name', 'understrap' ),
		'menu_name'           => __( 'Sponsors', 'understrap' ),
		'name_admin_bar'      => __( 'Sponsor', 'understrap' ),
		'parent_item_colon'   => __( 'Parent Item:', 'understrap' ),
		'all_items'           => __( 'All Sponsors', 'understrap' ),
		'add_new_item'        => __( 'Add New Sponsor', 'understrap' ),
		'add_new'             => __( 'Add New', 'understrap' ),
		'new_item'            => __( 'New Sponsor', 'understrap' ),
		'edit_item'           => __( 'Edit Sponsor', 'understrap' ),
		'update_item'         => __( 'Update Sponsor', 'understrap' ),
		'view_item'           => __( 'View Sponsor', 'understrap' ),
		'search_items'        => __( 'Search Sponsors', 'understrap' ),
		'not_found'           => __( 'Not found', 'understrap' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'understrap' ),
	);
	$args = array(
		'label'               => __( 'sponsor', 'understrap' ),
		'description'         => __( 'Home Page Sponsors Section', 'understrap' ),
		'labels'              => $labels,
		'supports'            => array( 'custom-fields', ),
		'taxonomies'          => array(),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 10,
		'menu_icon'           => 'dashicons-shield',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'sponsor', $args );

}

// Hook into the 'init' action
add_action( 'init', 'bli_sponsors', 0 );
