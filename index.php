<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
 global $post;
$img = wp_get_attachment_image_src( get_post_thumbnail_id( get_option('page_for_posts') ),'full' ); 
$alt = get_post_meta( get_post_thumbnail_id( get_option('page_for_posts')), '_wp_attachment_image_alt', true);
$featured_image = $img[0];
$author_id=$post->post_author;
get_header(); ?>

	<div id="" role="main">
		<article class="main-content">

			<!-- SEARCH -->
			<div id="search-bg" class="row-expanded">
				<div class="row">
					<div class="small-12 medium-4 columns medium-centered">
					<?php get_search_form(); ?>
					</div>
				</div>
			</div>
			<!-- /SEARCH -->
			
			<!-- FEATURED IMAGE -->
			<img src="<?php echo $featured_image; ?>" alt="<?php echo $alt; ?>" style="width: 100%;" />
			<!-- /FEATURED IMAGE -->

			<!-- FEATURED QUERY -->
			<?php query_posts('posts_per_page=2&offset=1'); ?>
			<div class="content-wrapper">
				<div class="row-expanded">
					<div class="small-12 columns text-center">
						<h1 class="top-header"><?php echo apply_filters( 'the_title', get_the_title( get_option( 'page_for_posts' ) ) );
?></h1>
					</div>
				</div>
				<div class="row post-listing" data-equalizer>
					<div id="featured-blog" class="small-12 text-center medium-text-justify columns">
						<div class="small-12 end">
							<header>
								<h2 class="blog-header"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							</header>
							<div id="cc-blog-image" style="min-width:100%; ">
								<a href="<?php the_permalink(); ?>">
								<?php 
								if(has_post_thumbnail()) {                    
									$image_src = wp_get_attachment_image_src( get_post_thumbnail_id(),'cc-featured-blog' );
 									echo '<img src="' . $image_src[0]  . '" width="100%"  />';
								} ?>
								</a>
							</div>
							<?php
							echo '<div id="entry-meta">';
							global $post;
							$author = get_the_author_meta();
							$category = get_the_category();
							$category = $category[0]->name;
							$date = false;

									if ( $author == true ) ?>
										<img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/quote_icon.png'; ?>"/>
									<?php
										echo '<a href="' . get_author_posts_url( $post->post_author ) . '" rel="author" class="fn" id="author">' . get_the_author_meta('display_name', $author_id) . '</a>';


									if ( $category == true && $category != "Uncategorized") : ?>
										<?php foreach (get_the_category() as $cat) : ?>
										<?php if (function_exists('z_taxonomy_image_url')): ?>
										 		<img src="<?php echo z_taxonomy_image_url($cat->term_id); ?>" />
												<a href="<?php echo get_category_link($cat->term_id); ?>"><?php echo $cat->cat_name; ?></a>
											<?php endif; ?>
										<?php endforeach; ?>
									<?php endif;


									if ( $date == true )
										echo '<em><strong><time class="updated" id="time" datetime="' . get_the_time( 'c' ) . '">' . sprintf( __( '%1$s', 'foundationpress' ), get_the_date("m.d.y") ) . '</strong></em></time>';
									echo '</div>';
							?>
							<div id="post-<?php the_ID(); ?>" <?php post_class('blogpost-entry'); ?>>
								<div class="entry-content">
									<?php echo the_content_by_id($post->ID); ?>
								</div>
								<footer>
									<?php $tag = get_the_tags(); if ( $tag ) { ?><p><?php the_tags(); ?></p><?php } ?>
								</footer>
							</div>
						</div>
					</div>

					<?php if ( have_posts() ) : ?>

						<?php /* Start the Loop */ ?>
						<?php while ( have_posts() ) : the_post(); ?>
							<?php get_template_part( 'template-parts/content', get_post_format() ); ?>
						<?php endwhile; ?>

						<?php else : ?>
							<?php get_template_part( 'template-parts/content', 'none' ); ?>
						<?php endif; // End have_posts() check. ?>
				</div>
				<div class="spinner" style="display:none;">
				  <div class="bounce1"></div>
				  <div class="bounce2"></div>
				  <div class="bounce3"></div>
				</div>
				<input id="cc_ajax" type="hidden" name="cc_ajax_offset" value="4" >

		</div>
		</article>
	</div>
	<?php get_template_part( 'template-parts/ribbon' ); ?>
<?php get_footer();
