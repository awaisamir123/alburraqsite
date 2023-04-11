<?php

require_once( CRP_CLASSES_DIR_PATH.'/CRPDashboardListTable.php');

//Create an instance of our package class...
$listTable = new CRPDashboardListTable();
$listTable->prepare_items();

function featuresListToopltip(){
    $tooltip = "";
    $tooltip .= "<div class=\"crp-tooltip-content\">";
    $tooltip .= "<ul>";
    $tooltip .= "<li>* Do Full Design Adjustments</li>";
    $tooltip .= "<li>* Put Multiple Grids On Pages</li>";
    $tooltip .= "<li>* Setup Masonry, Puzzle, Grid Layouts</li>";
    $tooltip .= "<li>* Embed YouTube, Vimeo & Native Videos</li>";
    $tooltip .= "<li>* Popup iFrame & Google Maps</li>";
    $tooltip .= "<li>* Open Light/Dark/Fixed/Fullscreen Popups</li>";
    $tooltip .= "<li>* 100+ Hover Styles & Animations</li>";
    $tooltip .= "<li>* Allow Category Filtration & Pagination</li>";
    $tooltip .= "<li>* Enable Social Sharing</li>";
    $tooltip .= "<li>* Perform Ajax/Lazy Loading</li>";
    $tooltip .= "<li>* Receive Product Enquiries</li>";
    $tooltip .= "</ul>";
    $tooltip .= "</div>";



    $tooltip = htmlentities($tooltip);
    return $tooltip;
}
?>

<div id="crp-dashboard-wrapper">
    <img src="<?php echo CRP_IMAGES_URL.'/general/logo.png' ?>" width="85" alt="GridKit Portfolio Gallery">
    <div id="crp-dashboard-add-new-wrapper">
        <div class="crp-upgrade-note">You’re running Free version of Grid Kit. You can <a href="<?php echo CRP_PRO_URL; ?>" class="gkit-tooltip" title='<?php echo featuresListToopltip(); ?>'>upgrade</a> your license to unlock all available features.</div>
        <div>
            <a id="add-portfolio-button" class='button-secondary add-portfolio-button crp-glazzed-btn crp-glazzed-btn-green' href="<?php echo "?page={$crp_adminPage}&action=create" ?>" title='Add new album'>+ Album</a>
            <a id="add-gallery-button" class='button-secondary add-portfolio-button crp-glazzed-btn crp-glazzed-btn-green' href="<?php echo "?page={$crp_adminPage}&action=create&type=".CRPGridType::GALLERY; ?>" title='Add new gallery'>+ Gallery</a>
            <a id="add-client-logos-button" class='button-secondary add-portfolio-button crp-glazzed-btn crp-glazzed-btn-green' href="<?php echo "?page={$crp_adminPage}&action=create&type=".CRPGridType::CLIENT_LOGOS; ?>" title='Add new gallery'>+ Client Logos</a>
            <a id="add-team-button" class='button-secondary add-portfolio-button crp-glazzed-btn crp-glazzed-btn-green' href="<?php echo "?page={$crp_adminPage}&action=create&type=".CRPGridType::TEAM; ?>" title='Add new gallery'>+ Team</a>
            <a id="add-catalog-button" class='button-secondary add-portfolio-button crp-glazzed-btn crp-glazzed-btn-green' href="<?php echo "?page={$crp_adminPage}&action=create&type=".CRPGridType::CATALOG; ?>" title='Add new product catalog'>+ Product Catalog</a>
        </div>
    </div>
<!--    <div><a class='button-secondary upgrade-button gkit-tooltip crp-glazzed-btn crp-glazzed-btn-orange' href='--><?php //echo CRP_PRO_URL ?><!--' title='--><?php //echo featuresListToopltip(); ?><!--'>* UNLOCK ALL FEATURES *</a></div>-->

    <!-- Forms are NOT created automatically, so you need to wrap the table in one to use features like bulk actions -->
    <form id="" method="get">
        <!-- For plugins, we also need to ensure that the form posts back to our current page -->
        <input type="hidden" name="page" value="<?php echo $crp_adminPage ?>" />
        <!-- Now we can render the completed list table -->
        <?php $listTable->display() ?>
    </form>

</div>

<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery(".tablenav.top", jQuery(".wp-list-table .no-items").closest("#crp-dashboard-wrapper")).hide();
    });
</script>