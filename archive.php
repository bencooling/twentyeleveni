<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

<div class="main">
  
  <?php if (have_posts()): ?>

  	<h2>
    <?php if ( is_day() ) : ?>
      <?php printf( __( '%s', 'twentyeleven' ), '<span>' . get_the_date() . '</span>' ); ?>
    <?php elseif ( is_month() ) : ?>
      <?php printf( __( '%s', 'twentyeleven' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'twentyeleven' ) ) . '</span>' ); ?>
    <?php elseif ( is_year() ) : ?>
      <?php printf( __( '%s', 'twentyeleven' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'twentyeleven' ) ) . '</span>' ); ?>
    <?php else : ?>
      <?php _e( 'Blog Archives', 'twentyeleven' ); ?>
    <?php endif; ?>
  	</h2>
    <div class="articles">
  	<?php while ( have_posts() ) : the_post(); ?>
  	  <?php get_template_part( 'content', 'listing' ); ?>
  	<?php endwhile; ?>
  	<?php twentyeleven_content_nav( 'nav-below' ); ?>

  <?php else : ?>
    <?php get_template_part( 'content', 'notfound' ); ?>
  <?php endif; ?>
  </div>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>