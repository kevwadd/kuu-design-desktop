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
		'portfolio' => __( 'Portfolio Links', 'kuudesign' ),
		'social'  => __( 'Social Links', 'kuudesign' ),
		'footer'  => __( 'Footer Links', 'kuudesign' )
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
	https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css
	wp_enqueue_style( 'bootstrap-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', null, '3.3.7', 'screen' );
	wp_enqueue_style( 'select-css', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.3/css/bootstrap-select.min.css', null, '1.7.3', 'screen' );
	wp_enqueue_style( 'kuudesign-style', get_template_directory_uri() . '/_/css/styles.css', null, '1.0.0', 'screen'  );
	
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

function responsive_imgs_shortcode() {
	global $post;
	$color = get_field('pg_col', $post->ID);
	$desktop_img = get_field('desktop_img', $post->ID);
	$tablet_img = get_field('tablet_img', $post->ID);
	$mobile_img = get_field('mobile_img', $post->ID);
	$html = '</div>';
	$html .= '</div>';
	$html .= '<section class="responsive-imgs bg-col-'.$color.'">';
	$html .= '<div class="responsive-imgs-bg"><div class="overlay-blk"></div></div>';
	$html .= '<div class="responsive-imgs-devices">';
	$html .= '<div class="container">';
	$html .= '<div class="wow fadeInUp img-desktop" data-wow-delay="0.2s"><div class="screen" style="background-image: url('.$desktop_img.')"></div></div>';
	$html .= '<div class="wow fadeInLeft img-tablet" data-wow-delay="0.4s"><div class="screen" style="background-image: url('.$tablet_img.')"></div></div>';
	$html .= '<div class="wow fadeInRight img-mobile" data-wow-delay="0.6s"><div class="screen" style="background-image: url('.$mobile_img.')"></div></div>';
	$html .= '</div>';
	$html .= '</div>';
	$html .= '</section>';
	$html .= '<div class="container">';
	$html .= '<div class="hentry lrg-txt">';
	
   return $html;
}

function mobile_imgs_shortcode() {
	global $post;
	$color = get_field('pg_col', $post->ID);
	$mobile_img_left = get_field('mobile_img_left', $post->ID);
	$mobile_img_mid = get_field('mobile_img_mid', $post->ID);
	$mobile_img_right = get_field('mobile_img_right', $post->ID);
	$html = '</div>';
	$html .= '</div>';
	$html .= '<section class="mobile-imgs bg-col-'.$color.'">';
	$html .= '<div class="mobile-imgs-bg"><div class="overlay-blk"></div></div>';
	$html .= '<div class="mobile-imgs-devices">';
	$html .= '<div class="container">';
	$html .= '<div class="wow fadeInLeft img-mobile img-mobile-left" data-wow-delay="0.4s"><div class="screen" style="background-image: url('.$mobile_img_left.')"></div></div>';
	$html .= '<div class="wow fadeInUp img-mobile img-mobile-mid" data-wow-delay="0.2s"><div class="screen" style="background-image: url('.$mobile_img_mid.')"></div></div>';
	$html .= '<div class="wow fadeInRight img-mobile img-mobile-right" data-wow-delay="0.6s"><div class="screen" style="background-image: url('.$mobile_img_right.')"></div></div>';
	$html .= '</div>';
	$html .= '</div>';
	$html .= '</section>';
	$html .= '<div class="container">';
	$html .= '<div class="hentry lrg-txt">';
	
   return $html;
}

function tablet_imgs_shortcode() {
	global $post;
	$color = get_field('pg_col', $post->ID);
	$tablet_img_landscape = get_field('tablet_img_landscape', $post->ID);
	$tablet_img_portrait = get_field('tablet_img_portrait', $post->ID);
	$html = '</div>';
	$html .= '</div>';
	$html .= '<section class="tablet-imgs bg-col-'.$color.'">';
	$html .= '<div class="tablet-imgs-bg"><div class="overlay-blk"></div></div>';
	$html .= '<div class="tablet-imgs-devices">';
	$html .= '<div class="container">';
	$html .= '<div class="wow fadeInLeft img-tablet img-tablet-port" data-wow-delay="0.6s"><div class="screen" style="background-image: url('.$tablet_img_portrait.')"></div></div>';
	$html .= '<div class="wow fadeInRight img-tablet img-tablet-land" data-wow-delay="0.4s"><div class="screen" style="background-image: url('.$tablet_img_landscape.')"></div></div>';
	$html .= '</div>';
	$html .= '</div>';
	$html .= '</section>';
	$html .= '<div class="container">';
	$html .= '<div class="hentry lrg-txt">';
	
   return $html;
}


function register_shortcodes(){
   add_shortcode('responsive-imgs', 'responsive_imgs_shortcode');
   add_shortcode('mobile-imgs', 'mobile_imgs_shortcode');
   add_shortcode('tablet-imgs', 'tablet_imgs_shortcode');
}

add_action( 'init', 'register_shortcodes');
	
?>