<?php
/**
 * The Social Share
 *
 * @package WordPress
 * @subpackage Quezal
 * @since Quezal 2.0
 */
?>
<?php

// Post Social share hook
function tcsn_social_share_hook() {
	do_action( 'tcsn_social_share_hook' );
}
add_action( 'tcsn_social_share_hook', 'tcsn_default_social_share_hook' );

if( ! function_exists( 'tcsn_default_social_share_hook' ) ) {
	function tcsn_default_social_share_hook() {
		tcsn_social_share();
	}
}

// Social share
if ( ! function_exists('tcsn_social_share') ) {
	function tcsn_social_share() {
		global $tcsn_option; 
		if( $tcsn_option['tcsn_post_social_share'] == 1 ) {
?>

<div class="social-share-box clearfix">
  <h5 class="social-share-title"> <?php echo __('Share This Post', 'tcsn_theme'); ?> </h5>
  <ul class="list-social-share">
    <?php if( $tcsn_option['tcsn_show_post_social_share']['1'] == 1 ) { ?>
    <li> <a href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>&amp;t=<?php the_title(); ?>" class="share-facebook"> <i class="icon-facebook7"></i> </a> </li>
    <?php } ?>
    <?php if( $tcsn_option['tcsn_show_post_social_share']['2'] == 1 ) { ?>
    <li> <a href="http://twitter.com/home?status=<?php the_title(); ?> <?php the_permalink(); ?>" class="share-twitter"> <i class="icon-twitter2"></i> </a> </li>
    <?php } ?>
    <?php if( $tcsn_option['tcsn_show_post_social_share']['3'] == 1 ) { ?>
    <li> <a href="http://google.com/bookmarks/mark?op=edit&amp;bkmk=<?php the_permalink(); ?>&amp;title=<?php the_title(); ?>" class="share-googleplus"> <i class="icon-googleplus"></i> </a> </li>
    <?php } ?>
    <?php if( $tcsn_option['tcsn_show_post_social_share']['4'] == 1 ) { ?>
    <li> <a href="http://linkedin.com/shareArticle?url=<?php the_permalink(); ?>&amp;title=<?php the_title(); ?>" class="share-linkedin"> <i class="icon-linkedin3"></i> </a> </li>
    <?php } ?>
    <?php if( $tcsn_option['tcsn_show_post_social_share']['5'] == 1 ) { ?>
    <?php global $post; ?>
    <?php $pinterestimage = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>
    <li><a href="http://pinterest.com/pin/create/button/?url=<?php echo urlencode(get_permalink()); ?>&amp;description=<?php the_title(); ?>&amp;media=<?php echo urlencode($pinterestimage[0]); ?>" class="share-pinterest"><i class="icon-pinterest3"></i> </a> </li>
    <?php } ?>
    <?php if( $tcsn_option['tcsn_show_post_social_share']['6'] == 1 ) { ?>
    <li> <a href="mailto:?subject=<?php the_title(); ?>&amp;body=<?php the_permalink(); ?>" class="share-mail"> <i class="icon-mail7"></i> </a> </li>
    <?php } ?>
  </ul>
</div>
<?php	}
	} 	
} 

// Product Social share hook
function tcsn_product_social_share_hook() {
	do_action( 'tcsn_product_social_share_hook' );
}
add_action( 'tcsn_product_social_share_hook', 'tcsn_default_product_social_share_hook' );

if( ! function_exists( 'tcsn_default_product_social_share_hook' ) ) {
	function tcsn_default_product_social_share_hook() {
		tcsn_product_social_share();
	}
}

// Social share
if ( ! function_exists('tcsn_product_social_share') ) {
	function tcsn_product_social_share() {
		global $tcsn_option; 
		if( $tcsn_option['tcsn_product_social_share'] == 1 ) {
?>
<div class="social-share-box clearfix">
  <h5 class="social-share-title"> <?php echo __('Share', 'tcsn_theme'); ?> </h5>
  <ul class="list-social-share">
    <?php if( $tcsn_option['tcsn_show_product_social_share']['1'] == 1 ) { ?>
    <li> <a href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>&amp;t=<?php the_title(); ?>" class="share-facebook"> <i class="icon-facebook7"></i> </a> </li>
    <?php } ?>
    <?php if( $tcsn_option['tcsn_show_product_social_share']['2'] == 1 ) { ?>
    <li> <a href="http://twitter.com/home?status=<?php the_title(); ?> <?php the_permalink(); ?>" class="share-twitter"> <i class="icon-twitter2"></i> </a> </li>
    <?php } ?>
    <?php if( $tcsn_option['tcsn_show_product_social_share']['3'] == 1 ) { ?>
    <li> <a href="http://google.com/bookmarks/mark?op=edit&amp;bkmk=<?php the_permalink(); ?>&amp;title=<?php the_title(); ?>" class="share-googleplus"> <i class="icon-googleplus"></i> </a> </li>
    <?php } ?>
    <?php if( $tcsn_option['tcsn_show_product_social_share']['4'] == 1 ) { ?>
    <li> <a href="http://linkedin.com/shareArticle?url=<?php the_permalink(); ?>&amp;title=<?php the_title(); ?>" class="share-linkedin"> <i class="icon-linkedin3"></i> </a> </li>
    <?php } ?>
    <?php if( $tcsn_option['tcsn_show_product_social_share']['5'] == 1 ) { ?>
    <?php global $post; ?>
    <?php $pinterestimage = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>
    <li><a href="http://pinterest.com/pin/create/button/?url=<?php echo urlencode(get_permalink()); ?>&amp;description=<?php the_title(); ?>&amp;media=<?php echo urlencode($pinterestimage[0]); ?>" class="share-pinterest"><i class="icon-pinterest3"></i> </a> </li>
    <?php } ?>
    <?php if( $tcsn_option['tcsn_show_product_social_share']['6'] == 1 ) { ?>
    <li> <a href="mailto:?subject=<?php the_title(); ?>&amp;body=<?php the_permalink(); ?>" class="share-mail"> <i class="icon-mail7"></i> </a> </li>
    <?php } ?>
  </ul>
</div>
<?php	}
	} 	
} 




