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
      <div class="small-12 columns">
       <article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
           <header>
               <h1 class="entry-title top-header"><?php the_title(); ?></h1>
           </header>
           <?php do_action( 'foundationpress_page_before_entry_content' ); ?>
           <div class="entry-content text-justify">
               <?php the_content(); ?>
               <?php edit_post_link( __( 'Edit', 'foundationpress' ), '<span class="edit-link">', '</span>' ); ?>
           </div>
           <div class="small-12 large-6 columns text-center">
              <?php 

              $phone_icon = get_field('cc_contact_phone_icon');
              $email_icon = get_field('cc_contact_email_icon');
              $fb_icon = get_field('cc_contact_facebook_icon');
              $twitter_icon = get_field('cc_contact_twitter_icon');
              $linkedin_icon = get_field('cc_contact_linkedin_icon');

              //PHONE
              if ( null != get_option('cc_phone_number')) :
                if ($phone_icon): ?>
                  <img src="<?php echo $phone_icon['url']; ?>" alt="<?php echo $phone_icon['alt']; ?>" class="scale-down-fifteen" /><br />
                <?php endif; 
                echo '<div class="contact-page-nap">' . '<a href="tel:' . get_option('cc_phone_number') . '" title="Creative Compass Phone Number" class="bold">' . get_option('cc_phone_number') .'</a></div>';
              endif; ?>

              <br />

              <?php

              //EMAIL
              if ( null != get_option('cc_email')):
                if($email_icon): ?>
                  <img src="<?php echo $email_icon['url']; ?>" alt="<?php echo $email_icon['alt']; ?>" class="scale-down-fifteen" /><br />
                <?php endif;
                echo '<div class="contact-page-nap">' . '<a href="mailto:' . get_option('cc_email') . '" title="Creative Compass Email" class="bold">' . get_option('cc_email') .'</a></div>';
              endif; ?>

              <br />

              <!-- SOCIAL LINKS -->
              <p class="top-header" style="font-size:2rem; font-weight: bold; margin-bottom:1rem; ">We're Social</p>
              <div class="small-12 medium-4 columns small-centered">
                <a href="<?php echo get_option('cc_facebook_link'); ?>" title="Creative Compass Facebook"><img src="<?php echo $fb_icon['url']; ?>" alt="<?php echo $fb_icon['alt']; ?>" style="display:inline-block;" /></a>
                <a href="<?php echo get_option('cc_twitter_link'); ?>" title="Creative Compass Twitter"><img src="<?php echo $twitter_icon['url']; ?>" alt="<?php echo $twitter_icon['alt']; ?>"  style="display:inline-block;" /></a>
                <a href="<?php echo get_option('cc_linkedin_link'); ?>" title="Creative Compass LinkedIn"><img src="<?php echo $linkedin_icon['url']; ?>" alt="<?php echo $linkedin_icon['alt']; ?>"  style="display:inline-block;"/></a>
              </div>
           </div>

           <!-- OLD FORM -->
<!--            <div class="small-12 medium-6 columns">
            <form accept-charset="UTF-8" action="https://jg280.infusionsoft.com/app/form/process/818ba24fee2b28c180faf8dece726ca0" class="infusion-form" method="POST">
                <input name="inf_form_xid" type="hidden" value="818ba24fee2b28c180faf8dece726ca0" />
                <input name="inf_form_name" type="hidden" value="Web Form submitted" />
                <input name="infusionsoft_version" type="hidden" value="1.66.0.52" />
                <div class="infusion-field">
                    <label for="inf_field_FirstName">First Name *</label>
                    <input class="infusion-field-input-container" id="inf_field_FirstName" name="inf_field_FirstName" type="text" />
                </div>
                <div class="infusion-field">
                    <label for="inf_field_LastName">Last Name *</label>
                    <input class="infusion-field-input-container" id="inf_field_LastName" name="inf_field_LastName" type="text" />
                </div>
                <div class="infusion-field">
                    <label for="inf_field_Email">Email *</label>
                    <input class="infusion-field-input-container" id="inf_field_Email" name="inf_field_Email" type="text" />
                </div>
                <div class="infusion-field">
                    <label for="inf_field_Phone1">Phone</label>
                    <input class="infusion-field-input-container" id="inf_field_Phone1" name="inf_field_Phone1" type="text" />
                </div>
                <div class="infusion-field">
                    <label for="inf_custom_CCContactFormHowCanWeHelpYou">How Can We Help You *</label>
                    <input class="infusion-field-input-container" id="inf_custom_CCContactFormHowCanWeHelpYou" name="inf_custom_CCContactFormHowCanWeHelpYou" type="text" />
                </div>
                <div class="infusion-submit text-center">
                    <input type="submit" value="Submit" class="blue-btn" style="border:none; padding:1rem 1.5rem;"/>
                </div>
            </form>
           </div>
          <script type="text/javascript" src="https://jg280.infusionsoft.com/app/webTracking/getTrackingCode"></script> -->
           <!-- /OLD FORM -->

           <!-- NEW FORM -->
          <div class="small-12 medium-6 columns">
          <form accept-charset="UTF-8" action="https://jg280.infusionsoft.com/app/form/process/818ba24fee2b28c180faf8dece726ca0" class="infusion-form" method="POST">
              <input name="inf_form_xid" type="hidden" value="818ba24fee2b28c180faf8dece726ca0" />
              <input name="inf_form_name" type="hidden" value="Web Form submitted" />
              <input name="infusionsoft_version" type="hidden" value="1.66.0.53" />
              <div class="infusion-field">
                  <label for="inf_field_FirstName">First Name *</label>
                  <input class="infusion-field-input-container" id="inf_field_FirstName" name="inf_field_FirstName" type="text" />
              </div>
              <div class="infusion-field">
                  <label for="inf_field_LastName">Last Name *</label>
                  <input class="infusion-field-input-container" id="inf_field_LastName" name="inf_field_LastName" type="text" />
              </div>
              <div class="infusion-field">
                  <label for="inf_field_Email">Email *</label>
                  <input class="infusion-field-input-container" id="inf_field_Email" name="inf_field_Email" type="text" />
              </div>
              <div class="infusion-field">
                  <label for="inf_field_Phone1">Phone</label>
                  <input class="infusion-field-input-container" id="inf_field_Phone1" name="inf_field_Phone1" type="text" />
              </div>
              <div class="infusion-field">
                  <label for="inf_custom_HowCanweHelpYou">How Can we Help You? *</label>
                  <textarea cols="24" id="inf_custom_HowCanweHelpYou" name="inf_custom_HowCanweHelpYou" rows="5">
              </textarea></div>
              <div class="infusion-submit text-center">
                  <input type="submit" value="Submit" class="blue-btn" style="border:none; padding:1rem 1.5rem;"/>
              </div>
          </form>
          <script type="text/javascript" src="https://jg280.infusionsoft.com/app/webTracking/getTrackingCode"></script>
          </div>
          <!-- /NEW FORM -->

       </article>
      </div>
    </div>
     <?php endwhile;?>
     </div>
</div>
<?php get_template_part('template-parts/ribbon' ); ?>
 <?php get_footer();
