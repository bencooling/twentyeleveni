<?php
/**
 * The default template for displaying content
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('group'); ?>>
  <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
  <?php if($post->post_type==='post'): ?>
    <p class="article-date"><span class="icon-calendar"><?php the_date('Y-m-d'); ?></span></p>
  <?php endif; ?>
  <?php the_content('read more'); ?>
  <?php if($post->post_type==='post'): ?>
    <p class="article-meta">
      <span class="icon icon-user"><a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))) ?>"><?php the_author(); ?></a></span>
      <span class="icon icon-printer"><?php the_category(', '); ?></span>
      <?php if(has_tag()): ?><span class="icon icon-tag"><?php the_tags('',', ',''); ?></span><?php endif; ?>
      <span class="icon icon-comments"><?php comments_popup_link(get_comments_number( '0 comments', '1 comment', '% comments' )); ?></span>
      <?php // comments_popup_link( '<span class="leave-reply">' . __( 'Reply', 'twentyeleven' ) . '</span>', _x( '1', 'comments number', 'twentyeleven' ), _x( '%', 'comments number', 'twentyeleven' ) ); ?>
    </p>
  <?php endif; ?>
</article>