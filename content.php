<?php
/**
 * The default template for displaying content
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <a href="<?php the_permalink(); ?>"><h2 class="article-title"><?php the_title(); ?></h2></a>
  <div class="article-content"><?php the_content('read more'); ?></div>
  <?php echo '<pre>'; print_r($post); echo '</pre>'; ?>
  <div class="article-meta">
    <p>
      <span><?php comments_number( '0 comments', '1 comment', '% comments' ); ?></span>
      <span>Author: <?php the_author(); ?></span>
      <span><?php the_tags('Tags: ',',',''); ?></span>
      <span>Categories: <?php the_category(', '); ?></span>
      <span>Date: <?php the_date('Y-m-d'); ?></span>
    </p>
  </div>
</article>