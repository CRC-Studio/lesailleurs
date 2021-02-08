
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

<section class="thm white--isnt--white">
  <button id="thm__readmore-btn" class="btn btn--outline"><?php _e("Voir toute la sélection","lesailleurs") ?></button>
    <div class="row thm__more">
      <div class="divider"></div>
            <p class="body color__legende"><?php _e("Découvrez aussi","lesailleurs") ?><br><a href="<?php echo home_url(); ?>/selections"><?php _e("les sélections précédentes","lesailleurs") ?></a></p>
    </div>
  </div>
</section>

<?php // Voir l'agenda ?>

<?php $evenements = get_posts(array(
  'post_type'       => 'evenement',
  'posts_per_page'  => -1,
  'meta_query'      => array(
    array(
      'key' => 'eve__edi',
      'value' => '"' . get_the_ID() . '"',
      'compare' => 'LIKE'
    )
  )
));
?>
<?php if( $evenements ): ?>
  <section>
    <ul>
      <?php foreach( $evenements as $evenement ): ?>
        <?php $post = $evenement; ?>
        <?php setup_postdata($post); // Setup this post for WP functions (variable must be named $post). ?>
          <?php get_template_part('parts/part__template-evenement-single') ?>
        <?php wp_reset_postdata(); // Reset the global post object so that the rest of the page works correctly.?>
      <?php endforeach; ?>
    </ul>
    <div class="thm"> <?php // Voir tous les événements ?>
      <div class="row thm__more">
        <div class="divider"></div>
        <a href="<?php echo home_url(); ?>/agenda" class="btn btn--outline"><?php _e("Voir tous les événements","lesailleurs") ?></a>
      </div>
    </div>
  </section>
<?php endif; ?>



<?php get_template_part('blocks/block__accordion') ?>
<?php get_template_part('blocks/block__documents') ?>
<?php get_template_part('blocks/block__partenaires') ?>
