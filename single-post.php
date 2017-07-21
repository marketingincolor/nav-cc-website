<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>
<div class="row">
	<div class="small-12 columns text-center medium-text-justify">
		<?php while ( have_posts() ) : the_post(); ?>

			<!-- Post -->
			<div class="content-wrapper">
				<article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
					<header class="row">
						<h1 class="entry-title text-center top-header"><?php the_title(); ?></h1>
					</header>
					<?php foundationpress_entry_meta( true, true, false ); ?>
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
					<?php //the_post_navigation(); ?>
				</article>

				<?php get_template_part('template-parts/related-posts' ); ?>
			</div>
			<!-- /Post -->
		<?php endwhile;?>
	</div>
</div>
</div>
<?php get_template_part( 'template-parts/ribbon' ); ?>
<?php get_footer();
