<?php
/**
 * The template for displaying posts in the Image post format.
 *
 * @package WordPress
 * @subpackage Quezal
 * @since Quezal 1.0
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <?php get_template_part( '/includes/templates/post-formats/entry', 'thumb' ); ?>
  <?php get_template_part( '/includes/templates/post-formats/entry', 'title' ); ?>
  <?php if ( ! is_custom_post_type() && ! is_page() ) : ?>
  <div class="post-meta clearfix"> <span class="post-format-icon"><a href="<?php echo get_post_format_link('image'); ?>"><i class="icon-photo"></i></a></span>
    <div class="post-meta-content">
      <?php tcsn_post_meta(); ?>
      <?php if ( comments_open() && ! is_single() && ! is_page() && ! post_password_required() ) : ?>
      <span class="leave-comment-link">
      <?php comments_popup_link(  '' . __( '0 Replies', 'tcsn_theme' ), '' . __( '1 Replies', 'tcsn_theme' ), '' . __( '% Replies', 'tcsn_theme' ) ); ?>
      </span>
      <?php endif ?>
    </div>
  </div>
  <?php endif; ?>
  <?php if ( ! is_single() && ! is_page() ) : ?>
  <div class="post-summary">
    <?php the_excerpt(); ?>
  </div>
  <a href="<?php the_permalink(); ?>" class="mybtn">
  <?php  _e('Read more', 'tcsn_theme'); ?>
  </a>
  <?php else : ?>
  <div class="post-content entry-content">
    <?php the_content(); ?>
  </div>
  <?php endif; ?>
  <?php if ( is_single() ) { ?>
  <div class="post-footer-meta">
    <?php tcsn_post_meta_second(); ?>
  </div>
  <?php } ?>
  <div class="post-author">
    <?php if ( is_single() && get_the_author_meta( 'description' ) && is_multi_author() ) : ?>
    <?php get_template_part( '/includes/templates/post-formats/author-bio' ); ?>
    <?php endif; ?>
  </div>
  <?php if(!($wp_query->post_count == $wp_query->current_post+1)) : ?>
  <div class="post-footer"></div>
  <?php endif; ?>
</article>
<!-- #post -->