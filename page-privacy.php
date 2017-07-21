<?php

 get_header(); ?>
 <?php get_template_part('template-parts/ribbon-mobile'); ?>
 <style>
 h4 { font-weight:bold; margin-bottom:0rem; font-size:1.25rem;}
 h3 {
    color: #D45D00;
    font-size: 1.5rem;
    text-transform: uppercase;
    padding: 1rem 0rem 0rem;
    margin-bottom: 0rem;
    font-weight:bold;
    margin-bottom:1rem;
}
h2 { padding-top:2rem; font-size:1.75rem; }
#iub-pp-container > div > p { text-align: left !important; }

</style>
 <?php while ( have_posts() ) : the_post(); ?>
   <div id="main-content" class="privacy-page" role="main">

   <article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
    <div class="content-wrapper" style="padding-top:2rem;">
         <div class="row">
             <h1 class="entry-title small-12 text-center small-centered large-text-left columns top-header text-center" style="padding-bottom:2rem;"><?php the_title(); ?></h1>
         </div>
         <div class="entry-content row">
             <div class="small-12 columns">
             <?php the_content(); ?>
             <?php edit_post_link( __( 'Edit', 'foundationpress' ), '<span class="edit-link">', '</span>' ); ?>
             </div>
         </div>
      
    </div>

  </div>


      </div>


      <?php get_template_part('template-parts/ribbon'); ?>
       <footer>
          <p><?php the_tags(); ?></p>
       </footer>
   </article>
 <?php endwhile;?>
 </div>
 <?php get_footer();
