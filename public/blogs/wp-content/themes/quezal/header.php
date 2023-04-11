<?php
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
<meta name="robots" content="index, follow">
<meta name="geo.region" content="US-WA">
<meta name="google-site-verification" content="apwrTsSLP0txigjNicljyHs4YBDbMfLwyN13RGc7My0" />
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
<?php wp_head(); ?>
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
	
<div class="container">
<div class="row">
	
<ins class="adsbygoogle"
style="display:block"
data-ad-client="ca-pub-7349483947777780"
data-ad-slot="7175233192"
data-ad-format="auto"
data-full-width-responsive="true"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
	</div>	
	</div>	
</section>
<!-- #header-wrapper --> 

