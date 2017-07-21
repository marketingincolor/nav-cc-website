<?php
global $post;
$img = wp_get_attachment_image_src(get_post_thumbnail_id(),'full'); 
$featured_image = $img[0];
$thumbnail_id = get_post_thumbnail_id( $post->ID );
$alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
?>

<div class="row-expanded">
    <img src="<?php echo $featured_image; ?>" alt="<?php echo $alt; ?>" style="width: 100%;" />
</div>