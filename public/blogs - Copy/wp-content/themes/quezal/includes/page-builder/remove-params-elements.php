<?php

/**
 * Remove params and elements from VC
 *
 * @package WordPress
 * @subpackage Quezal
 * @since Quezal 1.0
 */

/**
 * Remove elements from VC
 * Following elements from VC are not required for theme hence not styled and removed. You can enable them easily if necessary.
 *
 */
if ( function_exists('vc_remove_element') ) {
	add_action( 'init', 'tcsn_vc_remove_element' );
	if ( !function_exists( 'tcsn_vc_remove_element' )) {	
		function tcsn_vc_remove_element() {		
		    // Remove - vc_remove_element() - for particular element if need to enable that element of visual composer
			vc_remove_element("vc_btn"); // Remove this line to enable - button 
			vc_remove_element("vc_cta"); // Remove this line to enable - CTA button
			vc_remove_element("vc_button"); // Remove this line to enable - button 
			vc_remove_element("vc_cta_button"); // Remove this line to enable - CTA button 
			vc_remove_element("vc_button2"); // Remove this line to enable - button2 
			vc_remove_element("vc_cta_button2"); // Remove this line to enable - CTA button2  
			vc_remove_element("vc_gallery"); // Remove this line to enable - gallery 
			vc_remove_element("vc_images_carousel"); // Remove this line to enable - image carousel 
			vc_remove_element("vc_carousel"); // Remove this line to enable - carousel 
			vc_remove_element("vc_posts_grid"); // Remove this line to enable - post grid 
			vc_remove_element("vc_posts_slider"); // Remove this line to enable - post slider 
			//vc_remove_element("vc_basic_grid"); // Remove this line to enable - post grid 
			vc_remove_element("vc_media_grid"); // Remove this line to enable - media grid
			vc_remove_element("vc_masonry_grid"); // Remove this line to enable - post masonry grid
			vc_remove_element("vc_masonry_media_grid"); // Remove this line to enable - masonry media grid
		} 	
	} 
} 