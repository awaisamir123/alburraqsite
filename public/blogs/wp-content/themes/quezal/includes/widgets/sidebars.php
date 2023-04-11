<?php
/**
 * Registers widget areas.
 *
 * @package WordPress
 * @subpackage Quezal
 * @since Quezal 1.0
 *
 */
if ( ! function_exists('tcsn_widgets_init') ) {

// Register Sidebar
function tcsn_widgets_init()  {
	
	// Blog Widgets
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'tcsn_theme' ),
		'id'            => 'widgets-blog',
		'description'   => __( 'This area will be shown as a post sidebar. Widgets will be stacked in this column.', 'tcsn_theme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

	// Page Widgets
	register_sidebar( array(
		'name'          => __( 'Page Sidebar', 'tcsn_theme' ),
		'id'            => 'widgets-page',
		'description'   => __( 'This area will be shown as a page sidebar. Widgets will be stacked in this column.', 'tcsn_theme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	
	// Header Social Widget
	register_sidebar( array(
		'name'          => __( 'Topbar Social Icons Sidebar', 'tcsn_theme' ),
		'id'            => 'widget-social-network',
		'description'   => __( 'Widgets in this column will appear in topbar.', 'tcsn_theme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	
	// Woocommerce Widgets
	if(is_woocommerce_activated()) {
        register_sidebar(array(
            'name'          => __( 'Woocommerce Sidebar', 'tcsn_theme' ),
			'id'            => 'widgets-woocommerce',
			'description'   => __( 'This area will be shown as a WooCommerce sidebar for shop pages and product posts. Widgets will be stacked in this column.', 'tcsn_theme' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
        ));
    }
	
	global $tcsn_option;
	
	//Footer Widgets (columns) - Dynamic
	if(isset($tcsn_option['tcsn_columns_footer'])) {
	$tcsn_footer_columns = $tcsn_option['tcsn_columns_footer'];
	for ($i=1; $i<=$tcsn_footer_columns; $i++)
	  {
		  register_sidebar(array(
		  'name' 			=> 'Footer-column-'.$i,
		  'id' 				=> 'widgets-footer-'.$i,
		  'description'   	=> __( 'This area is a dynamically generated footer widget column. Widgets will be stacked in here.', 'tcsn_theme' ),
		  'before_widget'	=> '<div id="%1$s" class="widget %2$s">',
		  'after_widget'  	=> '</div>',
		  'before_title'  	=> '<h4 class="widget-title">',
		  'after_title'   	=> '</h4>',
		  ));
	  	}
	  } 

	//Slide Panel Widgets (columns) - Dynamic
	if(isset($tcsn_option['tcsn_columns_slide_panel'])) {
	$tcsn_slide_panel_columns = $tcsn_option['tcsn_columns_slide_panel'];
	for ($i=1; $i<=$tcsn_slide_panel_columns; $i++)
	{
		register_sidebar(array(
		'name' 			=> 'Slide-Panel-column-'.$i,
		'id' 			=> 'widgets-slide-'.$i,
		'description'   => __( 'This area is a dynamically generated slide panel widget column. Widgets will be stacked in here.', 'tcsn_theme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
		));
		}
	}
}
// Hook into the 'widgets_init' action
add_action( 'widgets_init', 'tcsn_widgets_init' );
}