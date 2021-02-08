
<?php get_template_part('blocks/block__cover') ?>
<?php get_template_part('blocks/block__editorblocksystem') ?>

<?php // Voir les sélections ?>

<?php $post = get_field('edt__slc'); ?>
<?php if( $post ): ?>
  <?php setup_postdata($post); // Setup this post for WP functions (variable must be named $post).?>
  <?php get_template_part('parts/part__template-selection') ?>
  <?php wp_reset_postdata(); // Reset the global post object so that the rest of the page works correctly. ?>
<?php endif; ?>

<?php // Voir les autres sélections ?>

<section class="thm">
  <button id="thm__readmore-btn" class="btn btn--outline"><?php _e("Voir toute la sélection","lesailleurs") ?></button>
    <div class="row thm__more">
      <div class="divider"></div>
            <p class="body color__legende"><?php _e("Découvrez aussi","lesailleurs") ?><br><a href="<?php echo home_url(); ?>/selections"><?php _e("les sélections précédentes","lesailleurs") ?></a></p>
    </div>
  </div>
</section>



<?php get_template_part('blocks/block__accordion') ?>
<?php get_template_part('blocks/block__documents') ?>
