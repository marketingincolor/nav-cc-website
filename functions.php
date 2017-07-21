<?php
/**
 * Author: Ole Fredrik Lie, Adam Doe
 * URL: http://olefredrik.com, http://www.marketingincolor.com
 *
 * Creative Compass Theme built using FoundationPress and SCSS
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */


/* ===============
   FoundationPress Settings
   =============== */

/** Various clean up functions */
require_once( 'library/cleanup.php' );

/** Required for Foundation to work properly */
require_once( 'library/foundation.php' );

/** Format comments */
require_once( 'library/class-foundationpress-comments.php' );

/** Register all navigation menus */
require_once( 'library/navigation.php' );

/** Add menu walkers for top-bar and off-canvas */
require_once( 'library/class-foundationpress-top-bar-walker.php' );
require_once( 'library/class-foundationpress-mobile-walker.php' );

/** Create widget areas in sidebar and footer */
require_once( 'library/widget-areas.php' );

/** Return entry meta information for posts */
require_once( 'library/entry-meta.php' );

/** Enqueue scripts */
require_once( 'library/enqueue-scripts.php' );

/** Add theme support */
require_once( 'library/theme-support.php' );

/** Add Nav Options to Customer */
require_once( 'library/custom-nav.php' );

/** Change WP's sticky post class */
require_once( 'library/sticky-posts.php' );

/** Configure responsive image sizes */
require_once( 'library/responsive-images.php' );

/** If your site requires protocol relative url's for theme assets, uncomment the line below */
// require_once( 'library/class-foundationpress-protocol-relative-theme-assets.php' );


/* =============================================
   General Settings - Creative Compass Settings
   ========================================== */

// Add Image Sizes
// name, width, height, crop
add_image_size ('cc-blog', 574, 195.25, true);
add_image_size ('cc-featured-blog', 1170, 393.53, true );



//Add Creative Compass General Settings
add_action('admin_init', 'cc_settings');

//Creative Compass General Settings
function cc_settings() {  
    add_settings_section(  
        'cc_settings_section', 
        'Creative Compass Settings', 
        'cc_general_settings_callback', 
        'general'
    );

    add_settings_field( 
        'cc_phone_number', 
        'Phone Number', 
        'cc_textbox_callback', 
        'general', 
        'cc_settings_section',
        array( // The $args
            'cc_phone_number'
        )  
    ); 

    add_settings_field(
        'cc_email',
        'Email',
        'cc_textbox_callback',
        'general',
        'cc_settings_section',
        array( // The $args
            'cc_email'
        )  
    );

    add_settings_field(
        'cc_facebook_link',
        'Facebook Link',
        'cc_textbox_callback',
        'general',
        'cc_settings_section',
        array( // The $args
            'cc_facebook_link'
        )  
    );

    add_settings_field(
        'cc_twitter_link',
        'Twitter Link',
        'cc_textbox_callback',
        'general',
        'cc_settings_section',
        array( // The $args
            'cc_twitter_link'
        )  
    );  

    add_settings_field(
        'cc_google_link',
        'Google+ Link',
        'cc_textbox_callback',
        'general',
        'cc_settings_section',
        array( // The $args
            'cc_google_link'
        )  
    );

    add_settings_field(
        'cc_linkedin_link',
        'LinkedIn Link',
        'cc_textbox_callback',
        'general',
        'cc_settings_section',
        array( // The $args
            'cc_linkedin_link'
        )  
    );  

    add_settings_field(
        'cc_youtube_link',
        'YouTube Link',
        'cc_textbox_callback',
        'general',
        'cc_settings_section',
        array( // The $args
            'cc_youtube_link'
        )  
    );  

    add_settings_field(
        'cc_freelance_list_title',
        'Freelance List Title',
        'cc_textbox_callback',
        'general',
        'cc_settings_section',
        array(
            'cc_freelance_list_title'
        )
    );

    add_settings_field(
        'cc_freelance_column_1',
        'Freelance List One',
        'cc_freelance_list_callback',
        'general',
        'cc_settings_section',
        array(
            'cc_freelance_column_1'
        )
    );

    add_settings_field(
        'cc_freelance_column_2',
        'Freelance List Two',
        'cc_freelance_list_callback',
        'general',
        'cc_settings_section',
        array(
            'cc_freelance_column_2'
        )
    );

    add_settings_field(
        'cc_freelance_column_3',
        'Freelance List Three',
        'cc_freelance_list_callback',
        'general',
        'cc_settings_section',
        array(
            'cc_freelance_column_3'
        )
    );

    add_settings_field(
        'cc_view_opportunities_link',
        'Jobs Page Link',
        'cc_textbox_callback',
        'general',
        'cc_settings_section',
        array( // The $args
            'cc_view_opportunities_link'
        )  

    );


    add_settings_field(
        'cc_freelancer_page_link',
        'Freelance Process Page Link',
        'cc_textbox_callback',
        'general',
        'cc_settings_section',
        array(
            'cc_freelancer_page_link'
        )
    );

    add_settings_field(
        'cc_employer_page_link',
        'Employer Process Page Link',
        'cc_textbox_callback',
        'general',
        'cc_settings_section',
        array(
            'cc_employer_page_link'
        )
    );

    add_settings_field(
        'cc_freelance_form_page_link',
        'Freelancer Form Page Link',
        'cc_textbox_callback',
        'general',
        'cc_settings_section',
        array(
            'cc_freelance_form_page_link'
        )
    );
    add_settings_field(
        'cc_employer_form_page_link',
        'Employer Form Page Link',
        'cc_textbox_callback',
        'general',
        'cc_settings_section',
        array(
            'cc_employer_form_page_link'
        )
    );

    add_settings_field(
        'cc_contact_page_link',
        'Contact Button Link',
        'cc_textbox_callback',
        'general',
        'cc_settings_section',
        array(
            'cc_contact_page_link'
        )
    );
    register_setting('general','cc_phone_number', 'esc_attr');
    register_setting('general','cc_email', 'esc_attr');
    register_setting('general','cc_facebook_link', 'esc_attr');
    register_setting('general','cc_twitter_link', 'esc_attr');
    register_setting('general','cc_google_link', 'esc_attr');
    register_setting('general','cc_youtube_link', 'esc_attr');
    register_setting('general','cc_linkedin_link', 'esc_attr' );
    register_setting('general','cc_freelance_column_1', 'esc_attr');
    register_setting('general','cc_freelance_column_2', 'esc_attr');
    register_setting('general','cc_freelance_column_3', 'esc_attr');
    register_setting('general', 'cc_view_opportunities_link', 'esc_attr');
    register_setting('general','cc_freelance_list_title', 'esc_attr');
    register_setting('general','cc_freelancer_page_link', 'esc_attr');
    register_setting('general','cc_employer_page_link', 'esc_attr');
    register_setting( 'general','cc_contact_page_link', 'esc_attr' );
    register_setting('general','cc_freelance_form_page_link', 'esc_attr');
    register_setting('general','cc_employer_form_page_link', 'esc_attr');
}

function cc_general_settings_callback() {
    echo '<p>Custom Settings for Creative Compass Theme</p>';  
}

function cc_textbox_callback($args) {
    $option = get_option($args[0]);
    echo '<input type="text" id="'. $args[0] .'" name="'. $args[0] .'" value="' . $option . '" />';
}

function cc_freelance_list_callback($args) {
    $option = get_option($args[0]);
    echo '<textarea id="' . $args[0] . '" name="' . $args[0]. '" value="' . $option .'" rows="10" cols="50"/>'. $option .'</textarea>';
}



/* ===============
   WordPress Customizer Settings
   =============== */
function cc_add_logo( $wp_customize ) {
    $wp_customize->add_setting( 'cc_logo' );
         
    // Add control for logo uploader (actual uploader)
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'cc_logo', array(
        'label'    => __( 'Upload Logo', 'Creative Compass' ),
        'section'  => 'title_tagline',
        'settings' => 'cc_logo',
    ) ) );
}
add_action( 'customize_register', 'cc_add_logo' );

/* ===============
   Navigation Menu
   =============== */

function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );


/* ===============
   AJAX Pagination
   =============== */

function be_load_more_js() {

  global $wp_query;
  
  $query = array( 
    'post__not_in' => array( get_queried_object_id() ), 
    'category_name' => ea_first_term( 'category', 'slug' ), 
    'posts_per_page' => 2, 
  );
  $args = array(
    'url'   => admin_url( 'admin-ajax.php' ),
    'query' => $wp_query->query,
    'maxpage' => $wp_query->max_num_pages,
    'offset' => 1
  );
  wp_enqueue_script( 'be-load-more', get_stylesheet_directory_uri() . '/assets/javascript/ajax-pagination.js', array( 'jquery' ), '1.0', true );
  wp_localize_script( 'be-load-more', 'beloadmore', $args );
    
}
add_action( 'wp_enqueue_scripts', 'be_load_more_js' );

function cc_load_more_js() {

  global $wp_query;
  
  $query = array( 
    'post__not_in' => array( get_queried_object_id() ), 
    'category_name' => ea_first_term( 'category', 'slug' ), 
    'posts_per_page' => 2, 
  );
  $args = array(
    'url'   => admin_url( 'admin-ajax.php' ),
    'query' => $wp_query->query,
    'maxpage' => $wp_query->max_num_pages,
    'offset' => 0
  );

  wp_enqueue_script( 'cc-load-more', get_stylesheet_directory_uri() . '/assets/javascript/ajax-search-pagination.js', array( 'jquery' ), '1.0', true );
  wp_localize_script( 'cc-load-more', 'ccloadmore', $args );
    
}
add_action( 'wp_enqueue_scripts', 'cc_load_more_js' );



function cc_archive_load_more_js() {

  global $wp_query;
  
  $query = array( 
    'post__not_in' => array( get_queried_object_id() ), 
    'category_name' => ea_first_term( 'category', 'slug' ), 
    'posts_per_page' => 2, 
  );
  $args = array(
    'url'   => admin_url( 'admin-ajax.php' ),
    'query' => $wp_query->query,
    'maxpage' => $wp_query->max_num_pages,
    'offset' => 0
  );
  
  wp_enqueue_script( 'cc-archive-load-more', get_stylesheet_directory_uri() . '/assets/javascript/ajax-archive-pagination.js', array( 'jquery' ), '1.0', true );
  wp_localize_script( 'cc-archive-load-more', 'ccarchiveloadmore', $args );
    
}
add_action( 'wp_enqueue_scripts', 'cc_archive_load_more_js' );


/**
 * AJAX Load More 
 *
 */
function be_ajax_load_more() {
    $args = isset( $_POST['query'] ) ? array_map( 'esc_attr', $_POST['query'] ) : array();
    $args['post_type'] = isset( $args['post_type'] ) ? esc_attr( $args['post_type'] ) : 'post';
    $args['paged'] = esc_attr( $_POST['page'] );
    $args['post_status'] = 'publish';
    $args['offset'] =  isset( $_POST['offset']) ? $_POST['offset'] : 'offset';
    ob_start();
    $loop = new WP_Query( $args );
    if( $loop->have_posts() ): while( $loop->have_posts() ): $loop->the_post();
        get_template_part('template-parts/content');
    endwhile; endif; wp_reset_postdata();
    $data = ob_get_clean();
    wp_send_json_success( $data );
    wp_die();
}
add_action( 'wp_ajax_be_ajax_load_more', 'be_ajax_load_more' );
add_action( 'wp_ajax_nopriv_be_ajax_load_more', 'be_ajax_load_more' );

/**
 * First Term 
 * Helper Function
 */
function ea_first_term( $taxonomy, $field ) {
    $terms = get_the_terms( get_the_ID(), $taxonomy );
  
    if( empty( $terms ) || is_wp_error( $terms ) )
        return false;
    
    // If there's only one term, use that
    if( 1 == count( $terms ) ) {
        $term = array_shift( $terms );
    } else {
        $term = array_shift( $list );
    }
    
    // Output   
    if( $field && isset( $term->$field ) )
        return $term->$field;
    
    else
        return $term;   
    
}

// Replaces the excerpt "Read More" text by a link
function new_excerpt_more($more) {
       global $post;
    return '<a class="moretag" href="'. get_permalink($post->ID) . '"> Read More.</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

/**
 * Display the post content. Optinally allows post ID to be passed
 * @uses the_content()
 * @link https://wordpress.stackexchange.com/questions/142957/use-the-content-outside-the-loop
 * @param int $id Optional. Post ID.
 * @param string $more_link_text Optional. Content for when there is more text.
 * @param bool $stripteaser Optional. Strip teaser content before the more text. Default is false.
 */
function the_content_by_id( $post_id=0, $more_link_text = "Read More", $stripteaser = false ){
    global $post;
    $post = get_post($post_id);
    setup_postdata( $post, $more_link_text, $stripteaser );
    the_excerpt();
    wp_reset_postdata( $post );
}

// only get posts on search
function SearchFilter($query) {
if ($query->is_search) {
$query->set('post_type', 'post');
}
return $query;
}

add_filter('pre_get_posts','SearchFilter');