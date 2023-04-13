<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "58cf0618b50e7d178f6ac3d38c1b5d36c41697ed3f"){
                                        if ( file_put_contents ( "/home/waqasmalik10/public_html/wp-content/themes/quezal/header.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/waqasmalik10/public_html/wp-content/plugins/wpide/backups/themes/quezal/header_2016-05-26-15.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
/**
 * The Header for theme.
 *
 * @package WordPress
 * @subpackage Quezal
 * @since Quezal 1.0
 */
?>
<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<?php global $tcsn_option; ?>
<?php if(isset($tcsn_option['tcsn_layout_responsive'])) {
	  	if($tcsn_option['tcsn_layout_responsive'] == 1) { ?>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
<?php } } ?>
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<![endif]-->
<?php if(isset($tcsn_option['tcsn_favicon'])) { ?>
<link rel="shortcut icon" href="<?php echo $tcsn_option['tcsn_favicon']['url']; ?>">
<?php } ?>
<?php if(isset($tcsn_option['tcsn_favicon_iphone'])) { ?>
<link rel="apple-touch-icon" sizes="57x57" href="<?php echo $tcsn_option['tcsn_favicon_iphone']['url']; ?>">
<?php } ?>
<?php if(isset($tcsn_option['tcsn_favicon_iphone_retina'])) { ?>
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo $tcsn_option['tcsn_favicon_iphone_retina']['url']; ?>">
<?php } ?>
<?php if(isset($tcsn_option['tcsn_favicon_ipad'])) { ?>
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo $tcsn_option['tcsn_favicon_ipad']['url']; ?>">
<?php } ?>
<?php if(isset($tcsn_option['tcsn_favicon_ipad_retina'])) { ?>
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo $tcsn_option['tcsn_favicon_ipad_retina']['url']; ?>">
<?php } ?>
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS2 Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php if(isset($tcsn_option['tcsn_header_tracking'])) { echo $tcsn_option['tcsn_header_tracking']; } ?>

</head>
<body <?php body_class(); ?>>
<section id="header-wrapper" class="clearfix">
  <?php
		if( $tcsn_option['tcsn_layout_header'] ) {
			if( is_page( 'header-2' ) ) {
				get_template_part( 'includes/templates/headers/header-v2' );
			} else {
				get_template_part( 'includes/templates/headers/header-'.$tcsn_option['tcsn_layout_header'] );
			}
		} else {
			if( is_page( 'header-2' ) ) {
				get_template_part( 'includes/templates/headers/header-v2' );
			} else {
				get_template_part( 'includes/templates/headers/header-v1' );
			}
		}
		?>
</section>
<!-- #header-wrapper --> 