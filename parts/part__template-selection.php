	<?php $backup_post = $post // Utile pour relancer la loop après un wp_reset_postdata(); ?>

	<?php get_template_part('blocks/block__editorblocksystem') ?>

  <?php if( have_rows('slc') ): ?>
    <section class="slc">
      <div class="row ebs__titre">
        <div class="m2">
          <h2 class="subheading"><?php _e("La suite de la sélections","lesailleurs") ?></h2>
          <div class="divider"></div>
        </div>
      </div>
      <?php while( have_rows('slc') ): the_row(); ?>
        <?php $post = get_sub_field('slc__oeuvre'); ?>
        <?php setup_postdata($post); // Setup this post for WP functions (variable must be named $post). ?>
        <?php  $slc__lar = random_int(1, 7); ?>
        <?php  $slc__marh = random_int(1, 6); ?>
        <?php  $slc__marv = random_int(1, 6); ?>
        <?php  $slc__vit = random_int(1, 6); ?>
        <article class="slc__slc  <?php if (isset($slc__lar)) {echo "slc__lar".$slc__lar;}; if (isset($slc__marh)) {echo " slc__marh".$slc__marh;}; if (isset($slc__marv)) {echo " slc__marv".$slc__marv;}; if (isset($slc__vit)) {echo " slc__vit".$slc__vit;}; ?>" onclick="location.href='<?php the_permalink(); ?>'">
          <?php get_template_part('parts/part__template-oeuvre-selectionnee') ?>
        </article>
        <?php wp_reset_postdata(); // Reset the global post object so that the rest of the page works correctly.?>
				<?php $post = $backup_post // Utile pour relancer la loop après un wp_reset_postdata(); ?>
      <?php endwhile; ?>
    </section>
  <?php endif; ?>
