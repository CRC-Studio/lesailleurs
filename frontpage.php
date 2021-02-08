<?php
/*
Template Name: Page d'accueil
*/

get_header(); ?>
<?php get_template_part('parts/nav') ?>

<main class="main l-frontpage">
  <?php $post = get_field('home'); ?>
  <?php if( $post ): ?>
    <?php setup_postdata($post); // Setup this post for WP functions (variable must be named $post). ?>
      <?php get_template_part('parts/part__template-single-edition') ?>
    <?php wp_reset_postdata(); // Reset the global post object so that the rest of the page works correctly. ?>
  <?php endif; ?>

</main>
<?php get_footer(); ?>
