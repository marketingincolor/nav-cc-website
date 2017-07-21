<?php
$page = $wp_query->queried_object->post_name;
//var_dump($page);

switch ($page) {
    case 'freelance-designers-tampa':
        $header_img_phone = get_stylesheet_directory_uri() . '/assets/images/creative-staffing-header-tampa.jpg';
        $header_img_alt_text = "City of Tampa Page";
        $city_name = "Tampa";
        break;
    case 'freelance-designers-miami':
        $header_img_phone = get_stylesheet_directory_uri() . '/assets/images/creative-staffing-header-miami.jpg';
        $header_img_alt_text = "City of Miami Page";
        $city_name = "Miami";
        break;
    case 'freelance-designers-chicago':
        $header_img_phone = get_stylesheet_directory_uri() . '/assets/images/creative-staffing-header-chicago.jpg';
        $header_img_alt_text = "City of Chicago Page";
        $city_name = "Chicago";
        break;
    case 'freelance-designers-boston':
        $header_img_phone = get_stylesheet_directory_uri() . '/assets/images/creative-staffing-header-boston.jpg';
        $header_img_alt_text = "City of Boston Page";
        $city_name = "Boston";
        break;
    case 'freelance-designers-washington-dc':
        $header_img_phone = get_stylesheet_directory_uri() . '/assets/images/creative-staffing-header-washington-dc.jpg';
        $header_img_alt_text = "City of Washington DC Page";
        $city_name = "Washington DC";
        break;
    case 'freelance-designers-dallas':
        $header_img_phone = get_stylesheet_directory_uri() . '/assets/images/creative-staffing-header-dallas.jpg';
        $header_img_alt_text = "City of Dallas Page";
        $city_name = "Dallas";
        break;
    case 'freelance-designers-austin':
        $header_img_phone = get_stylesheet_directory_uri() . '/assets/images/creative-staffing-header-austin.jpg';
        $header_img_alt_text = "City of Austin Page";
        $city_name = "Austin";
        break;
    case 'freelance-designers-atlanta':
        $header_img_phone = get_stylesheet_directory_uri() . '/assets/images/creative-staffing-header-atlanta.jpg';
        $header_img_alt_text = "City of Atlanta Page";
        $city_name = "Atlanta";
        break;
    default:
        //code to be executed if n is different from all labels
        $header_img_phone = get_stylesheet_directory_uri() . '/assets/images/creative-staffing-header-mobile.jpg';
        $header_img_alt_text = "City Page";
        $city_name = "Unknown";
}
?>
<!-- ROUTING WIDGET PHONE-->
<div id="routing-widget-phone">
        <div class="row-expanded">
            <img src="<?php echo $header_img_phone; ?>" alt="<?php echo $header_img_alt_text; ?>" style="width: 100%;" />

        <div class=" labelrow" style="">
            <div style="/*border: 1px solid green;*/ height:50%; position:relative;">
                <div id="left" class="medium-5 large-5 columns">
                    <div id="left-h" class="text-center">
                        <h1>Apply to join our freelance community</h1>
                        <a href="<?php echo get_option('cc_freelancer_page_link'); ?>" title="Freelancers Creative Compass" alt="Freelance Web and Graphic Designers Register here for opportunities"><button class="blue-btn drop-shadow">Freelance Talent</button></a>
                    </div>
                </div>
            </div>
            <div class="medium-5 large-5 medium-offset-1 columns" style="/*border: 1px solid purple;*/ height: 50%; position:relative;">
                    <div id="right" class="text-center">
                        <h1>Engage Top Freelance Designers</h1>
                        <a href="<?php echo get_option('cc_employer_page_link'); ?>" title="Employers Creative Compass" alt="Hire freelance web and graphic designers in <?php echo $city_name; ?>"><button class="blue-btn drop-shadow">Employers</button></a>
                    </div>
             </div>
            </div>
        </div>
    </div>
</div>