<?php
/**
* The template for displaying 404 pages (Not Found).
*
* @package WordPress
* @subpackage Twenty_Eleven
* @since Twenty Eleven 1.0
*/

get_header(); ?>

<div id="main">

  <?php if (have_posts()) : ?>  <?php while (have_posts()) : the_post(); ?>   
    <h1><?php the_title(); ?></h1>
    <p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'twentyeleven' ); ?></p>
    <?php get_search_form(); ?>
    <?php endwhile; ?>
  <?php endif; ?>

</div>
  
<?php get_sidebar(); ?>
<?php get_footer(); ?>