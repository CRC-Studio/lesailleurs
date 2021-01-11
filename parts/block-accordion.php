<?php
/**
 * Block Name: Accordion
 *
 */
?>

<div class="accordion">
  <div class="accordion__titre">
    <h2 class="display1"><?php the_field('titre'); ?></h2>
    <div class="accordion__icon">
      <?php get_template_part('assets/img/inline', 'icon_arrow_accordion.svg'); ?>
    </div>
  </div>
  <div class="accordion__container">
    <?php the_field('texte'); ?>
  </div>
</div>
