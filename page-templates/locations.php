<?php
/*
Template Name: Locations 
Purpose: For markets pages. Note the differance in header to get optimized images and keywords into template.
Author: Doe
Date: 06/15/2017
 */

$page = $wp_query->queried_object->post_name;
//var_dump($page);

$location_img = get_field('location_image'); 
$right_img = get_field('location_features_image');
$left_img = get_field('location_benefits_image');
get_header(); ?>

<?php #get_template_part( 'template-parts/featured-image' ); ?>
<div id="page-about" role="main">
    
    <!-- ROUTING WIDGET PHONE-->
    <?php get_template_part('template-parts/routing-widget-location-phone' ); ?>
    <!-- /ROUTING WIDGET PHONE-->

    <!-- ROUTING WIDGET DESKTOP -->
    <?php get_template_part('template-parts/routing-widget-location-desktop'); ?>
    <!-- /ROUTING WIDGET DESKTOP -->
    
    <div class="content-wrapper" style="padding-bottom:0rem;">


        <?php do_action( 'foundationpress_before_content' ); ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <div class="row">
                    <div class="small-12 columns">
                        <article <?php post_class( 'main-content') ?> id="post-
                            <?php the_ID(); ?>">
                                <header>
                                    <h1 class="entry-title top-header"><?php the_title(); ?></h1>
                                </header>
                        </article>
                    </div>
                </div>

                <!-- TOP ROW -->
                <div class="row">
                    <?php if( get_field('location_image') != null): ?>
                        <div class="small-12 medium-6 columns text-justify">
                            <img src="<?php echo $location_img["url"]; ?>" class=""/>
                        </div>
                        <div class="small-12 medium-6 columns text-justify">
                            <?php 
                                echo '<div style="margin-bottom:3rem;">'; 
                                the_content(); 
                                echo '</div>';
                            ?>

                        </div>
                        <?php else : ?>
                            <div class="small-12 columns text-justify">
                                <?php
                                    echo '<div style="margin-bottom:3rem;">';
                                    the_content(); 
                                    echo '</div>';
                                ?>
                            </div>
                            <?php endif; ?>
                </div>
                <!-- /TOP ROW -->

                <!-- MIDDLE ROW -->
                <div class="row">
                        <div class="small-12 medium-6 columns text-justify">
                            <?php 
                                if( get_field('location_benefits_image') ) :
                                    echo '<div class="text-center location-icon">';
                                    echo '<img src="'. $left_img["url"] . '" class=""/>';
                                    echo '</div>';
                                endif;
                                if( get_field('location_benefits_title') ) :
                                    echo '<div style="min-height:65px;">';
                                    echo '<h2 class="text-center">'.get_field('location_benefits_title') . '</h2>';
                                    echo '</div>';
                                endif;
                                if( get_field('location_benefits_content') ) :
                                    the_field('location_benefits_content');
                                endif;
                            ?>
                        </div>
                        <div class="small-12 medium-6 columns text-justify">
                            <?php 
                                if( get_field('location_features_image') ) :
                                    echo '<div class="text-center location-icon">';
                                    echo '<img src="'. $right_img["url"] . '" class=""/>';
                                    echo '</div>';
                                endif;
                                if( get_field('location_features_title') ) :
                                    echo '<div style="min-height:65px;">';
                                    echo '<h2 class="text-center">'.get_field('location_features_title') . '</h2>';
                                    echo '</div>';
                                endif;
                                if( get_field('location_features_content') ) :
                                    the_field('location_features_content');
                                endif;
                            ?>
                        </div>
                </div>
                <!-- /MIDDLE ROW -->

                <!-- FREELANCE LIST -->
                <?php get_template_part( 'template-parts/freelance-list' ); ?>
                <!-- /FREELANCE LIST -->

                <!-- MAP -->
                <div id="map">
                    <?php echo do_shortcode( get_field('location_map') ); ?>
                </div>
                <!-- /MAP -->

                <?php endwhile;?>
    </div>
</div>
<?php get_template_part('template-parts/ribbon' ); ?> <?php get_footer();