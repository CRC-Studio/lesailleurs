<?php
/*
Template Name:  Sélection Single
*/

get_header(); ?>

<main class="main l-selection">
  <?php get_template_part('parts/nav') ?>

  <?php get_template_part('blocks/block__cover') ?>

  <?php // Voir les sélections ?>

  <?php get_template_part('parts/part__template-selection') ?>

  <?php // Voir les sélections précédentes ? ?>

  <?php $loop = new WP_Query(
    array(
      'post_type'       => 'selection',
      'orderby'         => 'title',
      'order'           => 'ASC',
      'posts_per_page'  => -1
    )
  );
  if ($loop->have_posts()) :?>

  <section class="thm">
    <div class="thm__container l6 m3">
      <div class="row thm__title thm__more">
        <span class="display1"><?php _e("Découvrir les sélections précédentes","lesailleurs") ?></span>
        <p class="body color__legende"><?php _e("Toutes exactement conformes à nos valeurs : toutes singulières.","lesailleurs") ?></p>
        <div class="divider"></div>
      </div>
      <div class="row thm__thms">
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
          <a href="<?php the_permalink(); ?>" class="btn btn--outline"><?php the_title(); ?></a>
        <?php endwhile; ?>
      </div>
    </div>
  </section>
<?php endif; wp_reset_query(); ?>


</main>

<?php get_footer(); ?>
