<?php
/*
Template Name: Sélection
*/

get_header(); ?>
<?php get_template_part('parts/nav') ?>
<main class="main l-selection">

  <?php get_template_part('blocks/block__cover') ?>
  <?php get_template_part('blocks/block__editorblocksystem') ?>


  <?php // Voir les sélections précédentes ? ?>

  <?php $loop = new WP_Query(
    array(
      'post_type'       => 'selection',
      'orderby'         => 'title',
      'order'           => 'DES',
      'posts_per_page'  => -1
    )
  );
  if ($loop->have_posts()) :?>
  <section>
    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
      <a href="<?php the_permalink(); ?>">
        <div class="row"><h3 class="display2"><?php the_title(); ?></h3></div>
      </a>
    <?php endwhile; ?>
  </section>
<?php endif; wp_reset_query(); ?>


</main>

<?php get_footer(); ?>
