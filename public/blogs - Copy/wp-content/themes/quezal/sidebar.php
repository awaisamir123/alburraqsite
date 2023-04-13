<?php
/**
 * The sidebar containing the widget area, displays on posts and pages.
 *
 * @package WordPress
 * @subpackage Quezal
 * @since Quezal 1.0
 */
?>
<div class="col-md-3 col-sm-3">
  <div class="sidebar">
    <?php if( is_page() ){
		dynamic_sidebar('widgets-page'); 
	} elseif(is_woocommerce_activated() && is_woocommerce() ) {
		if ( dynamic_sidebar('widgets-woocommerce') );
	} else {
		if ( dynamic_sidebar('widgets-blog') );
	}		
	?>
  </div>
</div>