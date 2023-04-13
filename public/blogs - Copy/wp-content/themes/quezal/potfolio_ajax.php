<?php
include('../../../wp-load.php');
$action = $_POST['action'];
$page_get = $_POST['page'];
$pagination = $_POST['page']*10;
//get_header();
global $tcsn_option;
global $post; 
GLOBAL $wpdb;
if($action != ''){
    $query = "SELECT * FROM wp_posts, wp_term_relationships, wp_terms WHERE 1=1  AND wp_posts.post_type = 'tcsn_portfolio' AND (wp_posts.post_status = 'publish') AND (wp_term_relationships.object_id = wp_posts.ID AND wp_term_relationships.term_taxonomy_id = wp_terms.term_id AND wp_terms.slug = '".$action."')  ORDER BY wp_posts.post_date ASC LIMIT $pagination, 10";
    $query_count = "SELECT count(*) as items FROM wp_posts, wp_term_relationships, wp_terms WHERE 1=1  AND wp_posts.post_type = 'tcsn_portfolio' AND (wp_posts.post_status = 'publish') AND (wp_term_relationships.object_id = wp_posts.ID AND wp_term_relationships.term_taxonomy_id = wp_terms.term_id AND wp_terms.slug = '".$action."')  ORDER BY wp_posts.post_date ASC";
}

$datas = $wpdb->get_results($query);
$count = $wpdb->get_results($query_count);
$counts = $count[0]->items;
$pages = floor($counts/10);
if($pages <= 5){
	for($page = 0; $page <= $pages; $page++){
		$show_page = $page+1;
		if($page == $page_get){
			echo "<span class='current-folio-page'>$show_page</span>";
		}else{
			echo "<a class='inactive-folio-page' onclick='filter_me(`".$action."`,$page)' >$show_page</a>";
		}
	}
}else{
	if($page_get-2 > 0){
		$start = $page_get-2;
	}else{
		$start = 0;
	}
	if($page_get+3 <= $pages){
		$end = $page_get+2;
	}else if($page_get+2 <= $pages){
		$end = $pages + 1;
	}else{
		$end = $pages;
	}

	for($page = $start; $page <= $end; $page++){
		$show_page = $page+1;
		if($page == $page_get){
			echo "<span class='current-folio-page'>$show_page</span>";
		}else{
			echo "<a class='inactive-folio-page' onclick='filter_me(`".$action."`,$page)' >$show_page</a>";
		}
	}
}
echo ":afterpagination:";
?>
<?php foreach($datas as $data){ ?>
        <?php 
	       $tcsn_lightbox_img_url = wp_get_attachment_url(get_post_thumbnail_id($data->ID), 'large');
	       $tcsn_portfolio_type = get_post_meta( $data->ID, '_tcsn_portfolio_type', true );  
	       $tcsn_video_url 	= get_post_meta( $data->ID, '_tcsn_video_url', true );  
	       $tcsn_zoom_title = get_post_meta( $data->ID, '_tcsn_zoom_title', true );  
	       $tcsn_external_link = get_post_meta( $data->ID, '_tcsn_external_link', true );  
	       $tcsn_link_url = get_post_meta( $data->ID, '_tcsn_link_url', true );
         ?> 
		<?php echo '<div class="col-md-6 col-sm-6 col-xs-12 portfolio-item isotope-item '.$data->slug.' all">'; ?>                                       
		<?php echo '<div class="folio-thumb">'; ?>            
			<?php echo '<div class="col-md-12 col-sm-12 col-xs-12">' ?>   
			<?php //get_template_part( 'includes/templates/post-formats/portfolio-item' ); ?>            
			<?php echo '<figure>'; ?>
			  <?php echo '<img width="1278" height="692" src="'.$tcsn_lightbox_img_url.'" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="AlBurraq Technologies out source web mobile development project online" srcset="'.substr($tcsn_lightbox_img_url,0,-4).'-300x162.png 300w, '.substr($tcsn_lightbox_img_url,0,-4).'-768x416.png 768w, '.substr($tcsn_lightbox_img_url,0,-4).'-1024x554.png 1024w, '.$tcsn_lightbox_img_url.' 1278w" sizes="(max-width: 1278px) 100vw, 1278px" />'; ?>  
			  <?php echo '<figcaption> <a href="'.$tcsn_lightbox_img_url.'" data-rel="prettyPhoto" title="Prim-Ed"><i class="icon-others-zoom"></i></a>'; ?> 
			  <?php echo '</figcaption>'; ?>
			<?php echo '</figure>'; ?>
			<?php echo '</div>'; ?>          
		<?php echo '</div>'; ?> 
		<?php echo '<div class="clearfix"></div>'; ?>
		<?php echo '<h5 class="folio-title"><a href="http://al-burraq.com/portfolio-items/'.$data->post_name.'">'.$data->post_title.'</a></h5>'; ?>
		<?php echo '<div class="folio-excerpt clearfix">'; ?>            
		<?php echo '<p>'.substr($data->post_excerpt, 0, 240).'...</p>'; ?>
		<?php echo '</div>'; ?>                    
		<?php echo '<div class="clearfix"></div>'; ?>        
		<?php echo '</div>'; ?>
<?php } ?>