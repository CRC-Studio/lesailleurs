<?php
/*
Template Name:  Résidence d'écriture
*/

get_header(); ?>
<?php get_template_part('parts/nav') ?>

<main class="main l-residence-ecriture">

  <?php get_template_part('blocks/block__cover') ?>
  <?php get_template_part('blocks/block__editorblocksystem') ?>
  <?php get_template_part('blocks/block__accordion') ?>
  <?php

  if( get_field('resi__programme') ) {
    get_template_part('blocks/block__accordion');
  }
  ?>


  <?php get_template_part('blocks/block__partenaires') ?>

</main>

<?php get_footer(); ?>
