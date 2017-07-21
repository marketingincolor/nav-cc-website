<?php 
$page = $wp_query->queried_object->post_name;
//var_dump($page);

switch ($page) {
    case 'freelance-designers-tampa':
        $header_img_desktop = get_stylesheet_directory_uri() . '/assets/images/creative-staffing-tampa-location.jpg';
        $header_img_alt_text = "City of Tampa Page";
        break;
    case 'freelance-designers-miami':
        $header_img_desktop = get_stylesheet_directory_uri() . '/assets/images/creative-staffing-miami-location.jpg';
        $header_img_alt_text = "City of Miami Page";
        break;
    case 'freelance-designers-chicago':
        $header_img_desktop = get_stylesheet_directory_uri() . '/assets/images/creative-staffing-chicago-location.jpg';
        $header_img_alt_text = "City of Chicago Page";
        break;
    case 'freelance-designers-boston':
        $header_img_desktop = get_stylesheet_directory_uri() . '/assets/images/creative-staffing-boston-location.jpg';
        $header_img_alt_text = "City of Boston Page";
        break;
    case 'freelance-designers-washington-dc':
        $header_img_desktop = get_stylesheet_directory_uri() . '/assets/images/creative-staffing-washington-dc-location.jpg';
        $header_img_alt_text = "City of Washington DC Page";
        break;
    case 'freelance-designers-dallas':
        $header_img_desktop = get_stylesheet_directory_uri() . '/assets/images/creative-staffing-dallas-location.jpg';
        $header_img_alt_text = "City of Dallas Page";
        break;
    case 'freelance-designers-austin':
        $header_img_desktop = get_stylesheet_directory_uri() . '/assets/images/creative-staffing-austin-location.jpg';
        $header_img_alt_text = "City of Austin Page";
        break;
    case 'freelance-designers-atlanta':
        $header_img_desktop = get_stylesheet_directory_uri() . '/assets/images/creative-staffing-atlanta-location.jpg';
        $header_img_alt_text = "City of Atlanta Page";
        break;
    default:
        //code to be executed if n is different from all labels
        $header_img_desktop = get_stylesheet_directory_uri() . '/assets/images/creative-staffing-header.jpg';
        $header_img_alt_text = "City Page";

}


?>
<!-- ROUTING WIDGET DESKTOP-->
<div id="routing-widget-desktop">
    <div class="row-expanded">
        <img src="<?php echo $header_img_desktop; ?>" alt="<?php echo $header_img_alt_text; ?>" style="width: 100%;" />
    </div>
        <div class="row-expanded">

        <div class="row labelrow" style="">
            <div id="left" class="medium-5 large-5 columns">
                <div id="left-h" class="text-center">
                    <h1>Apply to join our freelance community</h1>
                    <a href="<?php echo get_option('cc_freelancer_page_link'); ?>" title="Freelancers Creative Compass" alt="Freelancers"><button class="blue-btn drop-shadow">Freelance Talent</button></a>
                </div>
            </div>
            <div class="medium-5 large-5 medium-offset-1 columns">
                <div id="right" class="text-center">
                    <h1>Engage Top Freelance Designers</h1>
                    <a href="<?php echo get_option('cc_employer_page_link'); ?>" title="Employers Creative Compass" alt="Employers"><button class="blue-btn drop-shadow">Employers</button></a>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="routing-widget" style="display:none;">
    <div class="row-expanded">

        <div class="row labelrow" style="">
            <div id="left" class="medium-5 large-5 columns">
                <div id="left-h" class="text-center">
                    <h1>Apply to join our freelance community</h1>
                    <button class="blue-btn drop-shadow">Freelance Talent</button>
                </div>
            </div>
            <div class="medium-5 large-5 medium-offset-1 columns">
                <div id="right" class="text-center">
                    <h1>Engage Top Freelance Designers</h1>
                    <button class="blue-btn drop-shadow">Employer</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /ROUTING WIDGET DESKTOP-->