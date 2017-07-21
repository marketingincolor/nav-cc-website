<?php

 get_header(); ?>
 <div id="main-content" role="main">
 <?php while ( have_posts() ) : the_post(); ?>
   <article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
       <header class="row">
           <h1 class="entry-title small-8 large-10 large-offset-1 text-center small-centered large-text-left columns"><?php the_title(); ?></h1>
       </header>
       <div class="entry-content row">
           <div class="small-10 small-offset-1 columns">
           <?php the_content(); ?>
           <?php edit_post_link( __( 'Edit', 'foundationpress' ), '<span class="edit-link">', '</span>' ); ?>
           </div>
       </div>


      <div class="row">
        <div class="small-12 medium-6 columns">
         <!-- PHONE -->
          <div id="phone" class="small-12 small-centered medium-6 medium-offset-0 medium-uncentered text-center columns">
            <h2>Phone</h2>
            <?php echo get_option('cc_phone_number'); ?>
          </div>
         <!-- /PHONE -->

         <!-- EMAIL -->
          <div class="small-12 small-centered text-center medium-6 medium-offset-0 medium-uncentered columns">
          <h2>Email</h2>
          <?php echo get_option('cc_email'); ?>
          </div>
        <!-- /EMAIL -->
      </div>

      <!-- FORM -->
        <div class="small-12 medium-6 medium-offset-0 columns">
        <div id="form" style="border:1px solid red; height: 200px;">
        FORM HERE
        </div>  
        </div>
      <!-- /FORM -->
    </div>


      </div>



       <footer>
          <p><?php the_tags(); ?></p>
       </footer>
   </article>
 <?php endwhile;?>
 </div>
 <?php get_footer();
