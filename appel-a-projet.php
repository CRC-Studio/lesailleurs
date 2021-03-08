<?php
/*
Template Name:  Appel à Projet
*/

get_header();
get_template_part('parts/nav');
?>

<section class="l-appel-a-projet row">
  <div class="col l12">
    <h1><?php the_title(); ?></h1>
  </div>
  <?php get_template_part( 'parts/elements' ); ?>
</section>


<?php get_footer(); ?>
