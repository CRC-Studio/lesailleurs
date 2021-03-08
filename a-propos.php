<?php
/*
Template Name:  À propos
*/

get_header();
get_template_part('parts/nav');
?>

<main class="main l-apropos">
  <?php get_template_part('blocks/block__cover') ?>
  <?php get_template_part('blocks/block__editorblocksystem') ?>
  <?php get_template_part('blocks/block__partenaires') ?>
  <?php get_template_part('blocks/block__biglinks') ?>
  <?php get_template_part('blocks/block__form') ?>

</main>

<?php get_footer(); ?>
