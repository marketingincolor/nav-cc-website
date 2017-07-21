<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

if ( !is_page('front-page') ){
	$class = 'footer-home-container';
}
else {
	$class = 'footer-container';
}
?>
		<!-- CONTACT US -->
		<div class="row" data-equalizer>
			<div id="contact-phone" class="large-5 columns end text-center uncollapse" data-equalizer-watch>
        <a href="#" title="Contact Creative Compass" style="position:relative;" data-equalizer-watch>
          <?php get_template_part('template-parts/contact-button'); ?>
        </a>
					<div id="cta-phone"><a href="tel: <?php echo get_option('cc_phone_number'); ?>" ><?php echo get_option('cc_phone_number'); ?></a></div>
			</div>
		</div>
		<!-- /CONTACT US -->
		</section>


			<footer id="footer">


			<!-- lINKS -->
			<div class="row">
				<div id="" class="small-10 small-offset-1 text-center large-text-left large-offset-0 large-12 columns end">
					<?php cc_footer_menu(); ?>
				</div>
			</div>
			<!-- /LINKS -->

			<div class="row" data-equalizer>
					<!-- SOCIAL -->
					<div id="social-links-container" class="small-10 small-offset-1 text-center large-offset-0 large-text-left large-6 columns" data-equalizer-watch>
						<?php if ( null != get_option( 'cc_facebook_link' )) : ?>
						<a href="<?php echo get_option('cc_facebook_link' ); ?>" title="<?php echo get_bloginfo('name') . ' Facebook';?>" target="_blank">
							<img class="social-link" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/facebook.jpg'; ?>" alt="Creative Compass Facebook Icon"/>
						</a>
						<?php endif; ?>
						<?php if ( null != get_option( 'cc_twitter_link' )) : ?>
						<a href="<?php echo get_option('cc_twitter_link' ); ?>" title="<?php echo get_bloginfo('name') . ' Twitter';?>" target="_blank">
							<img class="social-link" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/twitter.jpg'; ?>" alt="Creative Compass Twitter Link"/>
						</a>
						<?php endif; ?>	
						<?php if ( null != get_option( 'cc_google_link' )) : ?>
						<a href="<?php echo get_option('cc_google_link' ); ?>" title="<?php echo get_bloginfo('name') . ' Google+';?>" target="_blank">
							<img class="social-link" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/google.jpg'; ?>" alt="Creative Compass Google Link"/>
						</a>
						<?php endif; ?>
						<?php if ( null != get_option( 'cc_linkedin_link' )) : ?>
						<a href="<?php echo get_option('cc_linkedin_link' ); ?>" title="<?php echo get_bloginfo('name') . ' LinkedIn';?>" target="_blank">
							<img class="social-link" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/linkedin.jpg'; ?>" alt="Creative Compass LinkedIn Link"/>
						</a>
						<?php endif; ?>
						<?php if ( null != get_option( 'cc_youtube_link' )) : ?>
						<a href="<?php echo get_option('cc_youtube_link' ); ?>" title="<?php echo get_bloginfo('name') . ' YouTube';?>" target="_blank">
							<img class="social-link" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/youtube.jpg'; ?>" alt="Creative Compass YouTube Link"/>
						</a>
						<?php endif; ?>	
					</div>		
					<!-- /SOCIAL -->

          <!-- CONTACT US DESKTOP -->
<!--           <div id="contact-desktop-header" class="large-offset-0 medium-6 columns text-center medium-text-right float-right" data-equalizer-watch>
              <a id="contact-link" href="#" title="Creative Compass Contact Button" style="">
                <?php #get_template_part('template-parts/contact-button'); ?>
              </a>
              <span class="bottom-arrow" ></span>
              <div id="cta-phone" style="line-height: inherit;"><a href="tel: <?php echo get_option('cc_phone_number'); ?>" title="<?php echo get_bloginfo('name') . ' Phone Number';?>" data-equalizer-watch><?php #echo get_option('cc_phone_number'); ?></a></div>
          </div> -->
          <!-- /CONTACT US DESKTOP -->
      <div id="contact-desktop-header" class="large-offset-0 medium-6 columns text-center medium-text-right float-right" data-equalizer-watch>
            <div class="row">
              <div class="large-12" style="position: absolute; top:50%; transform: translateY(-50%);">
                <div class="large-5 large-offset-2 columns">
                    <a href="<?php echo get_option('cc_contact_page_link') ?>" title="Creative Compass Contact Button" style="" id="top-contact-link">
                      <?php get_template_part('template-parts/contact-button'); ?>
                    </a>
                </div>
                <div class="large-5 columns" style="">
                  <div id="cta-phone">
                    <a href="tel: <?php echo get_option('cc_phone_number'); ?>" title="<?php echo get_bloginfo('name') . ' Phone Number';?>" data-equalizer-watch><?php echo get_option('cc_phone_number'); ?></a>
                  </div>
                  </div> 
                </div> 
            </div>
          </div>
			</div>

			<div class="row-expanded">
				<div class="small-12 columns small-centered text-center">
					<div id="cc_footer_line">
						<?php echo the_date('Y') . " by Naviga Recruiting & Executive Search | All Rights Reserved"; ?>
					</div>
				</div>
			</div>
			</footer>

		<?php do_action( 'foundationpress_layout_end' ); ?>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
		</div><!-- Close off-canvas wrapper inner -->
	</div><!-- Close off-canvas wrapper -->
</div><!-- Close off-canvas content wrapper -->
<?php endif; ?>


<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>


<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(). '/assets/slick/slick.min.js'; ?>"></script>

<!-- Script for Slick Slider on Home Page -->
<script type="text/javascript">
    jQuery(document).ready(function($){
  $('.your-class').slick({
      slidesToShow: 5,
      slidesToScroll: 1,
      arrows:true,
      prevArrow: $('.prev'),
      nextArrow: $('.next'),
      responsive: [
    {
      breakpoint: 1025,
      settings: {
        slidesToShow: 5,
        slidesToScroll: 1,
        infinite: true,
      }
    },
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
        infinite: true
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
  });
});
</script>
<!-- /Script for Slick Slider on Home Page -->

<!-- Script for Slick Slider on Home Page -->
<script type="text/javascript">
    jQuery(document).ready(function($){
  $('.freelance-testimonials').slick({
      centerMode: true,
      centerPadding: '60px',
      slidesToShow: 5,
      slidesToScroll: 1,
      arrows:true,
      prevArrow: $('.prev'),
      nextArrow: $('.next'),
      responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 5,
        slidesToScroll: 1,
        infinite: false,
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
  });

 $('.slider-for').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  asNavFor: '.slider-nav'
});

$('.slider-nav').slick({
  slidesToShow: 5,
  slidesToScroll: 1,
  asNavFor: '.slider-for',
  dots: false,
  arrows: true,
  centerMode: true,
  focusOnSelect: true,
  responsive: [
{
breakpoint: 1024,
settings: {
  slidesToShow: 3,
  slidesToScroll: 1,
}
},
{
breakpoint: 600,
settings: {
  slidesToShow: 1,
  slidesToScroll: 1
}
},
{
breakpoint: 480,
settings: {
  slidesToShow: 1,
  slidesToScroll: 1
}
}
// You can unslick at a given breakpoint now by adding:
// settings: "unslick"
// instead of a settings object
]

});
    
});
</script>
<!-- /Script for Slick Slider on Home Page -->


<!-- Script for back button -->
<?php if ( is_single() ) : ?>
<script>
	function goBack() { window.history.back() }
</script>
<?php endif; ?>
<!-- /Script for back button -->




</body>
</html>