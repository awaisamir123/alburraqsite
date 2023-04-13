<?php
/**
 * WooCommerce functions
 *
 * @package WordPress
 * @subpackage Quezal
 * @since Quezal 2.0.0
 */
?>
<?php
/**
 * Declare WooCommerce support 
 *
 */
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
	add_theme_support( 'woocommerce' );
}

/**
 * Disable WooCommerce styles
 *
 */
 
add_filter( 'woocommerce_enqueue_styles', 'tcsn_dequeue_styles' );
function tcsn_dequeue_styles( $enqueue_styles ) {
unset( $enqueue_styles['woocommerce-general'] );	// Remove the gloss
return $enqueue_styles;
}

/**
 * Remove WooCommerce Generator tag, styles, and scripts here
 *
 */
add_action( 'wp_enqueue_scripts', 'child_manage_woocommerce_styles', 99 );
function child_manage_woocommerce_styles() {
	
	// Remove WooCommerce Generator tag in <head>
	remove_action( 'wp_head', array( $GLOBALS['woocommerce'], 'generator' ) );		
}

/**
 * Remove page title from content section as custom page title is set.
 *
 */
add_filter('woocommerce_show_page_title', 'tcsn_woo_page_title_remove');
if(!function_exists('tcsn_woo_page_title_remove')){
	function tcsn_woo_page_title_remove(){
		return function_exists('is_shop') && is_shop() ? false : true;
	}
}

/**
 * Products per page for the shop
 *
 */
add_filter( 'loop_shop_per_page', create_function( '$cols', 'return 12;' ), 20 );

/**
 *  Change number or products per row 
 *
 */
 add_filter( 'loop_shop_columns', 'tcsn_loop_shop_columns');

if (!function_exists('tcsn_loop_shop_columns')) {
	function tcsn_loop_shop_columns() {
		global $tcsn_option;
		$columns = $tcsn_option['tcsn_woocommerce_shop_columns'];
		return $columns;
	}
}

/**
 * Change number of related products output
 *
 */
function woo_related_products_limit() {
global $tcsn_option;
global $product;
$args['posts_per_page'] = $tcsn_option['tcsn_woocommerce_related_products'];
return $args;
}
add_filter( 'woocommerce_output_related_products_args', 'tcsn_related_products_args' );
function tcsn_related_products_args( $args ) {
global $tcsn_option;
$args['posts_per_page'] = $tcsn_option['tcsn_woocommerce_related_products']; // number of related products
$args['columns'] = $tcsn_option['tcsn_woocommerce_related_products_column']; // columns number
return $args;
}

/**
 * Change number of upsells output
 *
 */
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15 );
add_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_upsells', 15 );
 
if ( ! function_exists( 'woocommerce_output_upsells' ) ) {
function woocommerce_output_upsells() {
woocommerce_upsell_display( 3,3 ); // Display 3 products in rows of 3
}
}

/**
 * Replace read more buttons for out of stock items with soldeout badge
 *
 */
if (!function_exists('woocommerce_template_loop_add_to_cart')) {
function woocommerce_template_loop_add_to_cart() {
global $product;
if (!$product->is_in_stock()) {
    //echo '<a href="'.get_permalink().'" rel="nofollow" class="outstock_button">Out of Stock</a>';
	echo '<span class="out-of-stock">Out of Stock</span>';
}
else
{
    woocommerce_get_template('loop/add-to-cart.php');
}
}
}