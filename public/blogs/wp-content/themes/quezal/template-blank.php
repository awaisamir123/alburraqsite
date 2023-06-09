<?php
/**
 * Template Name: Blank Page
 *
 * The template for displaying pages without header and footer.
 *
 * @package WordPress
 * @subpackage Quezal
 * @since Quezal 1.0.0
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
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<section id="content-main" class="pad-top-none pad-bottom-none">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <div class="entry-content">
            <?php the_content(); ?>
            <?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages :', 'tcsn_theme' ) . '</span>', 'after' => '</div>' ) ); ?>
          </div>
        </article>
        <?php endwhile; endif; ?>
      </div>
    </div>
  </div>
</section>
<!-- #content -->

<?php if(isset($tcsn_option['tcsn_footer_tracking'])) { echo $tcsn_option['tcsn_footer_tracking']; } ?>
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->
<?php wp_footer(); ?>
</body>
</html>