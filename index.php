<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 */

get_header(); ?>

<div class="main">
  <h2>Welcome</h2>
  <div class="articles">
  <?php if (have_posts()) while (have_posts()): the_post(); ?>
    <?php get_template_part( 'content', 'listing' ); ?>
  <?php endwhile; ?>
  </div>

  <?php twentyeleven_content_nav( 'nav-below' ); ?>
  
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>