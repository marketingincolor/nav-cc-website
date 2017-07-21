<?php
/**
 * The template for displaying search results pages.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div id="" role="main">

<?php do_action( 'foundationpress_before_content' ); ?>

<article <?php post_class('main-content') ?> id="search-results">

	<!-- SEARCH -->
	<div id="search-bg" class="row-expanded">
		<div class="row">
			<div class="small-12 medium-4 columns medium-centered">
			<?php get_search_form(); ?>
			</div>
		</div>
	</div>
	<!-- /SEARCH -->

	<!-- Query -->
	<div class="content-wrapper">
		<div class="row-expanded">
			<div class="small-12 columns text-center">
			    <h1 class="entry-title top-header"><?php _e( 'Search Results for', 'foundationpress' ); ?> "<?php echo get_search_query(); ?>"</h1>
			</div>
		</div>

		<div class="row post-listing search-page" data-equalizer>
			<div class="small-12 text-center medium-text-justify columns">
				
			<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'template-parts/content', get_post_format() ); ?>
				<?php endwhile; ?>

				<?php else : ?>
					<?php get_template_part( 'template-parts/content', 'none' ); ?>

			<?php endif; ?>

			<?php do_action( 'foundationpress_before_pagination' ); ?>


			</div>
		</div>

			<div class="spinner" style="display:none;">
		  		<div class="bounce1"></div>
				<div class="bounce2"></div>
		  		<div class="bounce3"></div>
			</div>
			<input id="cc_ajax" type="hidden" name="cc_ajax_offset" value="4" >
	</div>
</article>

<?php do_action( 'foundationpress_after_content' ); ?>

</div>
<?php get_template_part('template-parts/ribbon'); ?>
<?php get_footer();