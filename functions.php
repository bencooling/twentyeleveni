<?php

/**
 * - override twentyeleven action and filter hooks
 * - register two nav_menus: primary and footer.
 * - register one sidebar: right-sidebar
 * - Add body class
 * - Add script support
 */

/*
 * overriding twentyeleven action and filter hooks
 */
add_action( 'after_setup_theme', 'tweli_child_theme_setup', 11 );
function tweli_child_theme_setup() {
  remove_theme_support('custom-header');
  remove_theme_support('custom-background');
  remove_action('admin_menu', 'twentyeleven_theme_options_add_page');
  remove_action('customize_register', 'twentyeleven_customize_register');
  unregister_nav_menu( 'primary' ); // Remove Primary menu namespace
  
  remove_action( 'widgets_init', 'twentyeleven_widgets_init' ); // Remove all twentyeleven widgets?
  // remove_theme_support( 'post-formats'); // Turn off post formats // Remove post formats?

  // remove sidebar & ephemera widget
  remove_action( 'widgets_init', 'twentyeleven_widgets_init' );

  // Remove automatic filter length, add custom
  remove_filter( 'excerpt_length', 'twentyeleven_excerpt_length' );
  add_filter('excerpt_length', 'tweli_excerpt_length');
  function tweli_excerpt_length(){
    return 26;
  }
 

}

// prevent wordpress from outputting meta tag version info
remove_action('wp_header', 'wp_generator');

// register three nav_menus: top, nav
register_nav_menus(array('top'=>'Top','nav'=>'Navigation'));

// register single sidebar: sidebar
register_sidebar(array(
  'name' => __( 'Right Sidebar' ),
  'id' => 'side',
  'description' => __( 'Widgets in this area will be shown on the side.' ),
  'before_title' => '<h6>',
  'after_title' => '</h6>',
  'before_widget' => '<aside id="%1$s" class="widget %2$s">',
  'after_widget' => '</aside>',
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
  // if (is_page_template('home.php') || is_page_template('gallery.php')){  // page template specific
  if (is_home() || is_front_page()){
    wp_enqueue_style( 'orbit-css', get_stylesheet_directory_uri() . '/js/orbit/orbit-1.2.3.css' );
    wp_enqueue_script( 'orbit-js', get_stylesheet_directory_uri() . '/js/orbit/jquery.orbit-1.2.3.min.js', 'jquery');
  }

}

/**
 * Add Home to Pages in Administration > Appearance > Menus
 */
add_filter( 'wp_page_menu_args', 'tweli_page_menu_args' );
function tweli_page_menu_args( $args ) {
  $args['show_home'] = true;
  return $args;
}

// Remove admin bar I never ever ever use it
add_filter('show_admin_bar', '__return_false');