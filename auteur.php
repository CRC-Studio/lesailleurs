<?php
/*
Template Name:  Auteurs
*/

get_header(); ?>

<main class="main l-auteurs">
  <?php get_template_part('parts/nav') ?>
  <?php get_template_part('blocks/block__cover') ?>

  <?php $loop = new WP_Query(
    array(
      'post_type'       => 'auteur',
      'oderby'          => 'title',
      'order'  			    => 'asc',
      'posts_per_page'  => -1
    )
  );
  if ($loop->have_posts()) :?>
  <ul class="l-auteurs__items l12">
  <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
    <?php get_template_part('parts/part__template-auteur') ?>
  <?php endwhile; ?>
</ul>
<?php endif; wp_reset_query(); ?>
</main>

<?php get_footer(); ?>
