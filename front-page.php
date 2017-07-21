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
$image1 = get_field('image_one');
$image2 = get_field('image_two');
$image3 = get_field('image_three');

$header_img_phone = get_stylesheet_directory_uri() . '/assets/images/slider-phone.jpg';
$header_img = get_stylesheet_directory_uri() . '/assets/images/slider.jpg';
get_header(); ?>
    

    <?php
    //$phone_img = get_stylesheet_directory_uri() . '/assets/images/slider-phone.jpg';
    //var_dump($phone_img);

    ?>
    <!-- ROUTING WIDGET PHONE-->
    <?php get_template_part('template-parts/routing-widget-phone' ); ?>
    <!-- /ROUTING WIDGET PHONE-->

    <!-- ROUTING WIDGET DESKTOP -->
    <?php get_template_part('template-parts/routing-widget-desktop'); ?>
    <!-- /ROUTING WIDGET DESKTOP -->
    
    <!-- ABOUT US SECTION -->
    <div class="content-wrapper" role="main">
        <div class="row">
            <?php while ( have_posts() ) : the_post(); ?>
                <article <?php post_class( 'main-content front-article-parent') ?> id="post-
                    <?php the_ID(); ?>">
                        <div class=" small-12 text-center large-12 large-offset-0 columns">
                            <header>
                                <h1 class="entry-title top-header"><?php the_title(); ?></h1>
                            </header>
                            <div class="entry-content front-article-child"></div>
                            <?php the_content(); ?>
                        </div>
                </article>
                <?php endwhile;?>
        </div>

        <?php get_template_part( 'template-parts/freelance-list' ); ?>

    </div>
    <!-- /ABOUT US SECTION -->

    <!-- CREDIBILITY SECTION -->
    <div id="cc_gray_full" class="">
        <div class="row">
            <div class="cred-container small-12 small-center text-center medium-text-left medium-4 medium-offset-0 columns">
                <?php if( !empty($image1) ): ?>
                    <img src="<?php echo $image1['url']; ?>" alt="<?php echo $image1['alt']; ?>" />
                <?php endif; ?>                  
                <h3 style="text-transform:uppercase;"><?php the_field('title_one');?></h3>
                <p><?php the_field('paragraph_one'); ?></p>
            </div>
            <div class="cred-container small-12 small-center text-center medium-text-left medium-4 medium-offset-0 columns">
                <?php if( !empty($image2) ): ?>
                    <img src="<?php echo $image2['url']; ?>" alt="<?php echo $image2['alt']; ?>" />
                <?php endif; ?>                       
                <h3 style="text-transform:uppercase;"><?php the_field('title_two');?></h3>
                <p><?php the_field('paragraph_two'); ?></p>
            </div>
            <div class="cred-container small-12  small-center text-center medium-text-left medium-4 medium-offset-0 end columns">
                <?php if( !empty($image3) ): ?>
                    <img src="<?php echo $image3['url']; ?>" alt="<?php echo $image3['alt']; ?>" />
                <?php endif; ?>                      
                <h3 style="text-transform:uppercase;"><?php the_field('title_three');?></h3>
                <p><?php the_field('paragraph_three'); ?></p>
            </div>
        </div>
    </div>

    <!-- /CREDIBILITY SECTION -->

    <!-- CREDIBILITY SLIDER -->
    <div class="row" data-equalizer>
<!--         <div class="small-2 medium-1 columns" style="line-height:182px;" data-equalizer-watch>
            <span class="prev"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/prev.jpg';?>" alt="Previous Button"></span>
        </div> -->
        <div class="small-12 columns text-center">
            <div id="front-page-slider" >
                <?php echo do_shortcode('[slick-carousel-slider slidestoshow="5" category="10" dots="false" arrows="true" autoplay="false" image_size="thumbnail" centermode="false"] ' ); ?>
            </div>
        </div>
<!--         <div class="small-2 medium-1 columns text-right" style="line-height:182px;" data-equalizer-watch>
            <span class="next"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/next.jpg';?>" alt="Previous Button"></span>
        </div> -->
    </div>
    <!-- /CREDIBILITY SLIDER -->
    <?php get_template_part('template-parts/ribbon' ); ?>
<?php get_footer();