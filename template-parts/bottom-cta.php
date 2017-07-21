<?php 

$page = $wp_query->queried_object->post_name;

switch ($page) {
    case 'design-recruitment-employers':
    	$link = get_option('cc_employer_form_page_link');
    	$title = "Creative Compass Button";
    	$tagline = get_field('bottom_cta_copy_employer');
    	$btn_text = get_field('employer_button_bottom_orange_box');
        break;
    case 'design-freelance':
    	$link = get_option('cc_freelance_form_page_link');
    	$title = "Creative Compass Button";
    	$tagline = get_field('bottom_cta_copy_freelancer');
    	$btn_text = get_field('freelancer_button_bottom_orange_box');
        break;
    default:

}

?>
<div id="bottom-cta" class="row-expanded">
    <div class="row" data-equalizer>
        <div class="small-12 text-center large-10 large-text-left columns" data-equalizer-watch>
            <h6><?php echo $tagline; ?></h6>
        </div>
        <div class="small-12 text-center large-2 columns large-text-right" data-equalizer-watch>
            <a href="<?php echo $link; ?>" title="<?php echo $title; ?>"><button class="blue-btn" style="padding: 1rem 1.5rem"><?php echo $btn_text; ?></button></a>
        </div>
    </div>
</div>