<?php

/**
 * Extending (Pulling apart?) twenty-eleven
 * 
 * Remove parent theme options, override nav_menus, remove post format 
 */

add_action( 'after_setup_theme', 'ask_twentyeleven_cleanup', 11 );
function ask_twentyeleven_cleanup() {
  
  // Remove support for theme options
  remove_action( 'admin_menu', 'twentyeleven_theme_options_add_page' );
  
}

// override nav menus
if ( function_exists( 'register_nav_menus' ) ) {
  register_nav_menus(
    array(
      'primary' => 'Primary',
      'footer' => 'Footer',
    )
  );
}

// remove post-formats... we not tumblr...
remove_theme_support( 'post-formats');

// Remove PHP code from header.php to functions.php
function my_print_title(){
  $title = wp_title('|', false, 'right');

  // Add the blog name.
  $title .= get_bloginfo('name');

  // Add the blog description for the home/front page.
  $site_description = get_bloginfo('description', 'display');
  if ($site_description && ( is_home() || is_front_page() ))
    $title .=  " | $site_description";

  // Add a page number if necessary:
  if ($paged >= 2 || $page >= 2)
    $title .= ' | ' . sprintf(__('Page %s', 'twentyeleven'), max($paged, $page));
  
  return $title;
}
add_action( 'print_title', 'my_print_title' );


/**
 * General Wordpress setup 
 * 
 * Disable admin bar for non admins (hmmmm), serve up some jQuery,  
 */

// Disable the Wordpress Admin Bar for all but admins. 
if (!current_user_can('administrator')){
  show_admin_bar(false);
}
show_admin_bar(false); // Comment out if you want admins to see bar

// Give me some jquery!
function my_enqueue_scripts() {
  wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts', 'my_enqueue_scripts'); // For use on the Front end (ie. Theme)

// Add the page title to the body class for page-specific styles, i.e for contact page body.contact
// @see http://www.wprecipes.com/wordpress-hack-automatically-add-post-name-to-the-body-class
function my_body_class( $classes ){
	if(is_singular()){
		global $post; array_push( $classes, $post->post_name );
	}
	return $classes;
}
add_filter( 'body_class', 'my_body_class' );

/**
 * Wordpress security
 * 
 * Remove revealing meta tags,   
 */

// Prevent Wordpress from outputting meta tag version info
remove_action('wp_header', 'wp_generator');