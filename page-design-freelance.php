<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
 get_header(); 
$page = $wp_query->queried_object->post_name;

$cta_header = get_field('middle_cta_header_freelancer');
$cta_button = get_field('middle_cta_button_freelancer');
$cta_copy = get_field('middle_cta_copy_freelancer');

 ?>

    <?php get_template_part( 'template-parts/cc-featured-image' ); ?>
        <div id="page-about" role="main">
            <div class="content-wrapper">

                <?php do_action( 'foundationpress_before_content' ); ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                        <div class="row">
                            <div class="small-12 columns">
                                <article <?php post_class( 'main-content') ?> id="post-
                                    <?php the_ID(); ?>">

                                	<!-- TOP CONTENT AREA -->
                                	<img src="" alt="" />
                                    <div class="row">
                                        <div class="small-12 columns">
                                            <?php

                                            $top_image = get_field('freelance_top_image');
                                            $faq_image = get_field('freelance_faq_image');
                                            $freelance_sub_title = get_field('freelance_sub_title');

                                            //Register
                                            $talk_image = get_field('freelance_content_image_one');
                                            $talk_title = get_field('freelance_content_title_one');
                                            $talk_icon = get_field('freelance_icon_step_one');
                                            $talk_content = get_field('freelance_content_area_one');

                                            //Search
                                            $match_image = get_field('freelance_content_image_two');
                                            $match_title = get_field('freelance_content_title_two');
                                            $match_icon = get_field('freelance_icon_step_two');
                                            $match_content = get_field('freelance_content_area_two');

                                            //Interview
                                            $work_image = get_field('freelance_content_image_three');
                                            $work_title = get_field('freelance_content_title_three');
                                            $work_icon = get_field('freelance_icon_step_three');
                                            $work_content = get_field('freelance_content_area_three');

                                            //Hear Back
                                            $choose_image = get_field('freelance_content_image_four');
                                            $choose_title = get_field('freelance_content_title_four');
                                            $choose_icon = get_field('freelance_icon_step_four');
                                            $choose_content = get_field('freelance_content_area_four');


                                            ?>
                                            <div class="row">
                                                <div class="small-12 columns text-center">
                                                    <!-- TOP CONTENT AREA -->
                                                    <img src="<?php echo $top_image["url"]; ?>" alt="Creative Compass Employer Page" style="" class="top-icon"/>
                                                    <header>
                                                        <h1 class="entry-title top-header" style="margin-bottom:0rem;"><?php the_title(); ?></h1>
                                                    </header>
                                                    <div class="row">
                                                        <div class="small-12 columns text-center">
                                                            <h2 style="margin-bottom:2rem;"><?php echo $freelance_sub_title; ?></h2>
                                                        </div>  
                                                    </div>
                                                    <?php do_action( 'foundationpress_page_before_entry_content' ); ?>
                                                    <div class="entry-content text-justify">
                                                        <div style="margin-bottom: 2.5rem;"><?php the_content(); ?></div>
                                                            <?php edit_post_link( __( 'Edit', 'foundationpress' ), '<span class="edit-link">', '</span>' ); ?>
                                                    </div>
                                                    <!-- /TOP CONTENT AREA -->
                                                </div>
                                            </div>
                                            
                                            <div id="process-block" class="row" data-equalizer>

                                                    
                                                <!-- Register -->
                                                <div class="small-12 medium-6 large-3 columns text-justify">
                                                    <img src="<?php echo $talk_image['url']; ?>" alt="<?php echo $talk_image['alt']; ?>" />
                                                    <div class="steps-container">    
                                                        <div class="emp-steps">
                                                             <div class="icon">
                                                                <img src="<?php echo $talk_icon['url']; ?>" alt="<?php echo $talk_icon['alt']; ?>" style="display:inline-block; float:left; margin: 0rem 1rem 0rem 0rem;"/>
                                                             </div>
                                                             <div class="title">
                                                                <?php echo $talk_title; ?>
                                                            </div>
                                                        </div>
                                                        <p class="emp-steps-content"><?php echo $talk_content; ?></p>
                                                    </div>
                                                </div>
                                                <!-- /Register -->

                                                <!-- Search -->
                                                <div class="small-12 medium-6 large-3 columns text-justify">
                                                        <img src="<?php echo $match_image['url']; ?>" alt="<?php echo $match_image['alt']; ?>" />
                                                    <div class="steps-container" data-equalizer>

                                                        <div class="emp-steps">
                                                            <div class="icon">
                                                                <img src="<?php echo $match_icon['url']; ?>" alt="<?php echo $match_icon['alt']; ?>" style="display:inline-block; float:left; margin: 0rem 1rem 0rem 0rem;"/>
                                                                <div class="title">
                                                                    <?php echo $match_title; ?></div>
                                                                </div>    
                                                            </div>
                                                        <p class="emp-steps-content"><?php echo $match_content; ?></p>
                                                    </div>
                                                </div>
                                                <!-- /Search -->

                                                <!-- Interview -->
                                                <div class="small-12 medium-6 large-3 columns text-justify">
                                                    <img src="<?php echo $work_image['url']; ?>" alt="<?php echo $work_image['alt']; ?>" />
                                                    <div class="steps-container">
                                                            
                                                        <div class="emp-steps">
                                                            <div class="icon">
                                                                <img src="<?php echo $work_icon['url']; ?>" alt="<?php echo $work_icon['alt']; ?> " style="display:inline-block; float:left; margin: 0rem 1rem 0rem 0rem;" />
                                                            </div>
                                                            <div class="title">
                                                                <?php echo $work_title; ?>
                                                                
                                                            </div>
                                                        </div>
                                                        <p class="emp-steps-content"><?php echo $work_content; ?></p>
                                                    </div>
                                                </div>
                                                <!-- /Interview -->

                                                <!-- Hear Back -->
                                                <div class="small-12 medium-6 large-3 columns text-justify">
                                                    <img src="<?php echo $choose_image['url']; ?>" alt="<?php echo $choose_image['alt']; ?>" />
                                                    <div class="steps-container">
                 
                                                        <div class="emp-steps">
                                                             <div class="icon">
                                                                <img src="<?php echo $choose_icon['url']; ?>" alt="<?php echo $choose_icon['alt']; ?>" style="display:inline-block; float:left; margin: 0rem 1rem 0rem 0rem;"/>
                                                            </div>
                                                            <div class="title">
                                                                <?php echo $choose_title; ?>
                                                            </div>
                                                        </div>        
                                                                
                                                            
                                                        <p class="emp-steps-content"><?php echo $choose_content; ?></p>
                                                    </div>
                                                </div>
                                                <!-- /Hear Back -->


                                                
                                            </div>
                                        </div>
                                                    <!-- /FREELANCE PROCESS -->
                                    </div>
                                </article>
                            </div>
                        </div>

                        <!-- Freelance Button -->
                        <div id="freelance-page-opp-button">
                            <?php get_template_part('template-parts/freelance-button'); ?>
                        </div>
                        <!-- /Freelance Button -->

                        <!-- MAIN CTA -->
                        <div id="emp-form" class="row-expanded" style="background: url('<?php echo get_template_directory_uri() . '/assets/images/bg_05.jpg'; ?>')">
                            <div class="row small-centered text-center" data-eqaulizer>
                                <div data-equalizer-watch>
                                    <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/white_arrow.png' ?>" class="white-arrow" />
                                    <h1 class="top-header" style="color:#fff;">
                                        <?php echo $cta_header; ?>
                                    </h1>
                                    <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/white_arrow_2.png' ?>" class="white-arrow" />
                                </div>
                            </div>
                            <p style="color: #ffffff; text-align: center;" class="small-12 medium-8 columns small-centered" class="small-6 columns small-centered"><?php echo $cta_copy; ?></p>
                            <div class="row">
                                <div class="small-12 columns text-center">
                                    <a href="<?php echo get_option('cc_freelance_form_page_link'); ?>" title="Freelance Next Button"><button class="blue-btn next-button"><?php echo $cta_button; ?></button></a>
                                </div>
                            </div>
                        </div>
                        <!-- /MAIN CTA -->


                                        <!-- SLIDER -->
                                        <div class="row">
                                            <div id="candidate-section" class="small-12 columns">
                                                <h2 class="top-header" style="margin-bottom: 0rem !important; ">See what our candidates are saying about us</h2>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div id="testimonial-slider" class="small-12 columns text-center">
                                        <?php
                                        ob_start(); 

                                        $unique         = wpsisac_get_unique();
                                        $post_type      = 'slick_slider';
                                        $orderby        = 'post_date';
                                        $order          = 'DESC';       

                                        $args = array ( 
                                            'post_type'      => $post_type, 
                                            'orderby'        => $orderby, 
                                            'order'          => $order,
                                            'posts_per_page' => 6,
                                            'category' => "testimonial"  
                                           
                                        );

                                        if($cat != ""){
                                            $args['tax_query'] = array( array( 'taxonomy' => 'wpsisac_slider-category', 'field' => 'id', 'terms' => $cat) );
                                        }        
                                        $query      = new WP_Query($args);
                                        //var_dump($query);
                                        if ( $query->have_posts() ) :

                                        $post_count = $query->post_count;   
                                        ?>
  
                                        <div class="slider-nav">
                                            <?php while ( $query->have_posts() ) : $query->the_post();
                                            $sliderurl = get_post_meta( get_the_ID(),'wpsisac_slide_link', true );
                                            $sliderimage_size = "thumbnail";

                                            echo    '<div>';
                                            echo    the_post_thumbnail('thumbnail'); 
                                            echo    '</div>';
                                            endwhile;
                                            ?>
                                        </div>
                                        <div class="slider-for">
                                            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                                            <div>
                                                <span class="testimonial-name"><?php the_title(); ?></span>
                                                <span class="testimonial-content"><?php the_content(); ?></span>
                                            </div>
                                            <?php endwhile;
                                            ?>
                                        </div>
                                            <?php
                                            endif;
                                            wp_reset_query(); 
                                        ?>
                                                
                                                



                                                <?php #echo do_shortcode('[slick-carousel-slider slidestoshow="5" category="11" dots="false" arrows="true" autoplay="false" image_size="thumbnail" centermode="true" show_content="true" design="design-7"]');?>

                                            </div>
                                        </div>
                                        <!-- /SLIDER -->

                                    	<!-- FAQ -->
                                    	<div class="row">
											<div id="faq-container" class="small-12 columns">
                                                <div class="small-12 columns text-center">
                                                    <img src="<?php echo $faq_image['url']; ?>" id="faq-image" alt="<?php echo $faq_image['alt']; ?>" />
                                                </div>
												<h2 class="top-header"><?php the_field('freelance_faq_title'); ?></h2>
												<?php echo do_shortcode('[hrf_faqs category="freelance"]'); ?>	
											</div>
                                    	</div>
                                    	<!-- /FAQ -->
                                </article>
                            </div>
                        </div>
                        <?php endwhile;?>
            </div>
        </div>
        <?php get_template_part('template-parts/bottom-cta'); ?>
        <?php get_template_part('template-parts/ribbon' ); ?>
<?php get_footer();