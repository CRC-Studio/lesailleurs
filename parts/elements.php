<?php
/*
Theme Name: MonoBloc

*/

?>

<?php if( have_rows('bloc') ): ?>

    <?php while ( have_rows('bloc') ) : the_row(); ?>

			<?php get_template_part( 'parts/element_texte' ); ?>
			<?php get_template_part( 'parts/element_accordion' ); ?>
			<?php get_template_part( 'parts/element_cover' ); ?>
			<?php get_template_part( 'parts/element_slideshow' ); ?>
			<?php get_template_part( 'parts/element_html' ); ?>
			<?php get_template_part( 'parts/element_image' ); ?>
			<?php get_template_part( 'parts/element_empty' ); ?>

    <?php endwhile; ?>

<?php else : ?>
<?php endif; ?>
