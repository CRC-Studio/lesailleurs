<?php
/*
Template Name:  Edtions
*/

get_header(); ?>
<main class="main l-edition">
  <?php get_template_part('parts/nav') ?>

  <?php get_template_part('blocks/block__cover') ?>
  <?php get_template_part('blocks/block__editorblocksystem') ?>
  <?php get_template_part('blocks/block__accordion') ?>
  <?php get_template_part('blocks/block__documents') ?>

</main>

<?php get_footer(); ?>
