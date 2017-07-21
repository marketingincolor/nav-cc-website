<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
/**
 * Desktop navigation - right top bar
 *
 * @link http://codex.wordpress.org/Function_Reference/wp_nav_menu
 */
if ( ! function_exists( 'foundationpress_top_bar_r' ) ) {
	function foundationpress_top_bar_r() {
		wp_nav_menu( array(
			'container'      => false,
			'menu_class'     => 'dropdown menu large-8 columns',
			'items_wrap'     => '<ul id="%1$s" class="%2$s desktop-menu" data-dropdown-menu data-equalizer-watch>%3$s</ul>',
			'theme_location' => 'top-bar-r',
			'depth'          => 3,
			'fallback_cb'    => false,
			'walker'         => new Foundationpress_Top_Bar_Walker(),
		));
	}
}


/**
 * Get title bar responsive toggle attribute
 */

if ( ! function_exists( 'foundationpress_title_bar_responsive_toggle' ) ) :
function foundationpress_title_bar_responsive_toggle() {
	if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) === 'topbar' ) {
		echo 'data-responsive-toggle="mobile-menu"';
	}
}
endif;


/**
 * Get mobile menu ID
 */

if ( ! function_exists( 'foundationpress_mobile_menu_id' ) ) :
function foundationpress_mobile_menu_id() {
	if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) {
		echo 'off-canvas-menu';
	} else {
		echo 'mobile-menu';
	}
}
endif;

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>

	<?php if (ENVIRONMENT_MODE == 1) : ?>
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-WRHPJ3X');</script>
	<!-- End Google Tag Manager -->
	
	<?php endif; ?>
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,700i" rel="stylesheet">	<script src="//code.jquery.com/jquery-1.12.4.js"> </script>
  	<script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri() . '/assets/slick/slick.css';?>"/>
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri() . '/assets/slick/slick-theme.css';?>"/>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<?php wp_head(); ?>

	</head>
	<body <?php body_class(); ?>>

	<?php if (ENVIRONMENT_MODE == 1) : ?>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WRHPJ3X"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<?php endif; ?>
	
	<header id="masthead" class="site-header no-js" role="banner">

			<!-- HEADER USED ON MOBILE -->
			<div id="header-mobile">
				<div class="mobile-wrap">
					<div class="site-top-bar top-bar" data-responsive-toggle="mobile-menu" data-hide-for="large">
						<div class="title-bar-left" data-equalizer>
							<div class="row">
								<span class="site-title small-8 medium-4 medium-text-center large-text-left columns" data-equalizer-watch>
									<div class="home top-bar" data-equalizer-watch><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" title="Creative Compass"><img src="<?php echo get_theme_mod('cc_logo'); ?>" id="logo" /></a></div>
								</span>
								<button class="menu-toggle small-4 columns" type="button" data-toggle="<?php foundationpress_mobile_menu_id(); ?>" data-equalizer-watch>
								<div id="menu-toggle">
								    <div class="button" id="toggle" style="background-color:transparent">
								      <span class="top"></span>
								      <span class="middle_1"></span>
								      <span class="middle_2"></span>
								      <span class="bottom"></span>
								    </div>
								</div>
								</button>
							</div>
						</div>
					</div>


				<!-- RIBBON  -->
				<?php get_template_part( 'template-parts/ribbon-mobile' ); ?>
				<!-- /RIBBON -->
				</div>
				<nav class="site-navigation top-bar" role="navigation">
					<div class="top-bar">

						<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) === 'topbar' ) : ?>
							<?php get_template_part( 'template-parts/mobile-top-bar' ); ?>

						<?php endif; ?>
					</div>

					<!-- CONTACT US MOBILE -->
<!-- 					<div id="contact-phone-spacer" style="display:none;"></div>
 -->					<div id="contact-phone-header" class="large-5 columns end text-center uncollapse" >
						<div id="contact-btn" class="row">
							<a href="<?php echo get_option('cc_contact_page_link'); ?>" title="Contact Creative Compass">
<!-- 								<button id="contact-btn" class="small-8 medium-4 columns orange-btn small-centered">
									<i class="fa fa-envelope" aria-hidden="true" style="display:inline-block;"></i>Contact Us
								</button> -->
								<?php get_template_part('template-parts/contact-button'); ?>
								<div id="cta-phone" class="small-12 columns small-centered">
									<a href="tel: <?php echo get_option('cc_phone_number'); ?>" ><?php echo get_option('cc_phone_number'); ?></a>
								</div>
							</a>
						</div>
					</div>
					<!-- /CONTACT US MOBILE -->
				</nav>
				<!-- /HEADER USED ON MOBILE -->

				<!-- HEADER USED ON DESKTOPS -->
				<div id="header-desktop" class="row" data-equalizer>

					<!-- LOGO -->
					<div class="home small-12 medium-12 large-3 medium-text-center large-text-left columns" data-equalizer-watch>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_theme_mod('cc_logo'); ?>" id="logo" /></a>
					</div>
					<!-- /LOGO -->


					<!-- CONTACT US DESKTOP -->
					<div id="contact-desktop-header" class="large-offset-3 medium-6 columns text-center medium-text-right float-right" data-equalizer-watch>
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
					<!-- /CONTACT US DESKTOP -->
				</div>
				<!-- /HEADER USED ON DESKTOPS -->
				
			</div>
			
			<!-- MARKETS MENU -->
			<div id="large-nav" class="">
				<nav id="site-navigation" class="main-navigation row" role="navigation" data-equalizer>
				<?php foundationpress_top_bar_r(); ?>
				
				<div class="large-3 columns">
					<div id="skewed-orange-nav" class="large-8 columns" style=""></div>
					<div id="skewed-gold-nav" class="large-4 columns" style=" background-color: #fbb117; transform: skewX(-25deg) translateX(-25%); transform-origin: 0% 100%;">
					</div>
					<div style="position:relative;">
						<?php cc_markets_menu(); ?>
						<div id="arrow" class="dropdown-menu menu desktop-menu" style="position:absolute; left: 75%; top: 20%;">
							<img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/arrow.jpg'?>" alt="Dropdown Arrow" />
						</div>
					</div>
				</div>

				</nav>
			</div>
			<!-- /MARKETS MENU -->



					<?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
		</header>
	<section class="container">
