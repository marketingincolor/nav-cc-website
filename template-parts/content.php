<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

<div id="post-container" class="small-12 medium-6 text-center medium-text-justify columns end" data-equalizer-watch>
	<div id="post-<?php the_ID(); ?>" <?php post_class('blogpost-entry'); ?>>
		<header>
		<h2 class="blog-header"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<div id="cc-blog-image">
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('cc-blog'); ?></a>
		</div>
		<?php foundationpress_entry_meta( true, true, false ); ?>
		</header>
		<div class="entry-content">
			<?php 
				the_excerpt( __( 'Read Less', TRUE ) );
			?>
		</div>
		<footer>
			<?php $tag = get_the_tags(); if ( $tag ) { ?><p><?php the_tags(); ?></p><?php } ?>
		</footer>
	</div>
</div>