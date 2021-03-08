<?php
/*
Template Name:  Event category
*/

get_header();
get_template_part('parts/nav');
?>

<section class="l-event-cath row">
  <div class="col l12">
    <h1><?php the_title(); ?></h1>
  </div>
  <?php get_template_part( 'parts/elements' ); ?>
</section>


<?php get_footer(); ?>
