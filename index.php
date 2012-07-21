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
  <div class="inner">
  <?php if ( have_posts() ) : ?>

    <?php if (have_posts()) : ?>  <?php while (have_posts()) : the_post(); ?>   
      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>
      <?php // get_template_part( 'content', get_post_format() ); // Theme supports post format ?>
      <?php endwhile; ?>
    <?php endif; ?>
  
  <?php else : ?>
 
    <h1><?php _e( 'No posts found', 'twentyeleven' ); ?></h1>
    <div class="entry-content">
      <p><?php _e( 'Sorry there are no results. Perhaps searching will help.', 'twentyeleven' ); ?></p>
      <?php get_search_form(); ?>
    </div>

  <?php endif; ?>
  </div>    
</div>
  
<?php get_sidebar(); ?>
<?php get_footer(); ?>