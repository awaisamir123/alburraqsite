<?php
/**
 * The template for single product content.
 *
 * @package WordPress
 * @subpackage Quezal
 * @since Quezal 2.0.0
 */
?>
<?php global $tcsn_option; ?>
<?php if ( $tcsn_option['tcsn_product_layout'] == 'tcsn-product-full-width' ) : ?>

<div class="col-md-12 col-sm-12">
  <?php  if(is_woocommerce_activated()) { woocommerce_content(); } ?>
</div>
<?php elseif ( $tcsn_option['tcsn_product_layout'] == 'tcsn-product-with-sidebar' ) : ?>
<?php if ( $tcsn_option['tcsn_product_sidebar'] == 'tcsn-product-sidebar-left' ) { ?>
<?php get_sidebar(); ?>
<?php } ?>
<div class="col-md-9 col-sm-9">
  <?php  if(is_woocommerce_activated()) { woocommerce_content(); } ?>
</div>
<?php if ( $tcsn_option['tcsn_product_sidebar'] == 'tcsn-product-sidebar-right' ) { ?>
<?php get_sidebar(); ?>
<?php } ?>
<?php else : ?>
<div class="col-md-9 col-sm-9">
  <?php  if(is_woocommerce_activated()) { woocommerce_content(); } ?>
</div>
<?php get_sidebar(); ?>
<?php endif ?>