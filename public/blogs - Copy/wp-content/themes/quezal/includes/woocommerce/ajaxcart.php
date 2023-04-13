<?php
/**
 * The Ajax Cart
 *
 * @package WordPress
 * @subpackage Quezal
 * @since Quezal 2.0.0
 */
?>
<?php if ( is_woocommerce_activated() ) { ?>
<div class="shopping-cart-wrapper hidden-xs">
  <div class="shopping-cart-icon"> <a href="#"><i class="icon-cart2"></i></a>
    <div class="shopping-cart-dropdown">
      <div class="shopping-cart-dropdown-inner clearfix">
        <?php global $woocommerce; ?>
        <div class="cart-contents"> <span class="shopping-cart-items"><?php echo sprintf(_n('<span class="cart-item">Item: </span> %d', '<span class="cart-item">Items: </span>%d ', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);?></span> <span class="shopping-cart-total">
          <?php _e( 'Total: ', 'tcsn_theme' ); ?>
          </span><?php echo $woocommerce->cart->get_cart_total(); ?></div>
        <a class="mybtn cart-btn" href="<?php echo $woocommerce->cart->get_cart_url(); ?>" title="<?php _e('View your shopping cart', 'woothemes'); ?>"> View Cart</a> </div>
    </div>
  </div>
</div>
<?php } ?>