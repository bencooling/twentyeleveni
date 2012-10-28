<?php
/**
 * The template for displaying Author Archive pages.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

<div class="main">
	<?php if (have_posts()): the_post(); ?>

		<h2><?php printf( __( '%s', 'twentyeleven' ), '<span class="vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( "ID" ) ) ) . '" title="' . esc_attr( get_the_author() ) . '" rel="me">' . get_the_author() . '</a></span>' ); ?></h2>
		<?php rewind_posts(); ?>
		
    <div class="articles">
		
    <?php if ( get_the_author_meta( 'description' ) ) : ?>
      <article class="group">
        <?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'twentyeleven_author_bio_avatar_size', 150 ) ); ?>
        <div class="article-content">
				<p><?php the_author_meta( 'description' ); ?></p>
      </article>
		<?php endif; ?>

		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', 'listing' ); ?>
		<?php endwhile; ?>

		<?php twentyeleven_content_nav( 'nav-below' ); ?>

	<?php else: ?>
  <div class="articles">
    <?php get_template_part( 'content', 'notfound' ); ?>
	<?php endif; ?>

  </div>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>