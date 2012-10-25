<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?><!DOCTYPE html>
<!DOCTYPE html>
<!-- Adapted from HTML5 Boilerplate conditional classes, added ie10 to condition -->
<!--[if lt IE 7]>      <html class="lt-ie10 lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]>         <html class="lt-ie10"> <![endif]-->
<!--[if gt IE 9]><!--> <html> <!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php wp_title(); ?></title>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
  <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<!-- Include Open Sans font by default-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<?php
  if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' );
  wp_head();
?>
</head>
<body <?php body_class(); ?>>
  <div class="top top-menu-wrap">
    <?php // Add a menu to enable the container class ?>
    <?php wp_nav_menu( array( 'theme_location' => 'top', 'menu_class' => 'top-menu wrap', 'container' => false )); ?>
  </div>

  <header class="head wrap">
    <hgroup>
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
        <h1 id="site-title"><?php bloginfo( 'name' ); ?></h1>
      </a>
      <h2 id="site-description"><?php bloginfo( 'description' ); ?></h2>
    </hgroup>
  </header>

  <div class="featured-wrap wrap">
    <div class="featured">
      <img src="http://flickholdr.com/980/400/lamborghini" alt="Placeholder image from flickholdr.com" />
      <img src="http://flickholdr.com/980/400/ferrari" alt="Placeholder image from flickholdr.com" />
    </div>
  </div>

  <nav class="nav wrap nav-menu-wrap">
    <?php // Add a menu to enable the container class ?>
    <?php wp_nav_menu( array( 'theme_location' => 'nav', 'menu_class' => 'nav-menu', 'container' => false )); ?>
  </nav>

  <div class="body group wrap">