<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

<div class="main">
  
  <?php if ( have_posts() ) : ?>
  
    <h2><?php echo single_cat_title( '', false ); ?></h2>
    <?php // TODO: Optomise code
    $category_description = category_description();
    if ( ! empty( $category_description ) )
      echo apply_filters( 'category_archive_meta', '<div class="category-archive-meta">' . $category_description . '</div>' );
    ?>
    <div class="articles">
    <?php while ( have_posts() ) : the_post(); ?>
      <?php get_template_part( 'content', 'listing' ); ?>
    <?php endwhile; ?>
    <?php twentyeleven_content_nav( 'nav-below' ); ?>
  <?php else : ?>
    <div class="articles">
    <?php get_template_part( 'content', 'notfound' ); ?>
  <?php endif; ?>
</div>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
