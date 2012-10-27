<?php
/**
* The template for displaying 404 pages (Not Found).
*
* @package WordPress
* @subpackage Twenty_Eleven
* @since Twenty Eleven 1.0
*/

get_header(); ?>

<div class="main">
  <h2><?php _e( 'Nothing Found', 'twentyeleven' ); ?></h2>
  <?php get_template_part( 'content', 'notfound' ); ?>
</div>
  
<?php get_sidebar(); ?>
<?php get_footer(); ?>