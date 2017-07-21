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

$cta_header = get_field('middle_cta_header_employer');
$cta_button = get_field('middle_cta_button_employer');
$cta_copy = get_field('middle_cta_copy_employer');

 ?>
    <?php get_template_part( 'template-parts/cc-featured-image' ); ?>
        <div id="page-about" role="main">
            <div class="content-wrapper">
                    <?php while ( have_posts() ) : the_post(); ?>
                        <div class="row">
                            <div class="small-12 columns">
                                <?php

                                $top_image = get_field('top_image');
                                $faq_image = get_field('faq_image');
                                $employers_sub_title = get_field('employers_sub_title');

                                //talk
                                $talk_image = get_field('talk_image');
                                $talk_title = get_field('talk_title');
                                $talk_icon = get_field('talk_icon');
                                $talk_content = get_field('talk_content');

                                // match
                                $match_image = get_field('match_image');
                                $match_title = get_field('match_title');
                                $match_icon = get_field('match_icon');
                                $match_content = get_field('match_content');

                                // work
                                $work_image = get_field('work_image');
                                $work_title = get_field('work_title');
                                $work_icon = get_field('work_icon');
                                $work_content = get_field('work_content');

                                // choose
                                $choose_image = get_field('choose_image');
                                $choose_title = get_field('choose_title');
                                $choose_icon = get_field('choose_icon');
                                $choose_content = get_field('choose_content');


                                ?>
                                    <div class="row">
                                        <div class="small-12 columns text-center">
                                        	<!-- TOP CONTENT AREA -->
                                        	<img src="<?php echo $top_image["url"]; ?>" alt="Creative Compass Employer Page" class="top-icon"/>
                                            <header>
                                                <h1 class="entry-title top-header" style="margin-bottom:0rem;"><?php the_title(); ?></h1>
                                            </header>
                                            <div class="row">
                                                <div class="small-12 columns text-center">
                                                    <h2 style="margin-bottom:2rem;"><?php echo $employers_sub_title; ?></h2>
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
                                    
                                            <div id="process-block-employer" class="row" data-equalizer>



<!--                                                         <div class="emp-steps">
                                                            <div class="icon">
                                                                <img src="<?php echo $work_icon['url']; ?>" alt="<?php echo $work_icon['alt']; ?> " style="display:inline-block; float:left; margin: 0rem 1rem 0rem 0rem;" />
                                                            </div>
                                                            <div class="title">
                                                                <?php echo $work_title; ?>
                                                                
                                                            </div>
                                                        </div> -->


                                        <!-- TALK -->
                                    	<div class="small-12 medium-6 large-3 columns text-justify">
						                	<img src="<?php echo $talk_image['url']; ?>" alt="<?php echo $talk_image['alt']; ?>" />
                                            <div class="steps-container">
                                                <div class="emp-steps">
                                                    <div class="icon">
	                                                   <img src="<?php echo $talk_icon['url']; ?>" alt="<?php echo $talk_icon['alt']; ?>" />
                                                    </div>
                                                    <div class="title">
                                                        Talk
                                                    </div>
                                                </div>
                                                <p class="emp-steps-content"><?php echo $talk_content; ?></p>
                                            </div>
                                    	</div>
                                        <!-- /TALK -->

                                        <!-- MATCH -->
                                    	<div class="small-12 medium-6 large-3 columns text-justify">
						                	<img src="<?php echo $match_image['url']; ?>" alt="<?php echo $match_image['alt']; ?>" />
                                            <div class="steps-container">
                                                    <div class="emp-steps">
                                                        <div class="icon">
                                                            <img src="<?php echo $match_icon['url']; ?>" alt="<?php echo $match_icon['alt']; ?>" />
                                                        </div>
                                                        <div class="title">
                                                            Match
                                                        </div>
                                                    </div>
                                                    <p class="emp-steps-content"><?php echo $match_content; ?></p>
                                            </div>
                                    	</div>
                                        <!-- /MATCH -->

                                        <!-- WORK -->
                                        <div class="small-12 medium-6 large-3 columns text-justify">
                                            <img src="<?php echo $work_image['url']; ?>" alt="<?php echo $work_image['alt']; ?>" />
                                            <div class="steps-container">
                                                <div class="emp-steps">
                                                    <div class="icon">
                                                        <img src="<?php echo $work_icon['url']; ?>" alt="<?php echo $work_icon['alt']; ?>" />
                                                    </div>
                                                    <div class="title">
                                                        Work
                                                    </div>
                                                </div>
                                                <p class="emp-steps-content"><?php echo $work_content; ?></p>
                                            </div>
                                        </div>
                                        <!-- /WORK -->

                                        <!-- Choose -->
                                        <div class="small-12 medium-6 large-3 columns text-justify">
                                            <img src="<?php echo $choose_image['url']; ?>" alt="<?php echo $choose_image['alt']; ?>" />
                                            <div class="steps-container">
                                                <div class="emp-steps">
                                                    <div class="icon">
                                                        <img src="<?php echo $choose_icon['url']; ?>" alt="<?php echo $choose_icon['alt']; ?>" />
                                                    </div> 

                                                    <div class="title">
                                                        Choose
                                                    </div>
                                                </div>
                                                <p class="emp-steps-content"><?php echo $choose_content; ?></p>
                                            </div>
                                        </div>
                                        <!-- /Choose -->
                                	</div>
                                </div>
                            </div>

                        
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
                                <p style="color: #ffffff; text-align: center;" class="small-12 medium-8 columns small-centered"><?php echo $cta_copy; ?></p>
                                <div class="row">
                                    <div class="small-12 columns text-center">
                                        <a href="<?php echo get_option('cc_employer_form_page_link'); ?>" title="Creative Compass Employer Next Button"><button class="blue-btn next-button"><?php echo $cta_button; ?></button></a>
                                    </div>
                                </div>
                            </div>
                        	<!-- /MAIN CTA -->

                        	<!-- FAQ -->
                        	<div id="faq-wrapper" class="row">
								<div class="small-12 columns text-center">
                                    <img src="<?php echo $faq_image['url']; ?>" alt="<?php echo $faq_image['alt']; ?>" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="small-12 columns text-center">                                            
									<h2 id="faq-title" class="top-header"><?php the_field('faq_title'); ?></h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="small-12 columns">
									<?php echo do_shortcode('[hrf_faqs category="careers"]'); ?>	
								</div>
                        	</div>
                        	<!-- /FAQ -->

                <?php endwhile;?>
            </div>
        </div>
        <?php get_template_part('template-parts/bottom-cta' ); ?>
        <?php get_template_part('template-parts/ribbon' ); ?>
<?php get_footer();