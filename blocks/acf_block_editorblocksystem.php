<?php

/**
 * Cover Block Text.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */


 // Create id attribute allowing for custom "anchor" value.
 $id = 'cover-' . $block['id'];
 if( !empty($block['anchor']) ) {
     $id = $block['anchor'];
 }


 // Create class attribute allowing for custom "className" and "align" values.
 $className = 'testimonial';
 if( !empty($block['className']) ) {
     $className .= ' ' . $block['className'];
 }
 if( !empty($block['align']) ) {
     $className .= ' align' . $block['align'];
 }

?>


<?php
	$image = get_field('cover');
?>


<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
	<section class="cover">
    <?php echo wp_get_attachment_image( $image, 'full' ); ?>
		<p><?php echo $test; ?></p>
	</section>
</div>
