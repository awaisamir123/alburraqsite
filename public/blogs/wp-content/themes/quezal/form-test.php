<?php
/**
/* template name: form-test
 *
 * @package WordPress
 * @subpackage Quezal
 * @since Quezal 1.0
 */
?>
<?php get_header(); ?>
<?php global $tcsn_option; ?>

<section id="content-main" class="<?php echo tcsn_get_style_class(); ?>">
  <div class="container">
    <div class="row">
		<div class="col-md-12 col-sm-12">
			<?php if(do_shortcode('[advps-slideshow optset="3"]')!=""){ ?>
			<h3 style="margin-top:20px;">Employes Say </h3>
			<?php echo do_shortcode('[advps-slideshow optset="3"]'); 
			}
			else
			{
				echo "<h5 style='margin-top:20px; text-align:center'>There is no messages from Employes</h5>";
			}
				?>
		</div>
      <div class="col-md-9 col-sm-9">
	  	<div style="width:100%">
			<?php echo do_shortcode( '[gravityform id=1]' ); ?>
			
		</div>
		
      </div>
      <?php get_sidebar(); ?>
    </div>
  </div>
</section>
<!-- #content -->

<?php get_footer(); ?>
