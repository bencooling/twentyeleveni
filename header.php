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
<!-- Include Open Sans font and Icon Font -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700,300italic|Open+Sans:300italic,400italic,700italic,800italic,400,800,700,300' rel='stylesheet' type='text/css'>
<link href='<?php echo get_bloginfo('stylesheet_directory'); ?>/icomoon/style.css' rel='stylesheet' type='text/css'>
<?php
  if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' );
  wp_head();
?>
</head>
<body <?php body_class(); ?>>
  <div class="top">
    <?php // Add a menu to enable the container class ?>
    <?php wp_nav_menu( array( 'theme_location' => 'top', 'menu_class' => 'top-menu wrap', 'container' => false )); ?>
  </div>

  <header class="head wrap">
    <hgroup>
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
        <h1><?php bloginfo( 'name' ); ?></h1>
      </a>
      <h5><?php bloginfo( 'description' ); ?></h5>
    </hgroup>
  </header>

  <?php if (is_home() || is_front_page()): ?>
  <div class="featured-wrap wrap">
    <div class="featured">
      <div class="content"><a href="http://www.flickr.com/photos/30700107@N02/5438025369/" title="Fingal Head by Dean Vuksanovic, on Flickr"><img src="http://farm5.staticflickr.com/4113/5438025369_81cd5ec11f_b.jpg" width="1024" height="683" alt="Fingal Head"></a></div>
      <div class="content"><a href="http://www.flickr.com/photos/30700107@N02/5419017565/" title="Currumbin Rocks Sunrise by Dean Vuksanovic, on Flickr"><img src="http://farm6.staticflickr.com/5257/5419017565_1dda787dcb_b.jpg" width="1024" height="683" alt="Currumbin Rocks Sunrise"></a></div>
      <div class="content"><a href="http://www.flickr.com/photos/30700107@N02/5767011188/" title="Miami Headland Sunrise May 2011 by Dean Vuksanovic, on Flickr"><img src="http://farm4.staticflickr.com/3219/5767011188_3318480951_b.jpg" width="1000" height="667" alt="Miami Headland Sunrise May 2011"></a></div>
    </div>
  </div>
  <?php endif; ?>

  <nav class="nav wrap nav-menu-wrap">
    <?php // Add a menu to enable the container class ?>
    <?php wp_nav_menu( array( 'theme_location' => 'nav', 'menu_class' => 'nav-menu', 'container' => false )); ?>
  </nav>

  <div class="body group wrap">