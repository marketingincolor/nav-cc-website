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

get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>
<?php get_template_part('template-parts/ribbon-mobile'); ?>

 <?php while ( have_posts() ) : the_post(); ?>

    <div id="freelance-form" class="content-wrapper">
        <div class="row">
            <h1 class="top-header text-center" style="margin-bottom:0rem;"><?php echo the_title(); ?></h1>
            <p style="text-align:center;">Please fill out the following form to get started with Creative Compass</p>
            <?php get_template_part('template-parts/freelance-form' ); ?>
        </div>
        <script type="text/javascript" src="https://jg280.infusionsoft.com/app/webTracking/getTrackingCode"></script>
    </div>


     <?php do_action( 'foundationpress_page_before_comments' ); ?>
     <?php comments_template(); ?>
     <?php do_action( 'foundationpress_page_after_comments' ); ?>

<?php endwhile;?>

<?php do_action( 'foundationpress_after_content' ); ?>
<?php #get_sidebar(); ?>

<?php get_template_part( 'template-parts/ribbon' ); ?>
<?php get_footer(); ?>