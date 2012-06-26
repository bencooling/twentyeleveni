<?php
/*
Template Name: Logged-In Users Page
See: http://www.rlmseo.com/blog/require-login-for-wordpress-pages/
*/

get_header(); ?>
<?php if(is_user_logged_in()):?>
  <?php if (have_posts()) while (have_posts()) : the_post(); ?>
    <?php the_title(); ?>
    <?php the_content(); ?>
    <!-- do stuff ... -->
  <?php endwhile; ?>
<?php else:
wp_die('Sorry, you must first <a href="/wp-login.php">log in</a> to view this page. You can <a href="/wp-login.php?action=register">register free here</a>.');
endif;?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
