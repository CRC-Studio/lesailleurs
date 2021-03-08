<?php
/*
Template Name: Éditions
*/

get_header();
get_template_part('parts/nav');
?>


<main class="main l-edition">

  <?php get_template_part('blocks/block__cover') ?>
  <?php get_template_part('blocks/block__editorblocksystem') ?>


  <?php // Voir les Éditions précédentes ? ?>

  <?php $loop = new WP_Query(
    array(
      'post_type'       => 'edition',
      'orderby'         => 'title',
      'order'           => 'DES',
      'posts_per_page'  => -1
    )
  );
  if ($loop->have_posts()) :?>
  <section>
    <ul class="is--not--hover">
      <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <?php get_template_part('parts/part__list') ?>
      <?php endwhile; ?>
    </ul>
  </section>
<?php endif; wp_reset_query(); ?>

</main>
<?php get_footer(); ?>
