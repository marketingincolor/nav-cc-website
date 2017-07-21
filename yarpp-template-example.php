<?php 
/*
YARPP Template: Creative Compass
Author: Adam Doe
Description: YARPP Template for Creative Compass
*/
?>
<!-- Button -->
	<div class="row">
		<div class="large-12 columns text-center">
			<button id="go-back-btn" class="blue-btn" onclick="goBack()">Go Back</button>
		</div>
	</div>
<!-- /Button -->

<h2 class="top-header">You May Also Like</h2>
<?php if (have_posts()):?>
	
	<div class="row">
	<?php while (have_posts()) : the_post(); ?>
		<div class="small-12 medium-6 columns">
			<h3 class="blog-header" style="text-transform:uppercase !important;"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3><!-- (<?php the_score(); ?>)-->
			<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php echo get_the_post_thumbnail(); ?></a>
			<?php foundationpress_entry_meta( true, true, false ); ?>
			<?php the_excerpt(__('Read more')); ?>
		</div>
	<?php endwhile; ?>
	</div>
<?php else: ?>
<p>No related posts.</p>
<?php endif; ?>
