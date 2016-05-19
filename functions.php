<?php
if ( ! function_exists( 'kuudesign_setup' ) ) :
function kuudesign_setup() {

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );
	//set_post_thumbnail_size( 825, 510, true );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu',      'kuudesign' ),
		'social'  => __( 'Social Links Menu', 'kuudesign' ),
		'main-nav-quick-links'  => __( 'Main menu quick links', 'kuudesign' )
	) );

	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	add_theme_support( 'custom-logo', array(
		'height'      => 248,
		'width'       => 248,
		'flex-height' => true,
	) );

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	//add_editor_style( array( 'css/editor-style.css' );
}
endif; // kuudesign_setup	
add_action( 'after_setup_theme', 'kuudesign_setup' );

function kuudesign_scripts() {
	//Css
	wp_enqueue_style( 'kuudesign-style', get_template_directory_uri() . '/_/css/styles.css', null, '1.0.0', 'screen'  );
	wp_enqueue_style( 'select-css', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.3/css/bootstrap-select.min.css', array('jquery') );
	
	//Scripts
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	wp_enqueue_script( 'wow-js', 'https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js', false, '1.1.2', true );
	wp_enqueue_script( 'bootstrap-select', 'http://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.js', array('jquery'), '1.6.3', true );
	wp_enqueue_script( 'slim-scroll', 'https://cdnjs.cloudflare.com/ajax/libs/jQuery-slimScroll/1.3.6/jquery.slimscroll.min.js', array('jquery'), '1.3.6', true );
	wp_enqueue_script( 'kuudesign-script', get_template_directory_uri() . '/_/js/functions.js', array( 'jquery' ), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'kuudesign_scripts' );

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page();
	
	acf_add_options_sub_page('Global');
	acf_add_options_sub_page('Home page');
	
}

/*
if( function_exists('acf_add_options_page') ) {
 	
 	// add parent
	$parent = acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title' 	=> 'Theme Settings',
		'redirect' 		=> false
	));
	
	
	// add sub page
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Social Settings',
		'menu_title' 	=> 'Social',
		'parent_slug' 	=> $parent['menu_slug'],
	));
	
}
*/
	
?>