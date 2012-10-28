<?php
/**
 * The default template for displaying listed content
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
$classname = (has_post_thumbnail()) ? 'thumbnail' : '';
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('group'); ?>>
  <?php // TODO: Full width for post without post thumbnail ?>
  <?php if(has_post_thumbnail()) the_post_thumbnail(); ?>
  <div class="article-content <?php echo $classname; ?>">
    <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
    <?php if($post->post_type==='post'): ?>
      <p class="article-date"><span class="icon-calendar"><?php the_date('Y-m-d'); ?></span></p>
    <?php endif; ?>
    <?php // the_content('read more'); ?>
    <?php the_excerpt(); ?>
  </div>
</article>