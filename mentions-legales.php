<?php
/*
Template Name:  Mentions légales
*/

get_header();
get_template_part('parts/nav');
?>

<main class="main l-mentions">
  <?php get_template_part('blocks/block__cover') ?>
  <?php get_template_part('blocks/block__editorblocksystem') ?>
  <?php get_template_part('blocks/block__accordion') ?>
</main>

<?php get_footer(); ?>
