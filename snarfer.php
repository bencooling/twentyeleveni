<?php
/*
Template Name: Snarfer
*/

get_header(); ?>

  <?php if (have_posts()) while (have_posts()) : the_post(); ?>
    <?php the_title(); ?>
    <?php the_content(); ?>
    <!-- do stuff ... -->
  <?php endwhile; ?>


<?php get_sidebar(); ?>
<?php get_footer(); ?>