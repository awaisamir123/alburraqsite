<?php
/**
 * The template for woocommerce.
 *
 * @package WordPress
 * @subpackage Quezal
 * @since Quezal 2.0.0
 */
?>
<?php get_header(); ?>
<?php global $tcsn_option; ?>
<?php if( $tcsn_option['tcsn_show_page_header'] == 1 ) { ?>

<section id="page-header" class="clearfix">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6 col-xs-12">
        <h1 class="page-title">
          <?php if( $tcsn_option['tcsn_woocommerce_shop_title'] != "" ) { ?>
          <?php echo $tcsn_option['tcsn_woocommerce_shop_title']; ?>
          <?php } else { ?>
          <?php echo post_type_archive_title(); ?>
          <?php } ?>
        </h1>
      </div>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <?php get_template_part( 'includes/templates/headers/breadcrumb' ); ?>
      </div>
    </div>
  </div>
</section>
<!-- #page-header -->
<?php } ?>
<section id="content-main" class="<?php echo tcsn_get_style_class(); ?>">
  <div class="container">
    <div class="row">
      <?php if ( is_woocommerce_activated() && is_shop() || is_product_category() || is_product_tag() ) { ?>
      <?php get_template_part( '/includes/woocommerce/content', 'shop' ); ?>
      <?php } ?>
      <?php if ( is_woocommerce_activated() && is_singular( 'product' ) ) { ?>
      <?php get_template_part( '/includes/woocommerce/content', 'product' ); ?>
      <?php } ?>
    </div>
  </div>
</section>
<!-- #content -->

<?php get_footer(); ?>