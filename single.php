<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

<div class="content">
  <?php while ( have_posts() ) : the_post(); ?>
    <?php get_template_part( 'content' ); ?>
    <?php comments_template( '', true ); ?>
    <nav>
      <p class="left"><?php previous_posts_link('&larr; Previous Post'); ?></p>
      <p class="right"><?php next_posts_link('Next Post &rarr;'); ?></p>
    </nav>
  <?php endwhile; ?>
</div>
  
<?php get_sidebar(); ?>
<?php get_footer(); ?>