<?php

/**
 * - override twentyeleven action and filter hooks
 * - register two nav_menus: primary and footer.
 * - register one sidebar: right-sidebar
 * - Add body class
 * - Add script support
 */

// override twentyeleven action and filter hooks
add_action( 'after_setup_theme', 'tweli_child_theme_setup', 11 );
function tweli_child_theme_setup() {
  // remove unneccessary theme customisation optionns
  remove_action( 'admin_menu', 'twentyeleven_theme_options_add_page' );
  remove_custom_image_header();
  remove_custom_background();
  remove_action( 'customize_register', 'twentyeleven_customize_register' );
  remove_action( 'widgets_init', 'twentyeleven_widgets_init' ); // Remove
  remove_theme_support( 'post-formats'); // Turn off post formats
  
  // remove sidebar & ephemera widget
  remove_action( 'widgets_init', 'twentyeleven_widgets_init' );
}

// prevent wordpress from outputting meta tag version info
remove_action('wp_header', 'wp_generator');

// register two nav_menus: primary and footer
register_nav_menus(array('primary' => 'Primary','footer' => 'Footer'));

// register single sidebar: sidebar
register_sidebar(array(
  'name' => __( 'Right Hand Sidebar' ),
  'id' => 'right-sidebar',
  'description' => __( 'Widgets in this area will be shown on the right-hand side.' ),
  'before_title' => '<h6>',
  'after_title' => '</h6>'
));

// add the page title as a body class
add_filter( 'body_class', 'tweli_body_class' );
function tweli_body_class( $classes ){
  if(is_singular()){
    global $post;
    array_push( $classes, $post->post_name );
  }
  return $classes;
}

// tweli scripts and styles
add_action('wp_enqueue_scripts', 'tweli_enqueue_scripts');
function tweli_enqueue_scripts() {  wp_enqueue_script('jquery');

  // reveal
  wp_enqueue_script('reveal', get_stylesheet_directory_uri() . '/js/reveal/jquery.reveal.js', array('jquery'));
  wp_enqueue_style('reveal', get_stylesheet_directory_uri() . '/js/reveal/reveal.css');

  // thickbox
  wp_enqueue_style('thickbox');
  wp_enqueue_script('thickbox');
  
  // slimbox
  wp_enqueue_script('slimbox2', get_stylesheet_directory_uri() . '/js/slimbox2/script.js', array('jquery'));
  wp_enqueue_style('slimbox2', get_stylesheet_directory_uri() . '/js/slimbox2/style.css');
  
  // orbit
  if (is_page_template('home.php') || is_page_template('gallery.php')){  // page template specific
    wp_enqueue_style( 'orbit-css', get_stylesheet_directory_uri() . '/orbit/orbit-1.2.3.css' );
    wp_enqueue_script( 'orbit-js', get_stylesheet_directory_uri() . '/orbit/jquery.orbit-1.2.3.min.js', 'jquery');
  }

}