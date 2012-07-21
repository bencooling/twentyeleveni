<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

<div class="main">
  <div class="inner">
    <nav>
      <p class="left"><?php previous_posts_link('&larr; Previous Post'); ?></p>
      <p class="right"><?php next_posts_link('Next Post &rarr;'); ?></p>
    </nav>

    <?php if (have_posts()) : ?>  <?php while (have_posts()) : the_post(); ?>   
      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>
      <?php comments_template( '', true ); ?>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
</div>
  
<?php get_sidebar(); ?>
<?php get_footer(); ?>