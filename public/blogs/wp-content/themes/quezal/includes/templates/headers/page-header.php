<?php
/**
 * The Page header
 *
 * @package WordPress
 * @subpackage Quezal
 * @since Quezal 2.0
 */
?>
<?php
// Page header hook
function tcsn_page_header_hook() {
	do_action( 'tcsn_page_header_hook' );
}
add_action( 'tcsn_page_header_hook', 'tcsn_default_page_header_hook' );

if( ! function_exists( 'tcsn_default_page_header_hook' ) ) {
	function tcsn_default_page_header_hook() {
		tcsn_page_header();
	}
}

// Page Title
if ( ! function_exists('tcsn_page_title') ) {
	function tcsn_page_title( $page_title='' ) {
		global $tcsn_option, $post, $wp_query;
		// Blog
		if ( is_single() || is_front_page() ||  is_home() && ! is_singular('page') ) { 
        	if( $tcsn_option['tcsn_blog_title'] != "" ) { 
				$tcsn_blog_title = $tcsn_option['tcsn_blog_title'];
           		$page_title = $tcsn_blog_title;
			} 
		// Archives   
		} elseif ( is_archive() ) {
			// Daily archive
			if ( is_day() ) {
				$page_title = sprintf( __( 'Daily Archives: %s', 'tcsn_theme' ), get_the_date() );
			// Monthly archive
			} elseif ( is_month() ) {
				$page_title = sprintf( __( 'Monthly Archives: %s', 'tcsn_theme' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'tcsn_theme' ) ) );	
			// Yearly archive
			} elseif ( is_year() ) {
				$page_title = sprintf( __( 'Yearly Archives: %s', 'tcsn_theme' ), get_the_date( _x( 'Y', 'yearly archives date format', 'tcsn_theme' ) ) );	
			//Author
			} elseif ( is_author() ) { 
         $page_title = sprintf( __( 'All posts by %s', 'tcsn_theme' ), '<span class="vcard">' . get_the_author() . '</span>' );

			// Standard title
			} else {
				$page_title = single_term_title("", false);
				
				if ( $page_title == '' ) {
					$post_id = $post->ID;
					$page_title = get_the_title($post_id);
				}
			}
		// Search
		} elseif( is_search() ) {
			$page_title =  sprintf( __( ' Search Results for : %s', 'tcsn_theme' ), get_search_query() );   
		// else
		} else {
			$post_id = $post->ID;
			$page_title = get_the_title($post_id);
		}
		return $page_title;
	} 
} 

// Page Header
if ( ! function_exists('tcsn_page_header') ) {
	function tcsn_page_header() {
		
		global $tcsn_option; 
		
		// Return if WooCommerce
		if ( function_exists('is_woocommerce') ) {
			if ( is_woocommerce() && !is_singular('page') ) return;
		}
		
		if ( is_singular( array( 'tcsn_portfolio', 'tcsn_team', 'tcsn_testimonial' ) ) ) return;

		// Page title
		$page_title = tcsn_page_title();

		if( $tcsn_option['tcsn_show_page_header'] == 1 && ! is_page_template('template-full.php') ) {
?>

<section id="page-header" class="clearfix">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6 col-xs-12">
        <h1 class="page-title"> <?php echo $page_title; ?> </h1>
      </div>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <?php global $tcsn_option; ?>
        <?php if( $tcsn_option['tcsn_show_breadcrumb'] == 1 ) { ?>
        <ul class="breadcrumbs">
          <?php if(function_exists('bcn_display_list'))
    {
        bcn_display_list();
    }?>
        </ul>
        <?php } ?>
      </div>
    </div>
  </div>
</section>
<?php	}
	} 	
} 
