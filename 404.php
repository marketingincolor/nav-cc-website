<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div class="row">
	<div class="small-12 text-center" role="main">

		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<header>
				<h1 class="entry-title top-header" style="font-size:20rem;"><?php _e( '404', 'creative-compass' ); ?></h1>
			</header>
			<div class="entry-content">

<!-- 				<ul>
					<li>
						<?php
							/* translators: %s: home page url */
							// printf( __(
							// 	'Return to the <a href="%s">home page</a>', 'foundationpress' ),
							// 	home_url()
							// );
						?>
					</li>
					<li><?php #_e( 'Click the <a href="javascript:history.back()">Back</a> button', 'foundationpress' ); ?></li>
				</ul> -->
			</div>
		</article>

	</div>
	<?php #get_sidebar(); ?>
</div>
<?php get_template_part( 'template-parts/ribbon' ); ?>
<?php get_footer();
