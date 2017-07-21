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

 <?php get_template_part( 'template-parts/cc-featured-image' ); ?>
    <div id="page-about" role="main">
      <div class="content-wrapper">

     <?php do_action( 'foundationpress_before_content' ); ?>
     <?php while ( have_posts() ) : the_post(); ?>
    <div class="row">  
      <div id="" class="small-12 columns">
       <article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
           <header>
               <h1 class="entry-title top-header"><?php the_title(); ?></h1>
           </header>
           <?php do_action( 'foundationpress_page_before_entry_content' ); ?>
           <div class="entry-content text-justify">
               <?php the_content(); ?>
               <?php edit_post_link( __( 'Edit', 'foundationpress' ), '<span class="edit-link">', '</span>' ); ?>
           </div>
       </article>
      </div>
    </div>
     <?php endwhile;?>
         <?php get_template_part( 'template-parts/freelance-list' ); ?>

     </div>
</div>
<?php get_template_part('template-parts/ribbon' ); ?>
 <?php get_footer();
