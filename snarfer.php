<?php
/*
Template Name: Snarfer
*/

get_header(); ?>

<div class="content">
  <?php while ( have_posts() ) : the_post(); ?>
    <?php get_template_part( 'content' ); ?>
    <?php // comments_template( '', true ); ?>
  <?php endwhile; ?>
</div>

<?php   get_sidebar(); ?>
<?php get_footer(); ?>