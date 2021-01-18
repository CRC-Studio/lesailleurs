<?php
/*
Template Name:  Page d'accueil
*/

get_header(); ?>

<section class="l-frontpage row">
  <div class="col l6 xl6">
    <h1><?php the_title(); ?></h1>
    <p class="headline">Peut-être est-ce difficile à croire, mais ici se tiendra bientôt fièrement le site <a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a>. Pour le moment, vous avez simplement sous les yeux Monobloc.</p>
  </div>
  <?php get_template_part( 'parts/elements' ); ?>
</section>


<?php get_footer(); ?>
