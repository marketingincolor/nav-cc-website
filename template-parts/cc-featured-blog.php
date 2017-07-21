<?php
?>
<div class="small-12 text-center medium-text-justify columns">
	<div class="small-12 end">
		<header>
			<h2 class="blog-header"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		</header>
		<div id="cc-blog-image" style="min-width:100%; ">
			<a href="<?php the_permalink(); ?>">
			<?php 
			if(has_post_thumbnail()) {                    
				$image_src = wp_get_attachment_image_src( get_post_thumbnail_id(),'full' );
					echo '<img src="' . $image_src[0]  . '" width="100%"  />';
			} ?>
			</a>
		</div>
		<?php foundationpress_entry_meta( true, true, false ); ?>
		<div id="post-<?php the_ID(); ?>" <?php post_class('blogpost-entry'); ?>>
			<div class="entry-content">
				<?php the_content( __( 'Read more' )); ?>
			</div>
			<footer>
				<?php $tag = get_the_tags(); if ( $tag ) { ?><p><?php the_tags(); ?></p><?php } ?>
			</footer>
		</div>
	</div>
</div>