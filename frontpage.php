<?php
/*
Template Name: Page d'accueil
*/

get_header(); ?>
<?php get_template_part('parts/nav') ?>

<main class="main l-frontpage">
  <?php
  $post = get_field('home');
  if( $post ):
    global $wp_query;
    $wp_query = new WP_Query( array( 'p' => $post ) );
    include( 'single-edition.php' );
  endif;
  ?>

</main>
<?php get_footer(); ?>
