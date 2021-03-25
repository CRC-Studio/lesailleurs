<?php
/*
Template Name: Édtions Single
*/

get_header();
get_template_part('parts/nav');
?>

<main class="main l-edition">

  <?php get_template_part('blocks/block__cover') ?>
  <?php get_template_part('blocks/block__editorblocksystem') ?>

  <?php // Voir les sélections ?>


  <?php $backup_post = $post // Utile pour relancer la loop après un wp_reset_postdata(); ?>
  <?php $post = get_field('edt__slc'); ?>
  <?php if( $post ): ?>
    <?php setup_postdata($post); // Setup this post for WP functions (variable must be named $post).?>
    <?php get_template_part('parts/part__template-selection') ?>
    <?php wp_reset_postdata(); // Reset the global post object so that the rest of the page works correctly. ?>
  <?php endif; ?>
  <?php $post = $backup_post // Utile pour relancer la loop après un wp_reset_postdata(); ?>


  <?php // Voir les autres sélections ?>

  <section class="thm">
    <button class="btn btn--outline slc__readmore-btn"><?php _e("Voir toute la sélection","lesailleurs") ?></button>
    <div class="row thm__more">
      <div class="divider"></div>
      <p class="body color__legende"><?php _e("Découvrez aussi","lesailleurs") ?><br><a href="<?php echo home_url(); ?>/selections"><?php _e("les sélections précédentes","lesailleurs") ?></a></p>
    </div>
  </section>

  <?php // Afficher block__participate ?>

  <?php get_template_part('blocks/block__joindre') ?>

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
    <?php $backup_post = $post // Utile pour relancer la loop après un wp_reset_postdata(); ?>
    <section class="eve">
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
          <a href="<?php echo get_polypage_link('agenda'); ?>" class="btn btn--outline"><?php _e("Voir tous les événements","lesailleurs") ?></a>
        </div>
      </div>
    </section>
    <?php $post = $backup_post // Utile pour relancer la loop après un wp_reset_postdata(); ?>
  <?php endif; ?>


  <?php get_template_part('blocks/block__accordion') ?>
  <?php get_template_part('blocks/block__documents') ?>
  <?php get_template_part('blocks/block__partenaires') ?>
</main>

<?php get_footer(); ?>
