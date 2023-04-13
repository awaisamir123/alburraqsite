<?php
/**
 * Template Name: Abdul
 */
get_header();?>
<section id="content-main" class="<?php echo tcsn_get_style_class(); ?>">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-9">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <div class="entry-content">
                            <?php the_content(); ?>
                            <?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages :', 'tcsn_theme' ) . '</span>', 'after' => '</div>' ) ); ?>
                        </div>
                    </article>
                    <?php if( $tcsn_option['tcsn_page_comments'] == 1 ) { ?>
                        <?php comments_template(); ?>
                    <?php } ?>
                <?php endwhile; endif; ?>
            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>
</section>
<?php
get_footer();
//
//    global $post;
//    $args = array(
//        'post_type'          => 'tcsn_portfolio',
//        'limit' => 6
//    );
//
//    $ark_data = query_posts( $args );
////	echo "data list";
////print_r($ark_data);
////echo "<br />";
//    $output = '';
//
//    if( $column == 'column_four' ){
//        $return_column = 'portfolio-four-col';
//    }  else {
//        $return_column = 'portfolio-three-col';
//    }
//
//    if( have_posts() ) :
//
//        $output .= '<div class="portfolio-grid wpb_custom_element ' . $return_column . ' clearfix">';
//        while ( have_posts() ) : the_post();
//            $output .= '<div class="portfolio-item">';
//            $thumb       	= get_post_thumbnail_id(get_the_ID());
//            $img_data     	= wp_get_attachment_image_src( $thumb, 'full' );
//            $img_url     	= $img_data[0];
//            $thumb_title 	= get_the_title();
//            $img_link    	= get_permalink($post->ID);
//            $permalink   	= get_permalink();
//            $link_url 	   	= get_post_meta( $post->ID, '_tcsn_link_url', true );
//            $external_link	= get_post_meta( $post->ID, '_tcsn_external_link', true );
//
//            if( $heading !== 'yes' ):
//                $permalink = get_permalink();
//                $return_heading = '<h5><a href="' . $permalink . '" rel="bookmark">' . get_the_title() .'</a></h5>';
//            endif;
//
//             $style = 'zoom';
//            if( $style == 'zoom' ){
//                $return_style = '<figure><img src="' . $img_url . '" alt="' . $thumb_title . '"/><figcaption>' . $return_heading . '<a href="' . $img_url . '" data-rel="prettyPhoto" title="' . $thumb_title . '"><i class="icon-others-zoom"></i></a></figcaption></figure>';
//            }
//
//            if( $style == 'none' ){
//                $return_style = '<figure><img src="' . $img_url . '" alt="' . $thumb_title . '"/><figcaption>' . $return_heading . '</figcaption></figure>';
//            }
//
//            if( $style == 'link' ){
//                if ( $external_link == true ) {
//                    $return_style = '<figure><img src="' . $img_url . '" alt="' . $thumb_title . '"/><figcaption>' . $return_heading . '<a href="' . $link_url . '" target="' . $target . '"><i class="icon-link5"></i></a></figcaption></figure>';
//                } else {
//                    $return_style = '<figure><img src="' . $img_url . '" alt="' . $thumb_title . '"/><figcaption>' . $return_heading . '<a href="' . $permalink . '" target="' . $target . '"><i class="icon-link5"></i></a></figcaption></figure>';
//                }
//            }
////            $main_id = get_the_ID();
////            $return_style .= '<p> ID:'.$main_id.'</p>';
////            $return_style .= '<p> attach ID:'.$thumb.'</p>';
////            $return_style .= '<p><img src="'.$img_url.'" /></p>';
//
//            $output .= $return_style;
//
//            $output .= '</div>';
//        endwhile;
//        $output .= '</div>';
//        wp_reset_query();
//    endif;
//
//    echo $output;
//
