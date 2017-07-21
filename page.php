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

 <div id="" role="main">

 <?php do_action( 'foundationpress_before_content' ); ?>
 <?php while ( have_posts() ) : the_post(); ?>
  <div class="content-wrapper">
    <div class="row">
    <div class="small-12 columns text-justify"
>     <article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
         <header>
            <div class="row">
              <div class="small-12 text-center">
                <h1 class="entry-title top-header"><?php the_title(); ?></h1>
              </div>
            </div>
         </header>
         <?php do_action( 'foundationpress_page_before_entry_content' ); ?>
         <div class="entry-content">
             <?php the_content(); ?>
             <?php edit_post_link( __( 'Edit', 'foundationpress' ), '<span class="edit-link">', '</span>' ); ?>
         </div>
         <footer>
            <?php
              wp_link_pages(
                array(
                  'before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ),
                  'after'  => '</p></nav>',
                )
              );
            ?>
            <p><?php the_tags(); ?></p>
         </footer>
         <?php do_action( 'foundationpress_page_before_comments' ); ?>
         <?php comments_template(); ?>
         <?php do_action( 'foundationpress_page_after_comments' ); ?>
     </article>
    </div>
    </div>
  </div>
 <?php endwhile;?>

 <?php do_action( 'foundationpress_after_content' ); ?>
 <?php #get_sidebar(); ?>

 </div>
<?php get_template_part( 'template-parts/ribbon' ); ?>
 <?php get_footer();
