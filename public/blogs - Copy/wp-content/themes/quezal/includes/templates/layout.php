<?php
/**
 * Layouts
 *
 * @package WordPress
 * @subpackage Quezal
 * @since Quezal 2.0
 */
?>
<?php
if ( ! function_exists( 'tcsn_get_style_class' ) ) {
	function tcsn_get_style_class() {
		// Vars
		$class   = 'pad-top-none pad-bottom-none';
		$default = 'clearfix';
		// No Padding to top and bottom
		if ( is_page() || is_woocommerce_activated() && !is_cart() && !is_checkout() && !is_woocommerce() ) {
			$class;
		// Add Padding to top and bottom
		} else { 
			$class = $default;
		}
		return $class;
	} 
} 