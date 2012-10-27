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
		<?php twentyeleven_content_nav( 'nav-above' ); ?>

		<?php
		// If a user has filled out their description, show a bio on their entries.
		if ( get_the_author_meta( 'description' ) ) : ?>
		<div id="author-info">
			<div id="author-avatar">
				<?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'twentyeleven_author_bio_avatar_size', 60 ) ); ?>
			</div><!-- #author-avatar -->
			<div id="author-description">
				<h2><?php printf( __( 'About %s', 'twentyeleven' ), get_the_author() ); ?></h2>
				<?php the_author_meta( 'description' ); ?>
			</div><!-- #author-description	-->
		</div><!-- #author-info -->
		<?php endif; ?>
    <div class="articles">
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