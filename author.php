<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); 

?>

<div id="" role="main">
	<div class="content-wrapper">
			<article class="main-content">
				<div class="row post-listing" data-equalizer>
					<h1 class="top-header"><?php echo 'By: ' . get_the_author(); ?></h1>
					<?php if ( have_posts() ) : ?>

					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>
						<?php get_template_part( 'template-parts/content', get_post_format() ); ?>
					<?php endwhile; ?>

					<?php else : ?>
						<?php get_template_part( 'template-parts/content', 'none' ); ?>

					<?php endif; // End have_posts() check. ?>


					</div>
			</article>
		</div>
	</div>
</div>
<?php get_template_part('template-parts/ribbon'); ?>
<?php get_footer();
