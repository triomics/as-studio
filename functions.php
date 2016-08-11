<?php
/**
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 * @package WordPress
 * @subpackage AS
 * @since AS 1.0
 */
add_action( 'after_setup_theme', 'as_setup' );
add_action('wp_enqueue_scripts', 'as_styles'); 
add_action('wp_enqueue_scripts', 'as_scripts');


remove_action('wp_head', 'wp_generator');

if(!function_exists("as_setup")){
function as_setup() {

	add_theme_support( 'title-tag' );

	add_theme_support( 'custom-logo', array(
		'height'      => 240,
		'width'       => 240,
		'flex-height' => true,
	) );

	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 1200, 9999 );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => __( 'Left Menu', 'as' ),
		'mobile'  => __( 'Mobile Menu', 'as' ),
		'footer'  => __( 'Mobile Menu', 'as' ),
	) );

	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	add_theme_support( 'customize-selective-refresh-widgets' );
}

}

if(!function_exists("as_scripts")){
    function as_scripts() {

    	wp_enqueue_script('jquery');
    	
    	$js_dir   = get_template_directory_uri() . "/assets/js/";

    	// If you want to add your scripts, you need to add value for $js_files, exapmle:
		// "bootstrap.min", "custom_script"
		
		$js_files = array("app", "bootstrap", "bootstrap.min");

    	
    	foreach($js_files as $file){
    		$label = str_replace(".", "", $file);
    		
    		wp_register_script($label, $js_dir . $file . '.js', array('jquery'), '1.0.0', true);
    		wp_enqueue_script($label);
    	}
    }
}


if(!function_exists("as_styles")){
    function as_styles() {
        if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {

    		$css_dir   = get_template_directory_uri() . "/assets/css/";		

			// If you want to add your scripts, you need to add value for $css_files, exapmle:
			// "app", "custom_style"

    		$css_files = array("app");
    		

    		foreach($css_files as $file){		
    			$label = str_replace(".", "", $file);
    		
    			wp_register_style($label, $css_dir . $file . '.css', array(), '1.1', 'all');
    			wp_enqueue_style($label);
    		}

        }
    }
}


// If Dynamic Sidebar Exists

function as_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'twentysixteen' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'twentysixteen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'as_widgets_init' );