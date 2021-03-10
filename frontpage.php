<?php
/*
Template Name: Page d'accueil
*/

get_header();
get_template_part('parts/nav');

$post = get_field('home');
if( $post ):
  global $wp_query;
  $wp_query = new WP_Query( array( 'p' => $post ) );
  include( 'single-edition.php' );
endif;

get_footer();

?>
