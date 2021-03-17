<?php $backup_post = $post // Utile pour relancer la loop après un wp_reset_postdata(); ?>

<?php get_template_part('blocks/block__editorblocksystem') ?>



<?php
/**
* 	Mélange les Œuvres de façon aléatoire
*/
?>

<?php $rows = get_field( 'slc' ); ?>


<?php
/**
* 	Affiche les Œuvres avec Mention
*/
?>

<?php if( $rows ): ?>
	<?php shuffle( $rows ) ?>

	<section class="slc slc__readmore">
		<div class="row ebs__titre">
			<div class="m2">
				<h2 class="subheading"><?php _e("La sélection","lesailleurs") ?></h2>
				<div class="divider"></div>
			</div>
		</div>

		<?php  // Paramètre pour la première oeuvre de la Selection ?>
		<?php  $slc__lar = 5; ?>
		<?php  $slc__marh = 5; ?>
		<?php  $slc__marv = 6; ?>
		<?php  $isf__vit = 1; ?>

		<?php foreach( $rows as $row ): ?>

			<?php // Récupère les valeurs pour le label

			$terms = $row['slc__mention'];
			if( $terms ):
				foreach( $terms as $term ):
					$slc__labeltext = esc_html( $term->name )." ".get_the_title();
					set_query_var( 'slc__labeltext', $slc__labeltext );
					?>
					<?php $post = $row['slc__oeuvre']; ?>
					<?php setup_postdata($post); // Setup this post for WP functions (variable must be named $post). ?>
					<article class="slc__slc is--float <?php if (isset($slc__lar)) {echo "slc__lar".$slc__lar;}; if (isset($slc__marh)) {echo " slc__marh".$slc__marh;}; if (isset($slc__marv)) {echo " slc__marv".$slc__marv;}; if (isset($isf__vit)) {echo " isf__vit".$isf__vit;}; ?>  is--zoooom" onclick="location.href='<?php the_permalink(); ?>'">
						<?php get_template_part('parts/part__template-oeuvre-selectionnee') ?>
						<?php get_template_part('parts/part__slc__label', 'slc__labeltext'); ?>
					</article>
				<?php
				wp_reset_postdata(); // Reset the global post object so that the rest of the page works correctly
				$post = $backup_post; // Utile pour relancer la loop après un wp_reset_postdata();
				endforeach;
			else:
				$slc__labeltext = '';
				set_query_var( 'slc__labeltext', $slc__labeltext );
			endif;
			?>
		<?php endforeach; ?>



	<?php
	/**
	* 	Affiche les Œuvres sans Mention
	*/
	?>


		<?php foreach( $rows as $row ): ?>
			<?php  // Tire au sort les valeurs pour les autres oeuvres ?>
			<?php  $slc__lar = random_int(1, 7); ?>
			<?php  $slc__marh = random_int(1, 6); ?>
			<?php  $slc__marv = random_int(1, 6); ?>
			<?php  $isf__vit = random_int(1, 6); ?>

			<?php // Récupère les valeurs pour le label
			$terms = $row['slc__mention'];
			if( !$terms ):
				$post = $row['slc__oeuvre'];
				setup_postdata($post); // Setup this post for WP functions (variable must be named $post).
				?>
				<article class="slc__slc is--float <?php if (isset($slc__lar)) {echo "slc__lar".$slc__lar;}; if (isset($slc__marh)) {echo " slc__marh".$slc__marh;}; if (isset($slc__marv)) {echo " slc__marv".$slc__marv;}; if (isset($isf__vit)) {echo " isf__vit".$isf__vit;}; ?>  is--zoooom" onclick="location.href='<?php the_permalink(); ?>'">
					<?php get_template_part('parts/part__template-oeuvre-selectionnee') ?>
				</article>
			<?php	endif; ?>

			<?php wp_reset_postdata(); // Reset the global post object so that the rest of the page works correctly.?>
			<?php $post = $backup_post; // Utile pour relancer la loop après un wp_reset_postdata(); ?>
		<?php endforeach; ?>
		<div class="slc__readmore-overlay"></div>
	</section>
<?php endif; ?>
