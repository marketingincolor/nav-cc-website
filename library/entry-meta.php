<?php
/**
 * Entry meta information for posts
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */


if ( ! function_exists( 'foundationpress_entry_meta' ) ) :
	function foundationpress_entry_meta( $author, $category, $date ) {
		global $post;
		$categories = get_the_category();
		$cat = $categories[0]->cat_name;


		/* translators: %1$s: current date, %2$s: current time */
		echo '<div id="entry-meta">';

		if ( $author == true ) ?>
			<img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/blog_03.png'; ?>"/>
		<?php
			echo '<a href="' . get_author_posts_url( get_the_author_meta( 'ID' ) ) . '" rel="author" class="fn" id="author">' . get_the_author() . '</a>';
		if ( $category == true ) : ?>
			<?php foreach (get_the_category() as $cat) : ?>
			<?php if (function_exists('z_taxonomy_image_url')): ?>
			 		<img src="<?php echo z_taxonomy_image_url($cat->term_id); ?>" />
					<a href="<?php echo get_category_link($cat->term_id); ?>"><?php echo $cat->cat_name; ?></a>
				<?php endif; ?>
			<?php endforeach; ?>
		<?php endif;
		if ( $date == true )
			echo '<time class="updated" id="time" datetime="' . get_the_time( 'c' ) . '">' . sprintf( __( '%1$s', 'foundationpress' ), get_the_date("m.d.y") ) . '</time>';
		echo '</div>';
	}
endif;
