<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

<div class="main">

  <h2>Search Results for: <span><?php echo get_search_query(); ?></span></h2>
  <div class="articles">
	<?php if ( have_posts() ) : ?>
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